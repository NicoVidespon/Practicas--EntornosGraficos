<?php

$link = include("conexion.php");

$resultado = null;
$busqueda = "";

if (isset($_GET["buscar"])) {

    $busqueda = $_GET["buscar"];

    $sql = "SELECT canciones
            FROM buscador
            WHERE canciones LIKE ?";

    $stmt = mysqli_prepare($link, $sql);

    $texto = "%" . $busqueda . "%";

    mysqli_stmt_bind_param(
        $stmt,
        "s",
        $texto
    );

    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>

<body>

    <h1>Buscador de canciones</h1>

    <form method="GET">

        <input
            type="text"
            name="buscar"
            placeholder="Ingrese una canción"
            value="<?php echo htmlspecialchars($busqueda); ?>"
            required>

        <button type="submit">
            Buscar
        </button>

    </form>

    <br>

    <?php

    if ($resultado !== null) {

        if (mysqli_num_rows($resultado) > 0) {

            echo "<h2>Resultados:</h2>";

            while ($fila = mysqli_fetch_assoc($resultado)) {

                echo "<p>" . htmlspecialchars($fila["canciones"]) . "</p>";
            }
        } else {

            echo "<p>No se encontraron canciones.</p>";
        }
    }

    ?>

</body>

</html>

<?php

mysqli_close($link);

?>
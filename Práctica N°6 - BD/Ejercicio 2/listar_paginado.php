<?php

$link = include("conexion.php");

$registrosPorPagina = 3;

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

$inicio = ($pagina - 1) * $registrosPorPagina;

$sql = "SELECT *
        FROM ciudades
        LIMIT $inicio, $registrosPorPagina";

$resultado = mysqli_query($link, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($link));
}

$sqlTotal = "SELECT COUNT(*) AS total FROM ciudades";

$resultadoTotal = mysqli_query($link, $sqlTotal);

$filaTotal = mysqli_fetch_assoc($resultadoTotal);

$totalRegistros = $filaTotal["total"];

$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado paginado</title>
</head>

<body>

    <h1>Listado de ciudades con paginación</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

            <tr>

                <td><?php echo $fila["id_ciudad"]; ?></td>

                <td><?php echo $fila["ciudad"]; ?></td>

                <td><?php echo $fila["pais"]; ?></td>

                <td><?php echo $fila["habitantes"]; ?></td>

                <td><?php echo $fila["superficie"]; ?></td>

                <td>
                    <?php
                    echo $fila["tieneMetro"] == 1 ? "Sí" : "No";
                    ?>
                </td>

            </tr>

        <?php } ?>

    </table>

    <br>

    <?php if ($pagina > 1) { ?>

        <a href="listar_paginado.php?pagina=<?php echo $pagina - 1; ?>">
            Anterior
        </a>

    <?php } ?>


    <?php

    for ($i = 1; $i <= $totalPaginas; $i++) {

        echo " ";

        if ($i == $pagina) {
            echo "<strong>$i</strong>";
        } else {
            echo "<a href='listar_paginado.php?pagina=$i'>$i</a>";
        }
    }

    ?>


    <?php if ($pagina < $totalPaginas) { ?>

        <a href="listar_paginado.php?pagina=<?php echo $pagina + 1; ?>">
            Siguiente
        </a>

    <?php } ?>

    <br><br>

    <a href="index.php">
        Volver al menú
    </a>

</body>

</html>

<?php

mysqli_free_result($resultado);
mysqli_free_result($resultadoTotal);
mysqli_close($link);

?>
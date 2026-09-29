<?php

$link = include("conexion.php");

$sql = "SELECT * FROM ciudades";

$resultado = mysqli_query($link, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($link));
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de ciudades</title>
</head>

<body>

    <h1>Listado de ciudades</h1>

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

    <a href="index.php">
        Volver al menú
    </a>

</body>

</html>

<?php

mysqli_free_result($resultado);
mysqli_close($link);

?>
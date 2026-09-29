<?php

session_start();

$link = include("conexion.php");

$sql = "SELECT * FROM catalogo";

$resultado = mysqli_query($link, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($link));
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>

<body>

    <h1>Catálogo de productos</h1>

    <table border="1">

        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>

        <?php while ($producto = mysqli_fetch_assoc($resultado)) { ?>

            <tr>

                <td>
                    <?php echo $producto["id_producto"]; ?>
                </td>

                <td>
                    $<?php echo $producto["precio"]; ?>
                </td>

                <td>
                    <a href="agregar.php?id=<?php echo urlencode($producto["id_producto"]); ?>">
                        Agregar al carrito
                    </a>
                </td>

            </tr>

        <?php } ?>

    </table>

    <br>

    <a href="carrito.php">
        Ver carrito
    </a>

</body>

</html>

<?php

mysqli_free_result($resultado);
mysqli_close($link);

?>
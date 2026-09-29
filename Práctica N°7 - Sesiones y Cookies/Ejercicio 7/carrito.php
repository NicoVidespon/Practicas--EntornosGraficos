<?php

session_start();

$link = include("conexion.php");

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

$total = 0;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
</head>

<body>

    <h1>Carrito de compras</h1>

    <?php if (empty($_SESSION["carrito"])) { ?>

        <p>El carrito está vacío.</p>

    <?php } else { ?>

        <table border="1">

            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>

            <?php foreach ($_SESSION["carrito"] as $idProducto => $cantidad) { ?>

                <?php

                $sql = "SELECT precio
                        FROM catalogo
                        WHERE id_producto = ?";

                $stmt = mysqli_prepare($link, $sql);

                mysqli_stmt_bind_param(
                    $stmt,
                    "s",
                    $idProducto
                );

                mysqli_stmt_execute($stmt);

                $resultado = mysqli_stmt_get_result($stmt);

                $producto = mysqli_fetch_assoc($resultado);

                $precio = $producto["precio"];

                $subtotal = $precio * $cantidad;

                $total += $subtotal;

                mysqli_stmt_close($stmt);

                ?>

                <tr>

                    <td>
                        <?php echo $idProducto; ?>
                    </td>

                    <td>
                        $<?php echo number_format($precio, 2); ?>
                    </td>

                    <td>
                        <?php echo $cantidad; ?>
                    </td>

                    <td>
                        $<?php echo number_format($subtotal, 2); ?>
                    </td>

                </tr>

            <?php } ?>

            <tr>

                <td colspan="3">
                    <strong>Total</strong>
                </td>

                <td>
                    <strong>
                        $<?php echo number_format($total, 2); ?>
                    </strong>
                </td>

            </tr>

        </table>

    <?php } ?>

    <br>

    <a href="index.php">
        Volver al catálogo
    </a>

</body>

</html>

<?php

mysqli_close($link);

?>
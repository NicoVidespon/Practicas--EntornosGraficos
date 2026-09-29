<?php

session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

if (isset($_GET["id"])) {

    $producto = $_GET["id"];

    if (isset($_SESSION["carrito"][$producto])) {

        $_SESSION["carrito"][$producto]++;
    } else {

        $_SESSION["carrito"][$producto] = 1;
    }
}

header("Location: carrito.php");
exit;

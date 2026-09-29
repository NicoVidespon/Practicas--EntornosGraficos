<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "Capitales";

$link = mysqli_connect($servidor, $usuario, $password, $base_datos);

if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8mb4");

return $link;
?>
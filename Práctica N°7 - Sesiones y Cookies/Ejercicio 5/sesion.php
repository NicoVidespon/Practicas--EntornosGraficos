<?php

session_start();

$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["clave"] = $_POST["clave"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Sesión creada</title>
</head>

<body>

    <h1>Variables de sesión creadas</h1>

    <p>Los datos del cliente fueron almacenados en la sesión.</p>

    <a href="mostrar.php">
        Ver datos almacenados
    </a>

</body>

</html>
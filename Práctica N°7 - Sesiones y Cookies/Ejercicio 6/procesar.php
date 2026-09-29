<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "base2";

$link = mysqli_connect(
    $servidor,
    $usuario,
    $password,
    $base_datos
);

if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

$mail = $_POST["mail"];

$sql = "SELECT nombre FROM alumnos WHERE mail = ?";

$stmt = mysqli_prepare($link, $sql);

mysqli_stmt_bind_param($stmt, "s", $mail);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if ($fila = mysqli_fetch_assoc($resultado)) {

    $_SESSION["nombre"] = $fila["nombre"];

    echo "<h1>Alumno encontrado</h1>";
    echo "<p>Nombre: " . $fila["nombre"] . "</p>";
    echo '<a href="bienvenida.php">Ir a la página de bienvenida</a>';
} else {

    echo "<h1>Alumno no encontrado</h1>";
    echo "<p>El mail ingresado no existe en la base de datos.</p>";
    echo '<a href="index.php">Volver</a>';
}

mysqli_stmt_close($stmt);
mysqli_close($link);

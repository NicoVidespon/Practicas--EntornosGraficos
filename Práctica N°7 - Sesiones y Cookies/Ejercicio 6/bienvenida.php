<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>

<body>

    <?php

    if (isset($_SESSION["nombre"])) {

        echo "<h1>Bienvenido, " . $_SESSION["nombre"] . "</h1>";
    } else {

        echo "<h1>Acceso denegado</h1>";
        echo "<p>No puede visitar esta página porque no hay una sesión iniciada.</p>";
    }

    ?>

    <br>

    <a href="index.php">
        Volver al formulario
    </a>

</body>

</html>
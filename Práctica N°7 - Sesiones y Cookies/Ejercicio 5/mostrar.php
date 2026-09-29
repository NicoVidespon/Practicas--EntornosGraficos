<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos de sesión</title>
</head>

<body>

    <h1>Datos almacenados en la sesión</h1>

    <p>
        Usuario:
        <strong>
            <?php echo $_SESSION["usuario"]; ?>
        </strong>
    </p>

    <p>
        Clave:
        <strong>
            <?php echo $_SESSION["clave"]; ?>
        </strong>
    </p>

    <a href="index.php">
        Volver
    </a>

</body>

</html>
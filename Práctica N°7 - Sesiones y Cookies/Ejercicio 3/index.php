<?php

if (isset($_POST["nombre"])) {

    $nombre = $_POST["nombre"];

    setcookie(
        "usuario",
        $nombre,
        time() + (30 * 24 * 60 * 60)
    );
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>

<body>

    <h1>Nombre de usuario</h1>

    <?php

    if (isset($_COOKIE["usuario"])) {

        echo "<p>Último nombre ingresado: <strong>"
            . $_COOKIE["usuario"]
            . "</strong></p>";
    }

    ?>

    <form method="POST">

        <label for="nombre">
            Nombre de usuario:
        </label>

        <input
            type="text"
            id="nombre"
            name="nombre"
            required>

        <button type="submit">
            Guardar
        </button>

    </form>

</body>

</html>
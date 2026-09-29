<?php

session_start();

if (isset($_POST["nombre"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email_amigo = $_POST["email_amigo"];
    $mensaje = $_POST["mensaje"];

    $asunto = "Un amigo te recomienda este sitio";

    $cuerpo = "
    <html>
    <body>
        <h2>Recomendación de un sitio web</h2>
        <p><strong>$nombre</strong> te recomienda visitar este sitio.</p>
        <p>$mensaje</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: webmaster@ejemplo.com\r\n";

    if (mail($email_amigo, $asunto, $cuerpo, $headers)) {
        echo "<p>La recomendación fue enviada correctamente.</p>";
    } else {
        echo "<p>No se pudo enviar la recomendación.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>

<body>

    <h1>Recomendar este sitio a un amigo</h1>

    <?php
    if (isset($_SESSION["nombre"])) {
        echo "<p>Hola, " . $_SESSION["nombre"] . ".</p>";
    }
    ?>

    <form method="POST" action="">

        <label for="nombre">Tu nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="email_amigo">Email de tu amigo:</label><br>
        <input type="text" id="email_amigo" name="email_amigo" required>
        <br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" cols="40" required></textarea>
        <br><br>

        <input type="submit" value="Recomendar sitio">

    </form>

</body>

</html>
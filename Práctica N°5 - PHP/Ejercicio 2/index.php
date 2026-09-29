<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "webmaster@ejemplo.com";

    $cuerpo = "
    <html>
    <body>
        <h2>Consulta de contacto</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Asunto:</strong> $asunto</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Consulta enviada correctamente.</p>";
    } else {
        echo "<p>No se pudo enviar la consulta.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>

<body>

    <h1>Contacto</h1>

    <form method="POST" action="">

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" required>
        <br><br>

        <label for="asunto">Asunto:</label><br>
        <input type="text" id="asunto" name="asunto" required>
        <br><br>

        <label for="mensaje">Consulta:</label><br>
        <textarea id="mensaje" name="mensaje" rows="6" cols="40" required></textarea>
        <br><br>

        <input type="submit" value="Enviar consulta">

    </form>

</body>

</html>
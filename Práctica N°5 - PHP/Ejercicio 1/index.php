<?php

$destinatario = "correo@ejemplo.com";
$asunto = "Prueba de correo HTML";

$cuerpo = "
<html>
<head>
    <title>Prueba de correo</title>
</head>
<body>
    <h1>Prueba de envío</h1>
    <p>Este es un correo enviado mediante <strong>PHP</strong>.</p>
    <p>El mensaje tiene formato HTML.</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: correo@ejemplo.com\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);

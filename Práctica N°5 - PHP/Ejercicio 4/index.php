<?php

session_start();

if (!isset($_SESSION["paginas_visitadas"])) {
    $_SESSION["paginas_visitadas"] = 1;
} else {
    $_SESSION["paginas_visitadas"]++;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>

<body>

    <h1>Páginas visitadas</h1>

    <p>
        Has visitado
        <strong><?php echo $_SESSION["paginas_visitadas"]; ?></strong>
        páginas durante esta sesión.
    </p>

</body>

</html>
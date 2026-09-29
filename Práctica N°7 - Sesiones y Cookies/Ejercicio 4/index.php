<?php

if (isset($_POST["titular"])) {

    $titular = $_POST["titular"];

    setcookie(
        "titular",
        $titular,
        time() + (30 * 24 * 60 * 60)
    );
} else {

    if (isset($_COOKIE["titular"])) {
        $titular = $_COOKIE["titular"];
    } else {
        $titular = "";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <h1>Diario Online</h1>

    <h2>Elegí qué tipo de titular querés ver</h2>

    <form method="POST">

        <label>
            <input
                type="radio"
                name="titular"
                value="politica"
                <?php if ($titular == "politica") echo "checked"; ?>>
            Noticia política
        </label>

        <br>

        <label>
            <input
                type="radio"
                name="titular"
                value="economica"
                <?php if ($titular == "economica") echo "checked"; ?>>
            Noticia económica
        </label>

        <br>

        <label>
            <input
                type="radio"
                name="titular"
                value="deportiva"
                <?php if ($titular == "deportiva") echo "checked"; ?>>
            Noticia deportiva
        </label>

        <br><br>

        <button type="submit">
            Guardar preferencia
        </button>

    </form>

    <hr>

    <?php

    if ($titular == "") {

        echo "<h2>Noticia política</h2>";
        echo "<p>El Congreso debate nuevas medidas económicas.</p>";

        echo "<h2>Noticia económica</h2>";
        echo "<p>Se anunciaron nuevas medidas para la economía nacional.</p>";

        echo "<h2>Noticia deportiva</h2>";
        echo "<p>El equipo local se prepara para su próximo partido.</p>";
    } elseif ($titular == "politica") {

        echo "<h2>Noticia política</h2>";
        echo "<p>El Congreso debate nuevas medidas económicas.</p>";
    } elseif ($titular == "economica") {

        echo "<h2>Noticia económica</h2>";
        echo "<p>Se anunciaron nuevas medidas para la economía nacional.</p>";
    } elseif ($titular == "deportiva") {

        echo "<h2>Noticia deportiva</h2>";
        echo "<p>El equipo local se prepara para su próximo partido.</p>";
    }

    ?>

    <br>

    <a href="borrar_cookie.php">
        Borrar preferencia
    </a>

</body>

</html>
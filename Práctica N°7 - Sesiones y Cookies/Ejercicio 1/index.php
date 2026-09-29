<?php

if (isset($_POST["estilo"])) {

    $estilo = $_POST["estilo"];

    setcookie("estilo", $estilo, time() + (30 * 24 * 60 * 60));
} else {

    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    } else {
        $estilo = "claro";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Ejercicio 1</title>

    <?php
    if ($estilo == "oscuro") {
        echo '<link rel="stylesheet" href="estilo_oscuro.css">';
    } else {
        echo '<link rel="stylesheet" href="estilo_claro.css">';
    }
    ?>

</head>

<body>

    <h1>Página configurable</h1>

    <p>
        Seleccioná el estilo que querés utilizar.
    </p>

    <form method="POST">

        <label for="estilo">
            Elegir estilo:
        </label>

        <select name="estilo" id="estilo">

            <option value="claro"
                <?php
                if ($estilo == "claro") {
                    echo "selected";
                }
                ?>>
                Claro
            </option>

            <option value="oscuro"
                <?php
                if ($estilo == "oscuro") {
                    echo "selected";
                }
                ?>>
                Oscuro
            </option>

        </select>

        <br><br>

        <button type="submit">
            Aplicar estilo
        </button>

    </form>

</body>

</html>
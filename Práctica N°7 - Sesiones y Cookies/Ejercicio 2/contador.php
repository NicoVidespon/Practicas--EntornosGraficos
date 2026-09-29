<?php

if (isset($_COOKIE["contador"])) {

    $contador = $_COOKIE["contador"] + 1;

} else {

    $contador = 1;

}

setcookie("contador", $contador, time() + (30 * 24 * 60 * 60));

if ($contador == 1) {

    echo "<h1>Bienvenido</h1>";
    echo "<p>Es la primera vez que visitas esta página.</p>";

} else {

    echo "<h1>Bienvenido nuevamente</h1>";
    echo "<p>Has visitado esta página $contador veces.</p>";

}

?>
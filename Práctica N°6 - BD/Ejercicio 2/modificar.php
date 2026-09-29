<?php

$link = include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $habitantes = $_POST["habitantes"];
    $superficie = $_POST["superficie"];
    $tieneMetro = $_POST["tieneMetro"];

    $sql = "UPDATE ciudades
            SET ciudad = ?,
                pais = ?,
                habitantes = ?,
                superficie = ?,
                tieneMetro = ?
            WHERE id_ciudad = ?";

    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssidii",
        $ciudad,
        $pais,
        $habitantes,
        $superficie,
        $tieneMetro,
        $id
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Ciudad modificada correctamente.</p>";
    } else {
        echo "<p>Error al modificar la ciudad: " . mysqli_error($link) . "</p>";
    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar ciudad</title>
</head>

<body>

    <h1>Modificar ciudad</h1>

    <form method="POST">

        <label for="id">ID:</label><br>
        <input type="number" id="id" name="id" required>
        <br><br>

        <label for="ciudad">Ciudad:</label><br>
        <input type="text" id="ciudad" name="ciudad" required>
        <br><br>

        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais" required>
        <br><br>

        <label for="habitantes">Habitantes:</label><br>
        <input type="number" id="habitantes" name="habitantes" required>
        <br><br>

        <label for="superficie">Superficie:</label><br>
        <input type="number" step="0.01" id="superficie" name="superficie" required>
        <br><br>

        <label for="tieneMetro">¿Tiene Metro?</label><br>
        <select id="tieneMetro" name="tieneMetro">
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>

        <br><br>

        <button type="submit">Modificar</button>

    </form>

    <br>

    <a href="index.php">Volver al menú</a>

</body>

</html>
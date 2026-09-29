<?php

$link = include("conexion.php");

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM ciudades WHERE id_ciudad = ?";

    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Ciudad eliminada correctamente.</p>";
    } else {
        echo "<p>Error al eliminar la ciudad: " . mysqli_error($link) . "</p>";
    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Baja de ciudad</title>
</head>

<body>

    <h1>Baja de ciudad</h1>

    <form method="GET">

        <label for="id">ID de la ciudad:</label><br>

        <input
            type="number"
            id="id"
            name="id"
            required>

        <br><br>

        <button type="submit">
            Eliminar
        </button>

    </form>

    <br>

    <a href="index.php">
        Volver al menú
    </a>

</body>

</html>
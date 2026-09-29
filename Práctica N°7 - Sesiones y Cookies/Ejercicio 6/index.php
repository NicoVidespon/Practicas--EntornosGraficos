<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>

<body>

    <h1>Buscar alumno</h1>

    <form action="procesar.php" method="POST">

        <label for="mail">Mail del alumno:</label><br>

        <input
            type="text"
            id="mail"
            name="mail"
            required>

        <br><br>

        <button type="submit">
            Buscar
        </button>

    </form>

</body>

</html>
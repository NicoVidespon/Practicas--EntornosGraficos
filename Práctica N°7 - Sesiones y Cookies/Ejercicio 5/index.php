<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>

<body>

    <h1>Ingreso de cliente</h1>

    <form action="sesion.php" method="POST">

        <label for="usuario">
            Usuario:
        </label>

        <input
            type="text"
            id="usuario"
            name="usuario"
            required>

        <br><br>

        <label for="clave">
            Clave:
        </label>

        <input
            type="password"
            id="clave"
            name="clave"
            required>

        <br><br>

        <button type="submit">
            Ingresar
        </button>

    </form>

</body>

</html>
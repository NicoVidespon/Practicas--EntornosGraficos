# Ejercicio 3

## a) ¿Para qué se utiliza el código?

El código se utiliza para **crear una tabla HTML de forma dinámica con PHP**.

* `$row = 5` indica la cantidad de filas.
* `$col = 2` indica la cantidad de columnas.
* Los bucles `for` recorren las filas y columnas.

El resultado es una tabla de **5 filas y 2 columnas**, es decir, **10 celdas**.

## b) ¿Para qué se utiliza el código?

El código crea un **formulario para ingresar la edad de un usuario** y determina si es mayor o menor de edad.

* `isset()` verifica si el formulario fue enviado.
* `$_POST['age']` obtiene la edad ingresada.
* `if` compara la edad con `21`.

Si la edad es 21 o mayor muestra **"Mayor de edad"**; de lo contrario, muestra **"Menor de edad"**.

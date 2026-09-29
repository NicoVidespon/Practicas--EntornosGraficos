# Ejercicio 1

## Completar consulta a una base de datos

Para iniciar una conexión con un servidor MySQL se utiliza:

**`mysqli_connect()`**

Los parámetros más utilizados son:

**Servidor, usuario y contraseña.**

Para seleccionar una base de datos se utiliza:

**`mysqli_select_db()`**

Recibe como parámetros:

**La conexión y el nombre de la base de datos.**

La función `mysqli_query()` sirve para:

**Ejecutar una consulta SQL.**

Sus parámetros son:

**La conexión y la consulta SQL.**

`or die()` se utiliza para:

**Detener la ejecución si ocurre un error y mostrar un mensaje.**

`mysqli_error()` permite:

**Obtener información sobre el error ocurrido.**

## Explicación del código

```php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
    <td><?php echo ($fila[0]); ?></td>
    <td><?php echo ($fila[1]); ?></td>
    <td><?php echo ($fila[2]); ?></td>
</tr>
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
```

* `mysqli_fetch_array()` obtiene cada fila del resultado.
* `while` repite el proceso hasta que no quedan más filas.
* `$fila[0]`, `$fila[1]` y `$fila[2]` muestran los valores de las columnas.
* `mysqli_free_result()` libera el resultado de la consulta.
* `mysqli_close()` cierra la conexión con la base de datos.

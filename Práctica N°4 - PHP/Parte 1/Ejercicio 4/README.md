# Ejercicio 4

## ¿Qué salida produce?

La salida esperada es:

```text
El   El clavel blanco
```

### Justificación

Al principio, `$flor` y `$color` no están definidas, por lo que el primer `echo` no muestra sus valores.

Después se ejecuta:

```php
include 'datos.php';
```

Esto carga las variables:

```php
$color = 'blanco';
$flor = 'clavel';
```

Por eso, el segundo `echo` muestra:

```text
El clavel blanco
```

En conclusión, `include` permite incorporar y ejecutar el contenido de otro archivo PHP.

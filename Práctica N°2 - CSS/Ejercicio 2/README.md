# Ejercicio 2

## 1. Corrección del código CSS

El código original tenía algunos errores de sintaxis. La versión corregida es:

```css
p#normal {
    font-family: arial, helvetica;
    font-size: 11px;
    font-weight: bold;
}

#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}

#distinto {
    background-color: #9EC7EB;
    color: red;
}
```

## 2. ¿Qué efecto producen las reglas?

* **`p#normal`**: aplica al párrafo con `id="normal"` una fuente Arial/Helvetica, tamaño `11px` y negrita.

* **`#destacado`**: aplica un borde sólido azul de `2px` al elemento que tenga ese `id`.

* **`#distinto`**: aplica un fondo celeste y texto rojo al elemento que tenga ese `id`.

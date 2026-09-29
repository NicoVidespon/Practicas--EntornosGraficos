# Ejercicio 3

## 1. Corrección del código CSS

El código CSS corregido es:

```css
p.quitar {
    color: red;
}

.desarrollo {
    font-size: 8px;
}

.importante {
    font-size: 20px;
}
```

## 2. ¿Qué efecto producen las reglas?

* **`p.quitar`**: aplica color rojo a los párrafos que tengan la clase `quitar`.
* **`.desarrollo`**: establece un tamaño de fuente de `8px`.
* **`.importante`**: establece un tamaño de fuente de `20px`.
* Un `<p>` sin clase mantiene su estilo normal.
* Un `<h1 class="quitar">` no recibe el color rojo porque `p.quitar` solo se aplica a párrafos.
* Un elemento con las clases `quitar` e `importante` tendrá texto rojo y tamaño de `20px`.

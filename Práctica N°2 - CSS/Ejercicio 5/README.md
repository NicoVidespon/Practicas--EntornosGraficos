# Ejercicio 5

## 1. Reglas CSS requeridas

* **Textos enfatizados dentro de títulos:**

```css
h1 em, h2 em, h3 em, h4 em, h5 em, h6 em {
    color: red;
}
```

* **Elementos con `href` dentro de párrafos que estén dentro de un `div`:**

```css
div p [href] {
    color: black;
}
```

* **Listas no ordenadas dentro de `#ultimo` y sus enlaces:**

```css
#ultimo ul {
    color: yellow;
}

#ultimo ul a {
    color: blue;
}
```

* **Elementos con clase `importante`:**

```css
div .importante {
    color: green;
}

h1 .importante, h2 .importante, h3 .importante,
h4 .importante, h5 .importante, h6 .importante {
    color: red;
}
```

* **Elementos `h1` que tengan el atributo `title`:**

```css
h1[title] {
    color: blue;
}
```

* **Enlaces dentro de listas ordenadas:**

```css
ol a:link {
    color: blue;
    text-decoration: none;
}

ol a:visited {
    color: violet;
    text-decoration: none;
}
```

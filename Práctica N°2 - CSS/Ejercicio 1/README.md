# Ejercicio 1

## 1. ¿Qué es CSS y para qué se usa?

CSS (*Cascading Style Sheets*) es un lenguaje utilizado para definir la apariencia de una página HTML. Permite modificar colores, fuentes, tamaños, márgenes, espacios y la distribución de los elementos.

## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Una regla CSS está formada por un **selector** y un conjunto de **declaraciones**. El selector indica a qué elementos se aplicará el estilo y las declaraciones indican qué propiedad se modifica y qué valor tendrá.

## 3. ¿Cuáles son las tres formas de dar estilo a un documento?

Las tres formas son:

* **En línea:** se aplica directamente en la etiqueta HTML mediante `style`.
* **Interno:** se coloca dentro de `<style>` en el documento HTML.
* **Externo:** se escribe en un archivo `.css` y se vincula mediante `<link>`.

## 4. ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

Los más utilizados son:

* **Universal (`*`)**: selecciona todos los elementos.
* **Etiqueta (`p`, `h1`)**: selecciona todos los elementos de esa etiqueta.
* **Clase (`.clase`)**: selecciona los elementos que tienen determinada clase.
* **ID (`#id`)**: selecciona un elemento mediante su identificador.

## 5. ¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?

Una **pseudo-clase** permite aplicar estilos dependiendo del estado de un elemento.

En los enlaces las más utilizadas son:

* `:link` → enlace no visitado.
* `:visited` → enlace visitado.
* `:hover` → cuando el puntero pasa sobre el enlace.
* `:active` → cuando se hace clic sobre el enlace.

## 6. ¿Qué es la herencia?

La **herencia** permite que algunas propiedades de un elemento padre se transmitan a sus elementos hijos, siempre que estos no tengan otro estilo definido.

## 7. ¿En qué consiste el proceso denominado cascada?

La **cascada** es el mecanismo que determina qué estilo se aplica cuando existen varias reglas para un mismo elemento. Para decidirlo se tiene en cuenta la procedencia, la especificidad y el orden de las reglas.

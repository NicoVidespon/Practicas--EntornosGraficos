# Ejercicio 4

## 1. Análisis comparativo de los códigos HTML

* **Código A:** el párrafo tiene la clase `.contenido`, que establece `14px` y negrita, pero el estilo en línea `font-weight: normal` tiene mayor prioridad. Por eso queda en **14px y sin negrita**.

* **Código B:** el `<body>` tiene la clase `.contenido`, pero el párrafo tiene una regla propia `p { font-size: 10px; }`, por lo que se muestra en **10px**.

* **Celdas de la tabla (`<td>`):** en el Código B heredan del `<body>` el tamaño y la negrita.

* **Enlaces (`<a>`):** en ambos casos se aplican las pseudo-clases `:link`, `:visited`, `:hover` y `:active`.

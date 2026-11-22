# Proyecto de documentación automática

## 1. Descripción del proyecto

Este trabajo consiste en documentar una calculadora básica desarrollada en PHP mediante la herramienta **phpDocumentor**. El objetivo es generar documentación que facilite la comprensión, el mantenimiento y la reutilización del código.

## 2. Estructura de carpetas

La entrega está organizada de la siguiente manera:

```text
Entrega_Documentacion/
├── README.md
├── Comparativa_y_reflexion.docx
└── Proyecto_PHP/
    ├── index.php
    ├── funciones.php
    ├── documentacion.md
    ├── documentacion_phpdoc.pdf
    └── docs/
        ├── index.html
        └── ... otros archivos generados
```

## 3. ¿Qué contiene cada archivo?

- **`README.md`**: archivo principal que explica la organización y el contenido de la entrega.
- **`Comparativa_y_reflexion.docx`**: documento con la comparación de las herramientas Javadoc, Doxygen y phpDocumentor, además de la reflexión final.
- **`Proyecto_PHP/index.php`**: página principal de la calculadora, donde se utilizan las funciones matemáticas.
- **`Proyecto_PHP/funciones.php`**: contiene las funciones para sumar, restar, multiplicar y dividir, documentadas mediante comentarios PHPDoc.
- **`Proyecto_PHP/documentacion.md`**: documentación en formato Markdown de las funciones de la calculadora.
- **`Proyecto_PHP/documentacion_phpdoc.pdf`**: versión PDF de la documentación, exportada desde el HTML.
- **`Proyecto_PHP/docs/`**: carpeta que contiene la documentación HTML generada automáticamente por phpDocumentor.

## 4. Cómo consultar la documentación

Para consultar la documentación HTML, hay que entrar en la carpeta `Proyecto_PHP/docs/` y abrir el archivo `index.html` con un navegador web.

Desde esa documentación se pueden consultar las funciones documentadas, sus parámetros, los valores que devuelven y las posibles excepciones.

## 5. Herramienta utilizada

La herramienta seleccionada es **phpDocumentor**, ya que está diseñada para generar documentación de proyectos PHP a partir de comentarios escritos con el estándar PHPDoc.

Su uso permite automatizar la creación de documentación y facilita que otros desarrolladores comprendan el funcionamiento del código.

## 6. Conclusión

La organización de los archivos permite distinguir entre el documento comparativo, el código fuente y los distintos formatos de documentación. De esta forma, la entrega resulta más clara, ordenada y fácil de revisar.


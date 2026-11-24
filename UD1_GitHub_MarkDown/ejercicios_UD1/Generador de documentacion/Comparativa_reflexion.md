# **Comparativa de herramientas de generación de documentación** 

## **1. Introducción** 

Las herramientas de generación de documentación permiten crear documentación técnica a partir del código fuente o de archivos escritos específicamente para ello. Su objetivo es facilitar la comprensión, el mantenimiento y la colaboración en los proyectos de software. 

Para esta comparativa se han seleccionado Javadoc, Doxygen y phpDocumentor. Esta última herramienta se ha utilizado en la parte práctica para generar la documentación de un proyecto PHP de operaciones matemáticas básicas. 

## **2. Comparativa de herramientas** 

|**Criterio**|**Javadoc**|**Doxygen**|**phpDocumentor**|
|---|---|---|---|
|Lenguaje<br>principal|Java|C++, C, Java y otros|PHP|
|Facilidad de uso|<sup>Sencilla si se</sup><br>conoce Java|Requiere configurar<br>algunas opciones|Relativamente sencilla con<br>comentarios PHPDoc|
|Integración con<br>proyectos|Integrado en el<br>ecosistema Java|Se puede integrar en<br>distintos entornos de<br>desarrollo|Se integra con proyectos PHP y<br>Composer|
|Formatos de<br>salida|Principalmente<br>HTML|HTML, LaTeX y otros<br>formatos, según<br>configuración|HTML y otros formatos según la<br>versión y las herramientas<br>utilizadas|
|Comunidad|Amplia comunidad<br>de Java|Comunidad consolidada|Comunidad especializada en PHP|
|Curva de<br>aprendizaje|Baja para usuarios<br>de Java|Media|Baja o media para proyectos PHP|



## **3. Análisis de las herramientas** 

### **Javadoc** 

Javadoc es la herramienta habitual para generar documentación de programas escritos en Java. Interpreta comentarios con etiquetas específicas, como `@param` y `@return` , y genera páginas HTML organizadas por clases y métodos. Es especialmente útil en proyectos Java, aunque no está orientada a documentar directamente programas PHP. 

### **Doxygen** 

Doxygen permite generar documentación a partir de comentarios del código y admite varios lenguajes de programación. Es flexible y ofrece diversas opciones de salida, pero su configuración puede resultar más compleja para usuarios principiantes. Se utiliza en proyectos de distintos tamaños y es útil cuando se necesita documentar código de diferentes tecnologías. 

### **phpDocumentor** 

phpDocumentor está orientado a proyectos PHP y utiliza comentarios escritos siguiendo el estándar PHPDoc. Permite generar documentación HTML con información sobre funciones, parámetros, valores devueltos y excepciones. Su principal ventaja es que automatiza la creación de la documentación a partir de los comentarios del código. Algunas salidas adicionales pueden requerir herramientas o procesos complementarios. 

## **4. Herramienta seleccionada** 

Para la parte práctica se ha seleccionado phpDocumentor, porque el proyecto utilizado está desarrollado en PHP. Se han documentado cuatro funciones matemáticas: suma, resta, multiplicación y división. Posteriormente, se ha generado la documentación HTML mediante phpDocumentor. 

## **5. Reflexión personal** 

La experiencia con phpDocumentor me ha permitido comprender la utilidad de la generación automática de documentación en los proyectos de programación. Al principio, la configuración del entorno y la ejecución de la herramienta me resultaron algo complicadas, especialmente al tener que utilizar Docker para generar la documentación. Una vez conseguí ejecutarla, pude comprobar que phpDocumentor organiza automáticamente la información y crea un índice de funciones, además de páginas con sus descripciones, parámetros y valores devueltos. 

Entre sus principales ventajas destacaría el ahorro de tiempo, la presentación ordenada de la información y la posibilidad de mantener la documentación vinculada al código fuente. Como inconvenientes, es necesario escribir correctamente los comentarios PHPDoc y disponer de un entorno configurado para ejecutar la herramienta. También hay que actualizar la documentación cuando se modifica el código. 

Sí recomendaría phpDocumentor para proyectos colaborativos desarrollados en PHP, porque ayuda a que los integrantes del equipo comprendan las funciones y sus parámetros sin tener que analizar todo el código. Considero que es una herramienta útil para mejorar el mantenimiento, la organización y la comprensión de un proyecto. 

## **6. Conclusión** 

Las tres herramientas permiten automatizar la documentación, pero están orientadas a diferentes necesidades. Javadoc destaca en Java, Doxygen ofrece flexibilidad para diversos lenguajes y phpDocumentor resulta adecuado para PHP. La elección depende principalmente de la tecnología utilizada y de los formatos de documentación necesarios. 


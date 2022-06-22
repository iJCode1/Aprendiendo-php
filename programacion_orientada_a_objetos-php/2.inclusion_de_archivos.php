<?php

// Inclusión de archivos en PHP
/*
  Lo ideal es modularizar nuestro código a tal grado que podamos separar el código por funciones especificas, esto
  permitira que este no sea repetido en varios lugares (archivos por ejemplo). 
  Para poder declarar una función en un solo archivo y poderla usar en otros, es importante entender como incluirlo en los archivos necesarios
  Para esto PHP ofrece 4 posibilidades.
*/  

// include'<ruta>': Como la palabra lo dice, incluye un archivo dentro de otro. Cuando el archivo no es encontrado o tiene algún error, el sistema lanzara un warning pero seguirá trabajando
// include_once '<ruta>': Tiene un comportamiento similar al de la sentencia include, siendo la única diferencia de que si el código del fichero ya ha sido incluido, no se volverá a incluir, e include_once devolverá TRUE. Como su nombre indica, el fichero será incluido solamente una vez.

// require ('<ruta>'): Funciona igual que include la única diferencia es que este arrojara un fatal error a nivel de compilación y todo el sistema dejara de funcionar hasta que se solucione el problema.
// requiere_once ('<ruta>'): Funciona igual que requiere excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
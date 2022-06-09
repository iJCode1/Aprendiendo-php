<?php
/*
  Arreglos asociativos en PHP
  ¿Estos arreglos son muy complejos?
  La respuesta es.... NO.
  Realmente es un arreglo normal solo que en este caso les podemos definir una clave al valor en concreto.
  ¿Como que una clave?
  Si, es como un nombre o identificador que tendrá un valor en concreto.
  Esto nos ayuda ya que para recuperar cierto valor ya no accederemos por su subíndice, si no por su clave que le dimos...
  La estructura es:
  clave => valor
  (Como si de un objeto de JS se tratara)
  
  Dato importante: Un arreglo puede contener tantos arreglos dentro como sean necesarios.
*/

// Creando arreglo asociativo
$personas = [
  "Joel" => [
    "nombre" => "Joel",
    "edad" => 22,
    "pasatiempos" => array(
      "pasatiempo1" => "Armar Cubos Rubik",
      "pasatiempo2" => "Escuchar música",
      "pasatiempo3" => "Ver Series",
    ),
  ],
  "Sr. Juli" => [
    "nombre" => "Julieta",
    "edad" => 19,
    "pasatiempos" => array(
      "pasatiempo1" => "Tejer",
      "pasatiempo2" => "Ver la tv",
      "pasatiempo3" => "Crear figuras Hamma Beads",
    ),
  ],
];


/*
  Para acceder a los valores del arreglo, se debe hacer uso de la clave (nombre).
  Para los arreglos dentro del arreglo, se hace uso de la misma estructura ( [] ).
*/

// Imprimiendo arreglo completo
print_r($personas);
/*
  Array
  (
    [Joel] => Array
      (
        [nombre] => Joel
        [edad] => 22
        [pasatiempos] => Array
          (
            [pasatiempo1] => Armar Cubos Rubik
            [pasatiempo2] => Escuchar música
            [pasatiempo3] => Ver Series
          )
      )

    [Sr.Juli] => Array
      (
        [nombre] => Julieta
        [edad] => 19
        [pasatiempos] => Array
          (
            [pasatiempo1] => Tejer
            [pasatiempo2] => Ver la tv
            [pasatiempo3] => Crear figuras Hamma Beads
          )
      )
  )
*/

// Accediendo a los elementos de un arreglo asociativo
print_r("La primer persona es: {$personas['Joel']['nombre']}, tiene {$personas['Joel']['edad']} años y su primer pasatiempo es: {$personas['Joel']['pasatiempos']['pasatiempo1']}"); // La primer persona es: Joel, tiene 22 años y su primer pasatiempo es: Armar Cubos Rubik

echo "\nLa segunda persona es: " . $personas['Sr. Juli']['nombre'] . ", tiene " . $personas['Sr. Juli']['edad'] . "años y su segundo pasatiempo es " . $personas['Sr. Juli']['pasatiempos']['pasatiempo2']; // La segunda persona es: Julieta, tiene 19años y su segundo pasatiempo es Ver la tv

echo "\n";
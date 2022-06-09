<?php

// Declarando variables
$nombre = "Joel";
$apellido = "DoMe";

// Concatenando
echo "No, no. Yo me llamo " . $nombre . " " . $apellido . "\n";

// Segunda forma de concatenra (más facil de leer)
echo "No, no. Yo me llamo $nombre $apellido \n";

// Crear operaciones
echo "El resultado de dividir 100 / 7 es: " . (100/7) . "\n";


// Declarando arreglo
$personas = [
  "Joel" => 22,
  "Michi" => 1,
  "Sol" => 36,
  "Juli" => 19,
];

// echo $personas; No se puede imprimir así

// Imprimiendo lo que tiene el arreglo

// var_dump(variable) <= Muestra información como el tamaño y el tipo de dato
var_dump($personas);

// print_r(variable) retorna el contenido de una variable
print_r($personas);
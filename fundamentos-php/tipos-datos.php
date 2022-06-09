<?php

// Tipos de Datos en PHP
/* 
  PHP cuenta con los tipos de datos
  'Numerico'
    - Integer
    - Float
    - Double
  'Cadena'
    - String
    - Char
*/

$n1 = 17; // Tipo de dato Integer
$n2 = 17.23; // Tipo de dato float

var_dump($n1); // int(17)
var_dump($n2); // float(17.23)


$nombre = "Joel"; // Tipo de dato String
$cadena = 'a'; // Tipo de dato Char || String

var_dump($nombre); // string(4) "Joel"
var_dump($cadena); // string(1) "a"


// Haciendo operaciones con Numericos y Cadenas
echo 7 + "11" . "\n"; // 18
echo "90" - 4 . "\n"; // 86
echo 3 * "5" . "\n"; // 15
echo "8" / 2 . "\n"; // 4

echo "9" + 9;

echo("\n");
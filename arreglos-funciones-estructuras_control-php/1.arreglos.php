<?php
/*
  Al igual que en otros lenguajes de programación, PHP permite la creación de arreglos.
  Un arreglo no es más que una cajita (variable) que permite guardar diferentes valores
  que en la mayoría de casos, tienen cierta relación o son de un tipo similar.
  Aunque en PHP podemos crear arreglos que contengan valores de diferentes tipos de datos.
*/

// Variables para usar dentro de un arreglo
$apellido = "Sanchez";
$numGatos = 4;

// Creación de un arreglo
// Forma 1
$nombresYAlgoMas = array("Joel", "Julieta", "Carlos", "Astrid", true, $apellido);
// Forma 2
$edades = [22, 19, 27, 25, $numGatos];

/*
  Para acceder a un valor dentro de un arreglo, se usa su posición o subíndice.
  Cabe aclarar que este subíndice empieza desde el número 0 para el primer valor
  y así sucesivamente.
  Se podría decir que el subíndice es (n-1).
*/

// Imprimiendo los arreglos
print_r($nombresYAlgoMas);
/*
  Array
  (
    [0] => Joel
    [1] => Julieta
    [2] => Carlos
    [3] => Astrid
    [4] => 1
    [5] => Sanchez
  )
*/
print_r($edades);
/*
    Array
  (
    [0] => 22
    [1] => 19
    [2] => 27
    [3] => 25
    [4] => 4
  )
*/

// Imprimiendo valores del arreglo
var_dump($nombresYAlgoMas[0]); // string(4) "Joel"
var_dump($nombresYAlgoMas[3]); // string(6) "Astrid"
var_dump($edades[0]); // int(22)
var_dump($edades[4]); // int(4)

// Accediendo a un subíndice que no existe
var_dump($nombresYAlgoMas[7]); // PHP Warning: Undefined array key 7

echo("\n");
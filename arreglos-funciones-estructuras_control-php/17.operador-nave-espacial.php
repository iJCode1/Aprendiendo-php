<?php
/*
  Operador Spaceship 'Nave espacial' en PHP
  Este operador permite comparar 2 números y retornar -1, 0 y 1 si el primer número es menor, igual o mayor al segundo respectivamente.
  La sintaxis es la siguiente:
  $n1 <=> $n2
  Donde retorna:
  -1: Si $n1 < $n2
  0: Si $n1 === $n2
  1: Si $n1 > $n2

  En PHP podemos ordenar un arreglo con la función 'sort()' pero para poderle dar un uso al operador de nave espacial, se usará la función
  'usort()' que solicita un callback (función) que determinara como ordenar los números...
*/

// Declarando un arreglo desordenado
$precios = [12, 1, 89, 0, 56, 2, 98, 05];

// Ordenando el arreglo con la función sort()
sort($precios);

// Imprimiendo el arreglo ordenado
var_dump($precios);
/*
  array(8) {
    [0]=>
    int(0)
    [1]=>
    int(1)
    [2]=>
    int(2)
    [3]=>
    int(5)
    [4]=>
    int(12)
    [5]=>
    int(56)
    [6]=>
    int(89)
    [7]=>
    int(98)
  }
*/

// Declarando de nuevo el arreglo desordenado
$precios = [12, 1, 89, 0, 56, 2, 98, 05];

// Ordenando el arreglo con la función 'usort()' y el operador de nave espacial '<=>'
usort($precios, function($a, $b){
  return $a <=> $b;
});
var_dump($precios);
/*
  array(8) {
    [0]=>
    int(0)
    [1]=>
    int(1)
    [2]=>
    int(2)
    [3]=>
    int(5)
    [4]=>
    int(12)
    [5]=>
    int(56)
    [6]=>
    int(89)
    [7]=>
    int(98)
  }
*/

echo (PHP_EOL);
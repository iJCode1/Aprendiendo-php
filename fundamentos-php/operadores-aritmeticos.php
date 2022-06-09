<?php

/*
  Operadores Aritmeticos en PHP
  + : Adición
  - : Sustracción
  * : Multiplicación
  / : División
  % : Módulo
  ** : Potencia
  + : Identidad
  - : Negación
*/

$n1 = 7;
$n2 = 2;

// Suma
var_dump( $n1 + $n2 ); // 9

// Resta
var_dump( $n1 - $n2 ); // 5

// Multiplicación
var_dump( $n1 * $n2 ); // 14

// División
var_dump( $n1 / $n2 ); // 3.5

// Módulo (Residuo)
var_dump( $n1 % $n2 ); // 1

// Potencia
var_dump( $n1 ** $n2 ); // 49

// Identidad
$numeroString = "78";
var_dump( $numeroString ); // string(2) "78"
var_dump( +$numeroString ); // int(78)
$numeroString = "78.85";
var_dump( +$numeroString ); // float(78.85)

// Negación
$n3 = -67;
var_dump( -$n1 ); // int(-7)
var_dump( -$n2 ); // int(-2)
var_dump( -$n3 ); // int(67)


// Ejemplo de módulo
$segundos = 7501;

// Determinar cuantas horas hay en la variable 'segundos' y cuantos segundos sobran
$resultadoHoras = $segundos / 3600; // 3600 por que en 1 hora hay 3600 segundos
$resultadoSegundos = $segundos % 3600;
echo("En $segundos segundos hay $resultadoHoras horas y $resultadoSegundos segundos");
// En 7501 segundos hay 2.0836111111111 horas y 301 segundos


echo(PHP_EOL); // Devuelve el carácter de una nueva línea (salto de línea)
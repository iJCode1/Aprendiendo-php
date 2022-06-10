<?php

/*
  Ciclo While en PHP
  Esta estructura de ciclo permite repetir un bloque de código mientras se cumpla una determinada condición.
  Estructura del 'while':
    while(condición){
       Código que se ejecutara;
    }
  Es importante que el 'while' tenga una variable que se vaya incrementando o decrementando según sea el caso
  en cada una de las iteraciones (vueltas) para que el ciclo no se cicle (sea infinito)
*/

// Declarando variables
$contador = 1;
$tablaMultiplicar = 7;
$res = 0;

// Declarando ciclo 'while'
while($contador <= 10){
  $res = $tablaMultiplicar * $contador;
  echo("$tablaMultiplicar * $contador = {$res}\n");
  $contador++;
}
/*
  7 * 1 = 7
  7 * 2 = 14
  7 * 3 = 21
  7 * 4 = 28
  7 * 5 = 35
  7 * 6 = 42
  7 * 7 = 49
  7 * 8 = 56
  7 * 9 = 63
  7 * 10 = 70
*/

echo(PHP_EOL);
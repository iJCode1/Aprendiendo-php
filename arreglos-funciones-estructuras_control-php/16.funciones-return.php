<?php
/*
  Retorno en Funciones de PHP
  La idea realmente es que una función reciba información (datos), esa información sea procesada y al final nos retorne (regrese) algo.
  Para poder 'retornar' es necesario especificárselo al final de la función.
  Ese valor que retorne una función puede ser guardado en una variable al ser invocada o bien, imprimir directamente la invocación con un 'echo' por ejemplo.
*/

// Creando una función que retorna algo
function multiplicacion($n1 = 1, $n2 = 1){
  $resultado = $n1 * $n2;
  return $resultado; // La función retorna el resultado de multiplicar los 2 números recibidos como argumentos
}

/*
  Al invocar una función podemos imprimir directamente en un 'echo' el valor retornado de la función después de la invocación
  La forma más usada es guardar el valor retornado de la función en una variable. De esta forma se podrá usar el valor en algún otro lado o se podrá imprimir más adelante
*/
// Imprimiendo el retorno de la función directamente
echo multiplicacion(3, 7)."\n"; // 21

// Guardando en una variable el retorno de la función
$multi = multiplicacion(10, 2);
echo "La multiplicación de 10 * 2 = ".$multi; // La multiplicación de 10 * 2 = 20

echo(PHP_EOL);
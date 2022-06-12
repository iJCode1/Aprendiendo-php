<?php

/*
  Funciones en PHP
  ¿Qué es una función? En términos simples, es un pedazo de código que se identifica por un nombre y tiene una serie de 
  instrucciones que se van a ejecutar. La ventaja de una función es que solo se debe definir una vez y esta puede ser
  invocada (usada) las veces que sean necesarias...
  Esto hace que nuestro código se vea más limpio puesto que no estaremos copiando y pegando varias veces el mismo código.
  La sintaxis es:
  function nombreDeLaFuncion (){
    Bloque de código
  }
*/

// Declarando una función que imprimira la tabla de multiplicar de un número generado de forma aleatoria
// function imprimirTablaMultiplicar (){
//   $numeroAleatorio = rand(1, 10); // Devuelve un número aleatorio entre 1 y 10 (incluidos)

//   for($i = 1; $i<=10; $i++){
//     echo("$numeroAleatorio * $i = ".($numeroAleatorio * $i)."\n");
//   }
// }

// Declarando una función que imprimira la tabla de multiplicar de un número generado de forma aleatoria
function imprimirTablaMultiplicar (){
  $numeroAleatorio = rand(1, 10); // Devuelve un número aleatorio entre 1 y 10 (incluidos)

  for($i = 1; $i<=10; $i++){
    echo("$numeroAleatorio * $i = ".($numeroAleatorio * $i)."\n");
  }
}

// Invocando la función tantas veces se requiera
imprimirTablaMultiplicar();
imprimirTablaMultiplicar();
imprimirTablaMultiplicar();

/*
  Ejemplo de salida con 3 invocaciones realizadas:
  10 * 1 = 10
  10 * 2 = 20
  10 * 3 = 30
  10 * 4 = 40
  10 * 5 = 50
  10 * 6 = 60
  10 * 7 = 70
  10 * 8 = 80
  10 * 9 = 90
  10 * 10 = 100

  1 * 1 = 1
  1 * 2 = 2
  1 * 3 = 3
  1 * 4 = 4
  1 * 5 = 5
  1 * 6 = 6
  1 * 7 = 7
  1 * 8 = 8
  1 * 9 = 9
  1 * 10 = 10

  6 * 1 = 6
  6 * 2 = 12
  6 * 3 = 18
  6 * 4 = 24
  6 * 5 = 30
  6 * 6 = 36
  6 * 7 = 42
  6 * 8 = 48
  6 * 9 = 54
  6 * 10 = 60
*/

echo(PHP_EOL);
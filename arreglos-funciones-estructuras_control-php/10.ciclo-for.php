<?php
/*
  Ciclo for en PHP
  Este ciclo permite ejecutar una serie de instrucciones (bloque de código) un número definido de veces.
  Aunque se debe definir una condición, realmente ya se sabe cuál es el límite del ciclo.
  La estrutura es:
  for($contador; condicion; incremento|decremento){
    Bloque de código
  }
*/

// Declarando array
$nombres = ["Joel", "Julieta", "Pepe", "Julia", "Carla"];

// Imprimiendo los nombres con un ciclo 'for'
for($i=0; $i<count($nombres); $i++){
  echo("El nombre en la posición $i = $nombres[$i]\n");
} 
/*
  El nombre en la posición 0 = Joel
  El nombre en la posición 1 = Julieta
  El nombre en la posición 2 = Pepe
  El nombre en la posición 3 = Julia
  El nombre en la posición 4 = Carla
*/

/*
  Algo curioso que se puede hacer en un ciclo for es declarar 2 variables en la inicialización en caso de ser necesario
*/
// Ejemplificando un 'for' con 2 variables creadas

$tabla_de_multiplicar = 7;

for($i=1, $j=2; $i <= 10; $i++, $j+=2){
  echo("$tabla_de_multiplicar * $i = ".($tabla_de_multiplicar * $i)."\n");
  echo("La variable j = $j\n");
}
/*
  7 * 1 = 7
  La variable j = 2
  7 * 2 = 14
  La variable j = 4
  7 * 3 = 21
  La variable j = 6
  7 * 4 = 28
  La variable j = 8
  7 * 5 = 35
  La variable j = 10
  7 * 6 = 42
  La variable j = 12
  7 * 7 = 49
  La variable j = 14
  7 * 8 = 56
  La variable j = 16
  7 * 9 = 63
  La variable j = 18
  7 * 10 = 70
  La variable j = 20
*/

echo (PHP_EOL);
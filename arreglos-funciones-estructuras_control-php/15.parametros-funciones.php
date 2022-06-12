<?php

/*
  Parámetros en Funciones de PHP
  Las funciones, aparte de ahorrarnos escribir el mismo código más de 1 vez, permiten obtener valores al ser invocadas 
  para de esta forma poder trabajar con esos datos o información dentro de la función.
  Los parámetros se escriben dentro de los paréntesis al declarar la función y en el momento que se invoca la misma, recibe esos valores como argumentos.
  La sintaxis es:
  function suma($parametro1, $parametro2, $parametron){
    Bloque de código
  }
*/

// Declarando una función que tiene parametros
function suma($n1, $n2){
  echo("La suma de $n1 + $n2 = ". ($n1 + $n2)."\n");
}

// Invocación de una función mandando argumentos requeridos
suma(3, 2); // La suma de 3 + 2 = 5
suma(8, 3); // La suma de 8 + 3 = 11


/*
  Las funciones pueden solicitar cierta cantidad de parámetros que sean necesarios, pero si al ser invocada la función solo se
  mandan cierta cantidad de parámetros (no todos), se puede controlar este escenario definiendo un valor por defecto para los parámetros.
  Simplemente se debe inicializar la variable al ser declarada como parámetro, de esta forma tomara ese valor por defecto en caso de no ser enviado en la invocación
*/

// Declarando una función con parámetros que tienen un valor por defecto
function resta ($n1 = 1, $n2 = 1){
  echo("La resta de $n1 - $n2 = ".($n1 - $n2)."\n");
}

// Invocando la función y mandando solo ciertos parámetros
resta(); // Ningun parámetro = La resta de 1 - 1 = 0
resta(10); // Un parámetro = La resta de 10 - 1 = 9
resta(10, 7); // Dos parámetros = La resta de 10 - 7 = 3
resta(10, 7, 8, 5); // Más parametros = La resta de 10 - 7 = 3


/*
  Como se pudo observar en la última invocación, la función recibió más parámetros de los que se solicitan...
  Dicho eso, los argumentos se pueden guardar en un arreglo para trabajar con ellos usando el operador 'splat' ( ... )
*/
// Declarando función preparada para utilizar todos los parámetros que reciba
function sumaTodo($n1=1, $n2=1, ...$extra){
  $suma = $n1 + $n2;
  if(!(empty($extra))){ // Si el arreglo de parámetros extras no está vacío
    foreach($extra as $numero){
      $suma += $numero;
    }
  }
  echo("La suma es: $suma\n");
}

sumaTodo(); // La suma es: 2
sumaTodo(10); // La suma es: 11
sumaTodo(7, 3); // La suma es: 10
sumaTodo(7, 3, 9, 8, 61); // La suma es: 88


/*
  Algo curioso que se puede lograr igual en php con el operador 'splat' es usar los valores de un arreglo como argumentos en la invocación de una función
*/
// Creando un arreglo con valores
$nombres = ["Joel", "Julieta"];

function imprime2Nombres ($nombre1 = "Indefinido", $nombre2 = "Indefinido"){
  echo("El primer nombre es: $nombre1 y el segundo nombre es: $nombre2\n");
}

// Invocando la función y pasando los valores a partir de un arreglo con el operador 'splat'
imprime2Nombres(...$nombres); // El primer nombre es: Joel y el segundo nombre es: Julieta


// ¿Que pasa si hay más argumentos (valores en el array)?
imprime2Nombres(...$nombres); // El primer nombre es: Joel y el segundo nombre es: Julieta
$nombres = ["Joel", "Julieta", "Pepe", "Castell"];


// Preparando la función para imprimir todos los nombres que hayan en el arreglo
function imprimeTodosLosNombres(...$nombres){
  foreach($nombres as $nombre){
    echo("El nombre es: $nombre\n");
  }
}

// Invocando la función con diferentes casos
imprimeTodosLosNombres();
imprimeTodosLosNombres("Joel");
/*
  El nombre es: Joel
*/
imprimeTodosLosNombres("Joel", "Julieta");
/*
  El nombre es: Joel
  El nombre es: Julieta
*/
imprimeTodosLosNombres(...$nombres);
/*
  El nombre es: Joel
  El nombre es: Julieta
  El nombre es: Pepe
  El nombre es: Castell
*/

echo(PHP_EOL);
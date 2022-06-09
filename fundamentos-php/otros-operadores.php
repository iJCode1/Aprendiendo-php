<?php

// Otros operadores en PHP

// Asignación: = (Le asigna a la variable el valor o variable que esta a la derecha)
echo("********* Asignación *********\n");
$nombre = "Joel";
$edad = 22;
var_dump($nombre); // Joel
var_dump($edad); // 22

$calificacion = ($calificacionJuanito = 60) + 40; // Crea una nueva variable y su valor (60) lo suma al valor del segundo operando (40)
var_dump($calificacionJuanito); // 60
var_dump($calificacion); // 100

// Incremento: variable = variable + número || variable += número || ++ (Le incrementa en 1 o en el número indicado a la variable en cuestión)
echo("********* Incremento *********\n");
$contador = 10;
$contador = $contador + 2;
var_dump($contador); // 12

$contador += 3 ;
var_dump($contador); // 15

$contador++;
var_dump($contador); // 16

// Decremento: variable = variable - número || variable -= número || -- (Le decrementa en 1 o en el número indicado a la variable en cuestión)
echo("********* Decremento *********\n");
$contador2 = 8;
$contador2 = $contador2 - 2;
var_dump($contador2); // 6

$contador2 -= 3 ;
var_dump($contador2); // 3

$contador2--;
var_dump($contador2); // 2

/*
  Al igual que en los operadores anteriores, dentro de los operadores aritmeticos
  existen las versiones correspondientes para hacer una operación y asignarsela
  a la misma variable, estas son:
  - *=
  - /*
*/
$n1 = 8;
$n1 *= 2; // === $n1 = $n1 * 2;
var_dump($n1); // 16
$n1 /= 5; // === $n1 = $n1 / 5;
var_dump($n1); // 3.2

// Concatenación: .= (Nos ayuda a concatenar el segundo valor al valor que ya tenia la variable)
echo("********* Concatenación *********\n");
$nombre = "Joel";
$apellido = "DoMe";
$nombreCompleto = $nombre;

$nombre .= $apellido;
var_dump($nombre); // JoelDome

$nombreCompleto .= " " . $apellido;
var_dump($nombreCompleto); // Joel Dome

/*
  Al asignarle a una variable un valor que sufre de un incremento o decremento, existe una particularidad, la cual es:
    $n1 = 5;
    $res = $n1++;
    echo($res); // 5
    echo($n1); // 5
    Lo que ocurre al asignar a una variable un valor que se esta incrementando o decrementando de esta forma es que
    primero se asigna el valor actual y posteriormente se hace el incremento o decremento según sea el caso
*/
echo("********* Curiosidad de Incremento y Decremento *********\n");
$n1 = 5;
$res = $n1++;
var_dump($res); // Devuelve 5 pero se esperaba 6

$res = $n1--;
var_dump($res); // Devuelve 6 pero se esperaba 5

echo(PHP_EOL);
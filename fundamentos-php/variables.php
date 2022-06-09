<?php 

// Definiendo variables en PHP
// Para declarar una variable, se pone el simbolo de pesos, seguido del nombre
$nombre = "Joel";
$edad = 22;
$año = 2022;

echo "Me llamo $nombre, tengo $edad años y estamos en el año $año\n";


// Declarando constantes en PHP

// Forma 1 (Anterior)
// No se requiere poner el simbolo de pesos, pero se recomienda nombrar en mayusculas
define("PI", 3.14);

echo(PI); // 3.14

// Una constante no puede cambiar su valor, arrojara una advertencia si se intenta
define("PI", 23); // PHP Warning:  Constant PI already defined


// Forma 2 de definir una constante (Actual desde PHP v5.3.0)
const PI2 = 3.1416;

const PI2 = 675; // Constant PI2 already defined

echo(PI2); //3.1416

echo("\n");
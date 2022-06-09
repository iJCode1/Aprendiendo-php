<?php
// Casting en PHP
/*
  El casting es forzar a un valor que sea de un determinado tipo de dato
*/

// Haciendo el casteo a valores

$numero = "7";
var_dump( $numero ); // string(1) "7"

var_dump( (int)$numero ); // int(7)

$numero = (float)"7.3";
var_dump( $numero ); // float(7.3)


$palabra = "Hola Mundo";
var_dump( $palabra); // string(10) "Hola Mundo"


// Al igual que en Js, podemos tener valores que tienden a verdadero o falso

$estado = "Hola";

echo "******** Verdaderos ********\n";

var_dump( $estado ); // string(4) "Hola"
var_dump( (bool)$estado ); // bool(true)
var_dump( (bool)"Hey" ); // bool(true)
var_dump( (bool)"false" ); // bool(true)
var_dump( (bool)"78" ); // bool(true)
var_dump( (bool)"-0" ); // bool(false)

echo "******** Falsos ********\n";

$estado = "";
var_dump( (bool)$estado ); // bool(false)
var_dump( (bool)"0" ); // bool(false)
var_dump( (bool)0 ); // bool(false)
var_dump( (bool)-0 ); // bool(false)
var_dump( (bool)false ); // bool(false)
var_dump( (bool)null ); // bool(false)
var_dump( (bool)[] ); // bool(false)



/*
  Reto, que tipo de dato son:
*/
echo "******** Reto ********\n";

// ****** Fácil ******

$nombre = "Carlos"; // string
var_dump($nombre);
$apellido = "Gómez"; // string
var_dump($apellido);
$edad = 18; // int
var_dump($edad);
$aprobado = true; // boolean
var_dump($aprobado);

// ****** Medio ******
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // float
var_dump($promedio);
$nombre_completo = $nombre . " " . $apellido; // string
var_dump($nombre_completo);
$presento_examen = (bool) 1; // boolean
var_dump($presento_examen);

// ****** Avanzado ******
$numero_preguntas = 5 + "5"; // int
var_dump($numero_preguntas);
$numero_respuestas = "5" + 5; // int
var_dump($numero_respuestas);
$promedio_maximo = $numero_respuestas / 1.0; // float
var_dump($promedio_maximo);
$michis = 3 + "5 michis"; // int
var_dump($michis);

<?php
/*
  Manipulación de arreglos en PHP
  En PHP tenemos muchas funciones las cuales ya vienen integradas en el lenguaje y van a 
  permitir manipular un array de diferentes formas según se requiera.
  Todas las funciones están documentadas en: https://www.php.net/manual/es/ref.array.php
*/

// Algunas funciones que se tienen para manipular arreglos son:

$edades = [12, 22, 19];
var_dump($edades);
/*
  array(3) {
    [0]=>
    int(12)
    [1]=>
    int(22)
    [2]=>
    int(19)
  }
*/

// count: Cuenta el total de elementos que tiene el arreglo
var_dump( count($edades) ); // int(3)

// array_push: Inserta uno o más elementos al final del arreglo
array_push( $edades, 79 );
print_r($edades);
/*
  Array
(
    [0] => 12
    [1] => 22
    [2] => 19
    [3] => 79
)
*/

// is_array: Saber si una variable es un array
var_dump( is_array($edades) ); // bool(true)

// explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): Divide un string en varios string
$animales = "Perro,Gato,Puma";
$animales2 = explode(",", $animales);
var_dump($animales2);
/*
  array(3) {
    [0]=>
    string(5) "Perro"
    [1]=>
    string(4) "Gato"
    [2]=>
    string(4) "Puma"
  }
*/


// implode(string $separator, array $array): Une los elementos de un array en un string
$frutasArray = ['Pera', 'Manzana', 'Uva'];
$frutasString = implode(",",$frutasArray); 
var_dump($frutasString); // string(16) "Pera,Manzana,Uva"


echo(PHP_EOL);
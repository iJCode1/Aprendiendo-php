<?php

// Obteniendo los datos pasados por POST
echo("<p>¿Qué contiene POST?</p>");
echo("<pre>");
  print_r($_POST);
  /*
  Ejemplo de salida:
  Array
  (
    [name] => Joel
    [person] => Array
      (
        [0] => Joel2
        [1] => Julieta
        [2] => Pepe
      )
    [user] => Array
      (
        [name] => Pepito
        [age] => 23
        [team] => Pumas
      )
  )
  */
echo("</pre>");

// Obteniendo los valores de cada uno

// Input normal
echo("<p>¿Qué valor mando el input normal?</p>");
echo("<pre>");
  
  var_dump($_POST["name"]); // string(4) "Joel"

echo("</pre>");


// Input como 'array'
echo("<p>¿Qué valor mando el input de tipo array?</p>");
echo("<pre>");
  
  var_dump($_POST["person"]);
  /*
    Salida de ejemplo:
    array(3) {
      [0]=>
      string(5) "Joel2"
      [1]=>
      string(7) "Julieta"
      [2]=>
      string(4) "Pepe"
    }
  */

echo("</pre>");


// Input como 'array asociativo'
echo("<p>¿Qué valor mando el input de tipo array asociativo?</p>");
echo("<pre>");
  
  var_dump($_POST["user"]);
  /*
    Salida de ejemplo:
    array(3) {
      ["name"]=>
      string(6) "Pepito"
      ["age"]=>
      string(2) "23"
      ["team"]=>
      string(5) "Pumas"
    }
  */

echo("</pre>");



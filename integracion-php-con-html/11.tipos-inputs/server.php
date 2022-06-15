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
            [2] => Pepito
        )
    [user] => Array
        (
            [name] => Pepe
            [age] => 36
            [team] => Pumas
        )
    [materia1] => Matematicas
    [materia2] => Programción funcional
    [sexo] => hombre
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
      string(6) "Pepito"
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
      string(4) "Pepe"
      ["age"]=>
      string(2) "36"
      ["team"]=>
      string(5) "Pumas"
    }
  */

echo("</pre>");


// Input de tipo 'checkbox'
echo("<p>¿Qué valores mandaron los input de tipo checkbox?</p>");
echo("<pre>");

var_dump($_POST['materia1']);
var_dump($_POST['materia2']);

/*
  string(11) "Matematicas"
  string(22) "Programción funcional"
  Undefined index: materia3 in C:\xampp\htdocs\integracion-php-con-html\new\server.php on line 85 NULL
*/
// Validar si algún input de tipo 'checkbox' fue seleccionado
if(isset($_POST['materia3'])){
  var_dump($_POST['materia3']); //string(17) "Desarrollo móvil"
}

echo("</pre>");


// Input de tipo 'radio'
echo("<p>¿Qué valor mando el input de tipo radio?</p>");
echo("<pre>");

var_dump($_POST['sexo']); // string(6) "hombre"

echo("</pre>");


// Input de tipo 'file' mutiple
echo("<p>¿Qué valor mando el input de tipo file?</p>");
echo("<pre>");

var_dump($_FILES['files']);
/*
    array(5) {
      ["name"]=>
      array(2) {
        [0]=>
        string(9) "firma.png"
        [1]=>
        string(9) "fondo.jpg"
      }
      ["type"]=>
      array(2) {
        [0]=>
        string(9) "image/png"
        [1]=>
        string(10) "image/jpeg"
      }
      ["tmp_name"]=>
      array(2) {
        [0]=>
        string(24) "C:\xampp\tmp\phpA37E.tmp"
        [1]=>
        string(24) "C:\xampp\tmp\phpA38F.tmp"
      }
      ["error"]=>
      array(2) {
        [0]=>
        int(0)
        [1]=>
        int(0)
      }
      ["size"]=>
      array(2) {
        [0]=>
        int(4671)
        [1]=>
        int(1426311)
      }
    }
*/

echo("</pre>");
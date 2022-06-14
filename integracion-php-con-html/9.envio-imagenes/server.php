<?php
// Se obtienen los datos almacenados en las variables globales '$_POST' y '$_FILES'

// Se imprime lo que se mando por el método POST
print_r("<b>¿Qué contiene POST?</b>");
echo("<pre>");

  var_dump($_POST);
  /*
    Ejemplo de salida:
      array(1) {
        ["name"]=>
        string(4) "Joel"
      }
  */

echo("</pre>");

// Se obtiene el nombre
$nombre = (isset($_POST['name'])) ? $_POST['name'] : 'Sin nombre';

// Impresión de la variable $nombre
print_r("<b>Nombre</b>");
echo("<pre>");

  var_dump("Nombre: $nombre"); // string(12) "Nombre: Joel"

echo("</pre>");

// Impresión de la variable global $_FILES
print_r("<b>Imagen</b>");
echo("<pre>");

  var_dump($_FILES );
  /*
    Ejemplo de salida:
      array(1) {
        ["image"]=>
          array(5) {
          ["name"]=>
          string(9) "fondo.jpg"
          ["type"]=>
          string(10) "image/jpeg"
          ["tmp_name"]=>
          string(24) "C:\xampp\tmp\phpBC2E.tmp"
          ["error"]=>
          int(0)
          ["size"]=>
          int(1426311)
        }
      }
  */
  var_dump($_FILES['image']['type']); // string(10) "image/jpeg"

echo("</pre>");

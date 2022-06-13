<?php
  // Se obtiene la información enviada por el método GET
  var_dump($_GET); 

  /*
    Salida de ejemplo:
        array(2) { ["nombre"]=> string(4) "Joel" ["edad"]=> string(1) "2" }
  */

  // Al enviar la información por el método GET, los datos se muestran también en la URL
  // URL: http://localhost/integracion-php-con-html/7.envio-formulario-GET/server.php?nombre=Joel&edad=22


  // Algo importante es poder validar si la variable global $_GET tiene valor

  // Forma 1: Operador Ternario. Si existe nombre, guarda el nombre, si no, le asigna el string 'Sin nombre'
  $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "Sin nombre";

  //Forma 2: Null Coalescing Operator: Si existe la edad, la guarda en la variable, si no le asigna el string 'sin edad'
  $edad = $_GET["edad"] ?? "Sin edad";

  var_dump("El nombre es $nombre");
  var_dump("La edad es $edad");
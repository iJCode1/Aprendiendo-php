<?php

// Comprobando que se recibio por el método POST
echo("<pre>");
   
  var_dump( $_POST );
  /*
    array(2) {
      ["name"]=>
      string(4) "Joel"
      ["form"]=>
      string(0) ""
    }
  */

echo("</pre>");

// isset(): Determina si una variable está definida y no es null.
// Es decir, determina si en la variable global $_POST (en este caso), existe el valor con determinado nombre
echo("<pre>");
   
  var_dump( isset($_POST['name']) );  // bool(true)
  var_dump( isset($_POST['age']) );  // bool(false)

  // Comprobando si el formulario fue enviado
  var_dump( isset($_POST['form']) ); // bool(true)

echo("</pre>");


// empty(): Determina si una variable está vacía, es decir que no exista un valor. Esta función no genera una advertencia si la variable no existe
echo("<pre>");

  var_dump( empty($_POST['name']) ); // bool(false)
  var_dump( empty($_POST['age']) ); // bool(true)

echo("</pre>");


// Creando una validación básica en el servidor
// Si 'name' esta definida en $_POST y no está vacía 'name' y si esta definida la variable 'form' en la variable global $_POST
if( isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['form']) ){
  echo("Tu formulario se envío correctamente ✔");
}else{
  echo("Tu formulario no se envío ❌");
}
// Tu formulario se envío correctamente ✔
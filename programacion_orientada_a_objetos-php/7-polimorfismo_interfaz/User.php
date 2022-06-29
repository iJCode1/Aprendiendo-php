<?php

// Incluyendo el archivo de 'BaseInterface'
include_once("BaseInterface.php");

// Creando clase que implementa la Interfaz 'BaseInterface'
class User implements BaseInterface{

  /*
    Como la interfaz de la cual se implementa esta clase tiene 1 método,
    se debe cumplir el contrato e implementar dicho método en esta clase si no arroja el siguiente error: 
    Fatal error: Class User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (BaseInterface::all)
  */

  // Implementando el método de la interfaz
  public function all(){
    return 'Obteniendo a todos los Usuarios';
  }

} 

// Instanciando un objeto de la clase 'User'
$user1 = new User();
echo $user1->all(); // Obteniendo a todos los Usuarios

?>
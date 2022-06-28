<?php

// Incluyendo el archivo 'Base';
include_once("Base.php");

// Creando clase 'User' que hereda de la clase 'Base'
class User extends Base1{
  
  // Creando método constructor para que al inicializarse un objeto de dicha clase, se tenga que pasar cierta información
  public function __construct($name){
    $this->name = $name;
  }

}

// Creando una instancia de la clase 'User'
$user1 = new User("Joel"); // Mi nombre es Joel desde la clase User
echo $user1->login();


?>
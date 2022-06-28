<?php

include_once('Base.php');

// Creando clase 'Admin' que hereda de la clase 'Base'
class Admin extends Base1{
  
  // Creando método constructor para que al inicializarse un objeto de dicha clase, se tenga que pasar cierta información
  public function __construct($name){
    $this->name = $name;
  }

}

// Creando una instancia de la clase 'Admin'
$admin1 = new Admin("Administrador");
echo $admin1->login(); // Mi nombre es Administrador desde la clase Admin


?>
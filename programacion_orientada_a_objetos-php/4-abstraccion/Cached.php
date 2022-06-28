<?php

// Incluyendo el archivo donde se tiene la clase 'Base'
include_once('Base.php');

// Creando clase que hereda de super clase 'Base'
class Cached extends Base{

  // Si no se implementa el método 'despedir', la clase marca error puesto que es obligatorio
  function despedir(){
    echo "Adios mundo desde Cached!";
  }

  function soyCache(){
    echo "Mensaje normal desde cached";
  }

}

// Creando instancia de la clase 'Cached'
$cached1 = new Cached;
$cached1->soyCache(); // Mensaje normal desde cached
echo("\n");
$cached1->despedir(); // Adios mundo desde Cached!
echo("\n");
$cached1->saludar(); // Hola Mundo desde Base

?>
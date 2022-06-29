<?php

// Incluyendo el archivo de 'BaseInterface'
include_once("BaseInterface.php");

// Creando la clase 'Post' que implementa la interface 'BaseInterface'
class Post implements BaseInterface{

  // Creando el método necesario que se declaro en la Interfaz
  public function all(){
    return "Obteniendo todos los POST";
  }

}

// Instanciando un objeto de la clase 'Post'
$post1 = new Post();
echo $post1->all(); // Obteniendo todos los POST

?>
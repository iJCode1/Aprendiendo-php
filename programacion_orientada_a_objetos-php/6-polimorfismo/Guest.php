<?php

// Incluyendo el archivo 'Base';
include_once("Base.php");

// Creando clase 'Guest' que hereda de la clase 'Base'
class Guest extends Base1{
  
  // Definiendo de forma estatica la variable $name que se usa en la clase heredada 'Base'
  protected $name = "Invitado";

}

// Creando una instancia de la clase 'Guest'
$guest1 = new Guest();
echo $guest1->login(); // Mi nombre es Invitado desde la clase Guest

?>
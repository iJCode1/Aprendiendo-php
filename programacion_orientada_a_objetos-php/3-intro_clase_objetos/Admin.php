<?php

// Se incluye la clase 'Person' para hacer uso de sus propiedades y métodos
include_once("./Person.php");

// Se crea la clase 'Admin' que a su vez extiene de la clase 'Person'
class Admin extends Person{
  public $name = "Administrador";
}
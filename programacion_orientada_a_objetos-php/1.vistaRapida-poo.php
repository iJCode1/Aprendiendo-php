<?php

// La programación orientada a objetos nos permite cambiar el paradigma en la que programamos.
// La idea es crear una clase principal y de ahí crear instancias llamadas 'objetos'

// Creación de clases
class User{
  public $type;
}

class Admin{
  public function greet(){
    return '¡Hola Administrador!';
  }
}

// Creación de objetos
$user = new User(); // Se crea un nuevo objeto 'User'
$user->type = new Admin(); // En la variable 'type' del objeto 'user', se le asigna un nuevo objeto de 'Admin'

echo $user->type->greet(); // Se accede a la función 'greet()' que está en la clase 'Admin' por que a la variable 'type' de 'user' se le asigno una instancia de este objeto
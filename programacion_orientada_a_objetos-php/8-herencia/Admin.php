<?php

// Incluyendo archivo 'User'
include_once('User.php');

// Creando clase que hereda de la clase 'user'
class Admin extends User{

  // Como esta clase hereda de la clase 'User' puede acceder a sus propiedades, constantes y métodos siempre y cuando el alcance lo permita
  // Adicionalmente se puede sobrecargar algún método, es decir, se puede crear un método que exista en el padre para que tenga otro comportamiento siempre y cuando su método de acceso no sea 'final'
  
  public function getName(){ // Aplicando polimorfismo
    return "El nombre es: {$this->name}";
  }

  public function getName2(){ // Esto no es posible ya que el método 'getName2' tiene un encapsulamiento del tipo 'final' en la clase padre
    return "Esta clase fue modificada en la clase 'Admin'";
  }

}

// Creando una instancía de la clase 'Admin'
$admin1 = new Admin("Joel");
echo $admin1->getName(); // El nombre es: Joel

// Si no se hubiera aplicado 'Polimorfismo' al método getName desde la clase 'Admin', el resultado seria:
// echo $admin1->getName(); // Joel

echo $admin1->getName2(); // Fatal error: Cannot override final method User::getName2()


?>
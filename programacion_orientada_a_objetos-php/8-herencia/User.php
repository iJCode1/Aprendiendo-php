<?php

// Creando la clase padre
class User{
  
  // Creando método constructor (Versiones anteriores)
  
  // public $name;
  // public function __construct($name){
  //   $this->name = $name;
  // }

  // Otra forma de crear un método constructor en (Versiones PHP8 en adelante):
  public function __construct(public $name){}

  // Creando método para imprimir 'name'
  public function getName(){
    return $this->name;
  }

  /*
    Una clase, propiedad, constante o método pueden tener un encapsulamiento del tipo 'final'
    Esto lo que hace es que dicho elemento no pueda ser modificado o sobreescrito en alguna clase que herede de esta...
  */
  final public function getName2(){
    return $this->name;
  }

}

?>
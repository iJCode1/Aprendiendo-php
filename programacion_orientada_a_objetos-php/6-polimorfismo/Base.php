<?php

// Creando la clase abstracta 'Base'
abstract class Base1{

  // Creando propiedad
  protected $name;

  // Creando métodos de la clase
  private function getClassName(){
    return get_called_class(); // retornara el nombre de la clase en la cual fue invocado dicho método
  }

  public function login(){
    return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
  }

}

?>
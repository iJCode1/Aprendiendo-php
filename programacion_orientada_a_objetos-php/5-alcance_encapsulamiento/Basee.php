<?php

/*
  El alcance o encapsulamiento define la visibilidad que tendra una propiedad, constante o método de una clase...
  Dependera del alcance para que algo pueda ser accedido desde uno u otro lugar por ejemplo, otro archivo, clase heredada o misma clase.
  Los tipos de alcances son:
  - public: Si se usa un alcance de este tipo, la propiedad, constante o método podra ser leído, accedido o modificado desde cualquier parte de nuestro sistema.

  - private: Si se usa este tipo de alcance, la propiedad, constante o método solo podra ser leído desde la misma clase donde se esta declarando, es decir, no se podra editar desde fuera de la clase.

  - protected: Si se usa este tipo de alcance, es muy similar al 'private' ya que solo puede ser accedido desde la misma clase PERO, si una clase hereda de la clase principal, esta clase hija podra acceder a las propiedades, constantes y métodos de la clase.

*/

// Declarando una clase con propiedades, constantes y métodos de un alcance diferente
class Basee{

  // Definiendo propiedades y constantes
  public $namePublic = "Joel Publico";
  private $namePrivate = "Joel Private";
  protected $nameProtected = "Joel Protected";

  public const agePublic = 22;
  private const agePrivate = 32;
  protected const ageProtected = 42;

  // Definiendo métodos
  function saludarProtected(){
    echo "¡Hola, mi nombre protected es: $this->nameProtected y mi edad protected es: ".$this::ageProtected;
  }
}

?>
<?php

include_once('Basee.php');

// Creando una clase que herede de 'Base'
class Cached extends Basee{

  public function saludarCached(){
    echo "Hola, estoy desde cached!";
  }

}

// Creando una instancia de la clase 'cached'
$cached1 = new Cached;

// Accediendo a propiedades del la clase heredada 'Basee'
echo $cached1->namePublic . "\n"; // Joel Publico
echo $cached1->namePrivate . "\n"; // Notice: Undefined property: Cached::$namePrivate
echo $cached1->nameProtected . "\n"; // Fatal error: Uncaught Error: Cannot access protected property Cached::$nameProtected


// Accediendo a constantes de la clase heredada 'Base'
echo $cached1::agePublic . "\n"; // 22
echo $cached1::agePrivate . "\n"; // Fatal error: Uncaught Error: Undefined class constant 'agePrivate'
echo $cached1::ageProtected . "\n"; // Fatal error: Uncaught Error: Cannot access protected const Cached::ageProtected


// Accediendo a los métodos de la clase heredada 'Base'
$cached1->saludarProtected(); // ¡Hola, mi nombre protected es: Joel Protected y mi edad protected es: 42
echo "\n";


// Accediendo al método de la clase 'Cached'
$cached1->saludarCached(); // Hola, estoy desde cached!
echo "\n";


?>
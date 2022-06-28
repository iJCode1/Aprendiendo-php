<?php
  // La abstracción no es más que una plantilla de la clase que queremos crear.
  // Existen clases abstractas y métodos abstractos
  // Una clase abstracta puede tener métodos normales que definen que hace el código.
  // Si una clase tiene métodos abstractos, estos solo deben ser inicializados más no definir que hara el código pues esta es tarea de la clase que herede de está clase abstracta

  // Creación de clase abstracta
  abstract class Base{

    // Definiendo método normal
    public function saludar(){
      echo "Hola Mundo desde Base";
    }

    // Definiendo método abstracto
    abstract public function despedir(); // Solo se define la función obligatoria que deben tener las clases que hereden de esta clase, más no el cuerpo de la función

  }
?>
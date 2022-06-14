<?php
// Se obtiene lo que tiene la variable global $_POST
$post = $_POST;

// Se imprime lo que contiene la variable $post
var_dump($post);
/*
  Ejemplo de salida: 
  array(2) { ["name"]=> string(4) "Joel" ["age"]=> string(2) "12" }
*/

// Se valida si hay algún valor del arreglo que tenga el nombre de 'nombre' y 'edad', enviados desde el formulario
// Si si, se guarda en a variable correspondiente, si no, se guarda un valor por defecto
$name = isset($post['name'])? $post['name'] : 'Sin nombre';
$age = isset($_POST['age'])? $_POST['age'] : 'Sin edad';
$lastname = isset($_POST['lastname'])? $_POST['lastname'] : 'Sin apellido';

echo("\nEl nombre es: $name");
echo("\nLa edad es: $age");
echo("\nEl apellido es: $lastname");
/*
  Ejemplo de salida (pasando desde formulario 'nombre' y 'edad')
  El nombre es: Julieta La edad es: 53 El apellido es: Sin apellido
*/  

// Al utilizar el método POST, los datos se envían por la parte de atrás y no son visibles en la URL
// Pero se debe tener cuidado ya que los datos enviados pueden visualizarse desde las herramientas del desarrollador en el navegador
// específicamente desde: Network > Payload
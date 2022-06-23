<?php

// Se incluyen los diferentes archivos donde están las clases creadas
include_once('./Admin.php');
include_once('./User.php');

// Se crean las instancias
$usuario = new User();

// Se le asigna un valor a las propiedades del objeto
$usuario->type = new Admin(); // A la propiedad 'type' se le asigna una instancia de la clase 'Admin'

// Invocamos algún metodo
$usuario->type->greet();
<?php
/*
  Ciclo 'do-while' en php
  Este ciclo es muy similar al ciclo while, con la diferencia que aunque la condición al inicio no se cumpla, él
  bloque de código se ejecutará al menos una vez al principio.
  Fuera de eso, se trabaja igual que en el ciclo while, requiere una condición y que su variable contadora
  vaya incrementándose o decrementándose para no llegar a un ciclo infinito.
  Estructura del ciclo 'do-while'
  do{
     Bloque de código a ejecutar
  }
  while(condicion);
*/

// declarando variables
$listaDeNombres = [];
$estaEnElArreglo = false;

// Declarando ciclo 'do-while'
do{
  $nombre = readline("Hola, ingresa un nombre por favor ");
  $estaEnElArreglo = in_array($nombre, $listaDeNombres);
  if(!$estaEnElArreglo){
    array_push($listaDeNombres, $nombre);
  }
}while( !$estaEnElArreglo );

echo("El arreglo final es:\n");
var_dump($listaDeNombres);
/*

*/

echo(PHP_EOL);
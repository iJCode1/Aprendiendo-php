<?php

// ¿Que hora es?
/*
  Pedirle al usuario un número que representara los segundos
  y a partir de ese número, determinar cuantas horas, minutos y segundos son.
*/

$segundosUser = 3661;
$horas = (int) ($segundosUser / 3600);
$segundos = (int) ($segundosUser % 3600); // %3600 ya que se requiere conocer cuentos minutos hay de la división de horas
$minutos = (int) ($segundos / 60); // /60 ya que 1 minuto tiene 60 segundos
$segundos = (int) ($segundos % 60); // %60 ya que se requiere saber cuantos segundos sobraron

// echo("En $segundosUser segundos hay: $horas horas, $minutos minutos, $segundos segundos\n");


/*
  Pedirle al usuario el número de horas, minutos y segundos y mostrarle cuantos segundos hay
*/
$horas = 5;
$minutos = 43;
$segundos = 23;

$segundosFinales = $segundos + ($minutos * 60) + ($horas * 3600);

echo("En $horas horas, $minutos minutos y $segundos segundos hay: $segundosFinales segundos\n");

echo("\n");

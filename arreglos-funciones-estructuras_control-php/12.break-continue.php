<?php
/*
  Break y Continue
  PHP nos permite en algunas estructuras utilizar estas palabras para detener el ciclo u omitir la actual iteración respectivamente.

 - break: finaliza la ejecución de la estructura for, foreach, while, do-while o switch en curso.
 - continue: se utiliza dentro de las estructuras iterativas para saltar el resto de la iteración actual del bucle y continuar la ejecución en la evaluación de la condición, para luego comenzar la siguiente iteración.
*/

// Declarando arreglo
$costos_playeras = [
  'Pumas' => 1499,
  'Toluca' => 1200,
  'Real Madrid' => 1600,
  'Necaxa' => 800,
  'Monterrey' => 1192,
  'Barcelona' => 1300,
];

// Recorriendo el arreglo y haciendo uso de 'continue' para saltar una determinada iteración
foreach($costos_playeras as $playera => $costo){
  if($playera === 'Necaxa'){ // Si la clave es 'Necaxa', omite la iteración
    continue;
  }
  echo("La playera de $playera tiene un costo de: $$costo\n");
}
/*
  La playera de Pumas tiene un costo de: $1499
  La playera de Toluca tiene un costo de: $1200
  La playera de Real Madrid tiene un costo de: $1600
  La playera de Monterrey tiene un costo de: $1192
  La playera de Barcelona tiene un costo de: $1300
*/

// Recorriendo el arreglo y haciendo uso de 'break' para terminar el ciclo
foreach($costos_playeras as $playera => $costo){
  if($playera === "Real Madrid"){
    break;
  }
  echo("La playera de $playera tiene un costo de: $$costo\n");
}
/*
  La playera de Pumas tiene un costo de: $1499
  La playera de Toluca tiene un costo de: $1200
*/

echo(PHP_EOL);
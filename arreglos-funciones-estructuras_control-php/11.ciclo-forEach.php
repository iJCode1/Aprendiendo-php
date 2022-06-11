<?php

/*
  El ciclo 'foreach' en php nos permite iterar un arreglo (array) u objeto.
  Este ciclo es muy inteligente ya que solo basta con indicarle que arreglo queremos recorrer y
  en automático este obtendrá el tamaño del arreglo y a cada uno de sus elementos, inclusive de las claves
  en caso de trabajar con un arreglo asociativo.

  Existen 2 sintaxis
  1) Si solo se quieren obtener los valores (sea arreglo asociativo o no)
  foreach($array as $valor){
    Código a ejecutar
  }

  2) Si se quiere obtener la clave-valor en un arreglo asociativo
  foreach($array as $clave => $valor){
    Código a ejecutar
  }
*/

// Declarando un arreglo sencillo
$playeras = ["Pumas", "Toluca", "Real Madrid", "Necaxa", "Monterrey", "Barcelona"];

// Recorriendo el arreglo
foreach($playeras as $playera){
  echo("La playera es de: $playera\n");
}
/*
  La playera es de: Pumas
  La playera es de: Toluca
  La playera es de: Real Madrid
  La playera es de: Necaxa
  La playera es de: Monterrey
  La playera es de: Barcelona
*/

foreach($playeras as $clave => $playera){
  echo("La playera $clave es de: $playera\n");
}
/*
  La playera 0 es de: Pumas
  La playera 1 es de: Toluca
  La playera 2 es de: Real Madrid
  La playera 3 es de: Necaxa
  La playera 4 es de: Monterrey
  La playera 5 es de: Barcelona
*/


// Declarando arreglo asociativo
$costos_playeras = [
  'Pumas' => 1499,
  'Toluca' => 1200,
  'Real Madrid' => 1600,
  'Necaxa' => 800,
  'Monterrey' => 1192,
  'Barcelona' => 1300,
];

// Recorriendo un arreglo asociativo y obteniendo solo el valor de cada elemento
foreach($costos_playeras as $costo){
  echo("El costo de la playera es: $$costo\n");
}
/*
  El costo de la playera es: $1499
  El costo de la playera es: $1200
  El costo de la playera es: $1600
  El costo de la playera es: $800
  El costo de la playera es: $1192
  El costo de la playera es: $1300
*/

// Recorriendo un arreglo asociativo y obteniendo la clave y el valor de cada elemento
foreach($costos_playeras as $clave => $costo){
  echo("El costo de la playera de $clave es de: $$costo\n");
}
/*
  El costo de la playera de Pumas es de: $1499
  El costo de la playera de Toluca es de: $1200
  El costo de la playera de Real Madrid es de: $1600
  El costo de la playera de Necaxa es de: $800
  El costo de la playera de Monterrey es de: $1192
  El costo de la playera de Barcelona es de: $1300
*/


echo(PHP_EOL);
<?php
// Juego del ahorcado con PHP

// Función que limpia la consola
function clear(){
  if(PHP_OS === "WINNT"){
    system("cls");
  }else{
    system("clear");
  }
}

// Se definen las palabras posibles
$words = ["Jugador", "Videojuego", "Helado", "Pasamontañas", "Asteroides", "Escritorios", "Pastel", "Jugueteria", "Pasteleria"];

const MAX_ATTEMPS = 6; // Se define el máximo de intentos posibles

echo("¡Bienvenido al juego del ahorcado!\n\n");

$choosenWord = $words[rand( 0,(count($words)-1))]; // Obtiene de forma aleatoria una palabra dentro del arreglo
$choosenWord = strtolower($choosenWord); // Pasa a minisculas la palabra
$wordSize = strlen($choosenWord); // Obtiene el tamaño de la palabra 
$discoveredLetters = str_pad("", ($wordSize), "_"); // Pinta el tamaño de la palabra en un string compuesto de solo guiones bajos _ 
$attemps = 0; // Variable que almacena el número de intentos por parte del jugador

do{
  echo("La palabra a adivinar tiene un total de $wordSize palabras\n\n");
  echo($discoveredLetters);

  // Pedimos al usuario que escriba una letra
  $userLetter = readline("\nEscribe una letra: ");
  // $userLetter ='v';
  $userLetter = strtolower($userLetter);

  // Verificamos si la palabra contiene la letra que el jugador ingreso
  if( str_contains($choosenWord, $userLetter) ){
    echo("Si la contiene");
    // Se buscan todas las coincidencias y por ende su posición de la letra en la palabra
    $offset = 0;
    while( ($letterPosition = strpos($choosenWord, $userLetter, $offset)) !== false){
      $discoveredLetters[$letterPosition] = $userLetter;
      $offset = $letterPosition + 1;
    }
  }else{
    clear();
    $attemps++;
    echo("La letra $userLetter no esta en la palabra :(\n");
    echo("Te quedan ". (MAX_ATTEMPS - $attemps) ." intentos\n");
    sleep(2);
  }
  clear();
}while( (MAX_ATTEMPS - $attemps) > 0 && $discoveredLetters !== $choosenWord);
clear();

if($attemps < MAX_ATTEMPS){
  echo("¡Felicidades! Has adivinado la palabra :)\n");
}else{
  echo("Suerte para la proxima!\n");
}

echo("La palabra fue $choosenWord\n");
echo("Tu escribiste $discoveredLetters\n");

echo(PHP_EOL);
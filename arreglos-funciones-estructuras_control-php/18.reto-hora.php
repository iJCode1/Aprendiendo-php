<?php
/*
  Reto - ¿Qué hora es?
  Mostrar que hora es actualmente...
*/

// Declarando función que retorna la hora
function obtenerHora(){
  date_default_timezone_set("America/Mexico_City"); // Define la zona horaria
  return date('h:i:s a',time()); // Retorna la hora en un formato de 'horas:minutos:segundos: am|pm
}

echo "¡Hola! ¿Me podrías decir qué hora es?\n";
echo "¡Claro! Son las ". obtenerHora();

echo("\n");
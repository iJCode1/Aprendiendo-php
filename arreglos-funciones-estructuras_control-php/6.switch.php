<?php

/*
    La estructura switch permite ejecutar un bloque de código a partir de un caso en específico.
    Es decir, switch va a evaluar una variable y a partir de su valor, entrará o no a un caso (bloque de código).
    Si no hay ningún caso contemplado para el valor que se tiene, switch otorga de un caso por defecto.

    La estructura es:
    switch(variable){
        case 1:
            // código a ejecutar si se cumple el caso
        break;
        case n:
            // código a ejecutar si se cumple el caso
        break;
        default:
            // código a ejecutar si no se cumple ningún caso anterior
    }

    Es importante que al finalizar cada caso se coloque la palabra 'break' ya que esta cerrara el caso y no se ejecutará lo demás
*/

// Declarando variable
$operacion = 'l';
$n1 = 10;
$n2 = 5;

// Declarando estructura switch
switch($operacion){
    case 's':
    case 'S':
        var_dump("La suma es: ". ($n1 + $n2));
    break;
    case 'r':
    case 'R':
        var_dump("La resta es: ". ($n1 - $n2));
    break;
    case 'm':
    case 'M':
        var_dump("La multiplicación es: ". ($n1 * $n2));
    break;
    case 'd':
    case 'D':
        if($n2 === 0){
            var_dump("No se puede dividir entre cero");
        }else{
            var_dump("La división es: ". ($n1 / $n2));
        }
    break;
    default: 
        var_dump("Esa operación no se tiene contemplada, verifique su selección");
}

echo(PHP_EOL);
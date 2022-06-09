<?php
/*
    Condicionales en PHP
    PHP Permite hacer condicionales del tipo:
    if(condición){
        // Código si se cumple la condición
    }else{
        // Código si no se cumple la condición
    }

    También se puede utilizar la estructura con el else-if (Se pueden usar los 'else-if' que se requieran)
    if(condición){
        // Código si se cumple la condición
    }else if(condición){
        // Código si se cumple la condición
    }else{
        // Código si no se cumple la condición
    }

    Estas condicionales nos permiten ejecutar un bloque de código siempre y cuando se cumpla
    la condición que se coloca dentro de los parentesis. 
    - Las condicionales trabajan con valores booleanos
    - Si el bloque de código solo tiene 1 línea, se puede omitir el uso de las llaves '{}'
*/

// Declarando variables
$tengo_una_planta = true;

// Declarando condicional if-else
if($tengo_una_planta){
    var_dump("Tienes una planta y debes cuidarla mucho ❤");
}else{
    var_dump("No tienes una planta, deberias tener una :(");
}
// Tienes una planta y debes cuidarla mucho ❤

// Cambiando el valor de la variable 'tengo_una_planta'
$tengo_una_planta = false;

// Declarando de nuevo la condicional if-else
if($tengo_una_planta)
    var_dump("Tienes una planta y debes cuidarla mucho ❤");
else
    var_dump("No tienes una planta, deberias tener una :(");
// No tienes una planta, deberias tener una :(


// Declarando un condicional if-else-if-else
$edad = 22;

if($edad <= 0){
    var_dump("Comprueba que tu edad sea correcta");
}else if($edad <= 6){
    var_dump("Tienes menos de 7 años");
}else if($edad <= 17){
    var_dump("Tienes entre 7 y 17 años");
}else if($edad <= 30){
    var_dump("Tienes entre 18 y 30 años");
}else{
    var_dump("Tienes más de 30 años");
}
// Tienes entre 18 y 30 años


echo("\n");
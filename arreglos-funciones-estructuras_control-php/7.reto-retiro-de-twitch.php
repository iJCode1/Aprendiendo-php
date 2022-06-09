<?php

/*
    Reto: ¿Puedo retirar mis donaciones de Twitch?
    - Pedirle al streamer cuanto dinero tiene de donaciones
    - Si el streamer tiene más de 100 dolares, se puede retirar el dinero
    - Si el streamer tiene menos de 100 dolares, no se puede retirar el dinero
*/

// Solicitando valor al streamer
// $donaciones = readline("¿Cuanto dinero tienes acumulado de donaciones?");
$donaciones = 100;

if($donaciones >= 100){
    var_dump("Tenias $donaciones dolares, fueron enviados directamente a tu cuenta bancaria ✔");
}else{
    var_dump("Lamentablemente no tienes el monto minimo de 100 dolares para retirar, sigue trabajando!! jeje");
}

echo(PHP_EOL);
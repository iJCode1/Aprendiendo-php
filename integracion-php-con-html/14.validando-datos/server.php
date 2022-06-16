<?php

// Creando variables manualmente para hacer su respectiva validación
$esEntero = "12";
$noEsEntero = 12.7;

$esFloat = "81.87";
$noEsFloat = "joel78.87";

$esIP = "192.168.0.11";
$noEsIP = "192.168";

$esEmail = "joel.dome@densi.com";
$noEsEmail = "joeldome@densi";

$esBooleano = "true";
$noEsBooleano = "soytrue";

$esURL = "https://joel.com";
$noEsURL = "joel.com";

// Validando datos en PHP gracias a la función filter_var
// Si es válido, devuelve el valor validado
// Si no es válido, devuelve un 'false'

// Validando si es un número entero
echo("<p>Validando si es un número entero</p>");
echo("<pre>");

var_dump( filter_var($esEntero, FILTER_VALIDATE_INT) ); // int(12)
var_dump( filter_var($noEsEntero, FILTER_VALIDATE_INT) ); // bool(false)

echo("</pre>");


// Validando si es un número de tipo float
echo("<p>Validando si es un número de tipo float</p>");
echo("<pre>");

var_dump( filter_var($esFloat, FILTER_VALIDATE_FLOAT) ); // float(81.87)
var_dump( filter_var($noEsFloat, FILTER_VALIDATE_FLOAT) ); // bool(false)

echo("</pre>");


// Validando si es una IP
echo("<p>Validando si es una IP</p>");
echo("<pre>");

var_dump( filter_var($esIP, FILTER_VALIDATE_IP) ); // string(12) "192.168.0.11"
var_dump( filter_var($noEsIP, FILTER_VALIDATE_IP) ); // bool(false)

echo("</pre>");


// Validando si es un correo
echo("<p>Validando si es un correo electronico</p>");
echo("<pre>");

var_dump( filter_var($esEmail, FILTER_VALIDATE_EMAIL) ); // string(19) "joel.dome@densi.com"
var_dump( filter_var($noEsEmail, FILTER_VALIDATE_EMAIL) ); // bool(false)

echo("</pre>");


// Validando si es un booleano
echo("<p>Validando si es un booleano</p>");
echo("<pre>");

var_dump( filter_var($esBooleano, FILTER_VALIDATE_BOOLEAN) ); //  // bool(true)
var_dump( filter_var($noEsBooleano, FILTER_VALIDATE_BOOLEAN) ); // bool(false)

echo("</pre>");


// Validando si es una URL válida
echo("<p>Validando si es una URL válida</p>");
echo("<pre>");

var_dump( filter_var($esURL, FILTER_VALIDATE_URL) ); //  // string(16) "https://joel.com"
var_dump( filter_var($noEsURL, FILTER_VALIDATE_URL) ); // bool(false)

echo("</pre>");
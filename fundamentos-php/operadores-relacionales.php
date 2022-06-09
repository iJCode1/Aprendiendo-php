<?php
// Operadores relacionales en PHP
/*
  Al igual que en otros lenguajes, en PHP tenemos varios operadores relacionales
  los cuales comparan 2 o mas operandos y nos retornaran un valor 'true' o 'false' 
  y en ciertos casos algún otro valor.
*/

// Declaración de variables
$n1 = 7;
$n2 = 4;
$n2String = "4";
$n3 = 7;
$soyNull = null;

// Operador de Igualdad: == (Compara si son iguales ambos operandos)
echo("Operador de Igualdad\n");
var_dump( $n1 == $n2 ); // false
var_dump( $n2 == $n2String ); // true
var_dump( $n1 === $n3 ); // true

// Operador de Idéntico: === (Compara si son iguales ambos operandos junto a su tipo de dato)
echo("Operador de Idéntico\n");
var_dump( $n1 === $n2 ); // false
var_dump( $n2 === $n2String ); // false
var_dump( $n1 === $n3 ); // true

// Operador de Diferente: != || <> (Compara que los operandos sean diferentes)
echo("Operador de Diferente\n");
var_dump( $n1 != $n2 ); // true
var_dump( $n1 <> $n2 ); // true
var_dump( $n2 != $n2String ); // false
var_dump( $n1 != $n3 ); // false
var_dump( $n1 <> $n3 ); // false

// Operador de Diferente: !== (Compara que los valores sean diferentes junto a su tipo de dato)
echo("Operador de Diferente\n");
var_dump( $n1 !== $n2 ); // true
var_dump( $n2 !== $n2String ); // true
var_dump( $n1 !== $n3 ); // false

// Operador de menor que: < (Compara que el primer operando sea menor al segundo operando)
echo("Operador de menor que\n");
var_dump( $n1 < $n2 ); // false
var_dump( $n2 < $n1 ); // true
var_dump( $n2 < $n2String ); // false

// Operador de menor o igual que: <= (Compara que el primer operando sea menor o igual al segundo operando)
echo("Operador de menor o igual que\n");
var_dump( $n1 <= $n2 ); // false
var_dump( $n2 <= $n1 ); // true
var_dump( $n2 <= $n2String ); // true

// Operador de mayor que: > (Compara que el primer operando sea mayor al segundo operando)
echo("Operador de mayor que\n");
var_dump( $n1 > $n2 ); // true
var_dump( $n2 > $n1 ); // false
var_dump( $n2 > $n2String ); // false

// Operador de mayor o igual que: >= (Compara que el primer operando sea mayor o igual al segundo operando)
echo("Operador de mayor o igual que\n");
var_dump( $n1 >= $n2 ); // true
var_dump( $n2 >= $n1 ); // false
var_dump( $n2 >= $n2String ); // true

// Operador de nave espacial: <=> (Compara los 2 operandos y retorna -1 si el primer operando (izquierda) es menor al segundo operando (derecha), retorna 0 si ambos operandos son iguales y retorna 1 si el primer operando (izquierda) es mayor al segundo operando (derecha))
echo("Operador de nave espacial\n");
var_dump( $n2 <=> $n1 ); // -1
var_dump( $n1 <=> $n2 ); // 1
var_dump( $n2 <=> $n2String ); // 0

// Operador de fusión de null: ?? (Devuelve el primer operando (valor) si existe y no es null, de lo contrario devuelve el segundo operando)
echo("Operador de fusión de null\n");
var_dump( $soyNull); // null
var_dump( $soyNull ?? 2); // 2
var_dump( $soyNull ?? $n1 ); // 7
var_dump( $variableNoExistente ?? $otraVariableNoExistente ?? $n2 ?? $n1 ); // 4

echo(PHP_EOL);
<?php

// Operadores lógicos en PHP
/*
  Se tienen 3 operadores lógicos los cuales son:
  - AND, &&
  - OR, ||
  - Not ( ! )
*/

$es_michi = true;
$michi_4_patas = true;
$michi_vuela = false;
$michi_programa_php = false;

// AND
echo("******** AND ********\n");
var_dump( $es_michi && $michi_4_patas ); // true
var_dump( $michi_4_patas AND $es_michi ); // true
var_dump( $es_michi && $michi_programa_php ); // false
var_dump( $michi_programa_php AND $es_michi ); // false

// OR
echo("******** OR ********\n");
var_dump( $es_michi || $michi_programa_php ); // true
var_dump( $michi_programa_php OR $es_michi ); // true
var_dump( $michi_vuela OR $michi_programa_php ); // false
var_dump( $michi_programa_php || $michi_vuela ); // false
echo ("\n");

// NOT
echo("******** NOT ********\n");
var_dump( !$es_michi ); // false
var_dump( !$michi_programa_php ); // true
var_dump( !$es_michi AND $michi_4_patas ); // false
var_dump( !$michi_programa_php AND $es_michi ); // true
var_dump( !$es_michi OR $michi_4_patas ); // true
var_dump( $michi_programa_php || !$es_michi ); // false


echo("******** Operación rara ********\n");
// Operación rara que tiene PHP
$resultado = $michi_4_patas AND $michi_programa_php;
var_dump($resultado); // true, aunque se espera que de false

$resultado = $michi_4_patas && $michi_programa_php;
var_dump($resultado); // false


// *********** Reto de clase ***********
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cúal es el resultado?
$es_un_michi_grande && $le_gusta_comer; // true
$es_un_michi_grande || $sabe_volar; // true
$sabe_volar || $tiene_2_patas; // false
!$le_gusta_comer; // false
!$le_gusta_comer || $es_un_michi_grande; //true


echo ("\n");

<?php
// Obteniendo lo que se mando por el método POST
echo("<p>¿Qué tiene la variable global POST?</p>");
echo("<pre>");

  var_dump($_POST);
  /*
    array(4) {
      ["name"]=>
      string(64) "Te estoy inyectando código muajajaja"
      ["username"]=>
      string(20) "SoyElHacker O'si 777"
      ["age"]=>
      string(4) "22.5"
      ["email"]=>
      string(24) "soyHacker().87&@hacki.mx"
    }
  */

echo("</pre>");


// Obteniendo los datos
$nombre = $_POST['name'];
$edad = $_POST['age'];
$nombeUsuario = $_POST['username'];
$correo = $_POST['email'];

// Mostrando los datos originales
echo("<p>¡Datos Originales!</p>");
echo("<pre>");

  var_dump($nombre); // string(64) "Te estoy inyectando código muajajaja"
  var_dump($edad); // string(4) "22.5"
  var_dump($nombeUsuario); // string(20) "SoyElHacker O'si 777"
  var_dump($correo); // string(24) "soyHacker().87&@hacki.mx"

echo("</pre>");


// Limpiando y sanitizando los datos obtenidos

// htmlentities(): convierte todos los caracteres aplicables a entidades HTML
// nombre 'original'; <p style="color: blue">Te estoy inyectando código muajajaja</p>
$nombreLimpio = htmlentities($nombre);

// addslashes(): Escapa un caracter con barras invertidas, los caracteres que deben ser escapados son: comilla simple ('), comilla doble ("), barra invertida (\) y NUL (byte de null)
// username 'original': SoyElHacker O'si 777
$usernameLimpio = addslashes($nombeUsuario);

// preg_replace(): Realiza una búsqueda y sustitución a partir de una expresion regular
// username 'original': SoyElHacker O'si 777
$soloLetras = preg_replace("/\d/", "", $nombeUsuario); // Quitara los números
$soloNumeros = preg_replace("/\D/", "", $nombeUsuario); // Quitara lás letras

// filter_var(): Filtra una variable con el filtro que se indique adelante
// email 'original': soyHacker().87&@hacki.mx
$correoLimpio = filter_var($correo, FILTER_SANITIZE_EMAIL);
// Hay mejores formas de sanitizar un dato númerico pero esta es una primera forma
// edad 'original': 22.5
$edadLimpio = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);


// Mostrando los datos limpios o sanitizados
echo("<p>¡Datos Limpios!</p>");
echo("<pre>");

  var_dump($nombreLimpio); // string(92) "<p style="color: blue">Te estoy inyectando código muajajaja</p>"
  var_dump($edadLimpio); // string(3) "225"
  var_dump($usernameLimpio); // string(21) "SoyElHacker O\'si 777"
  var_dump($correoLimpio); // string(22) "soyHacker.87&@hacki.mx"
  var_dump("Solo letras: ". $soloLetras); // string(28) "Solo letras: SoyElHacker O'si "
  var_dump("Solo numeros: ". $soloNumeros); // string(17) "Solo numeros: 777"

echo("</pre>");
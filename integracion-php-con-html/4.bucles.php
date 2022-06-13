<?php 
  // Creación de variable
  $tablaMultiplicar = 7;
  // Creando un arreglo para recorrerlo más adelante
  $usuarios = ["Joel", "Julieta", "Gabriela", "Clark", "Emiliano", "Sandra", "Steve"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Bucles en PHP</title>
</head>
<body>
  <!-- Bucle for -->
  <p><b>Bucle For</b></p>
  <ul>
    <?php for($i=1; $i<=10; $i++): ?>
      <li> <?= $tablaMultiplicar ?> * <?= $i ?> = <?= ($tablaMultiplicar * $i) ?> </li>
    <?php endfor; ?>
  </ul>

  <!-- Bucle while -->
  <?php while(false): ?>
    <p>Soy un parrafo dentro de un bucle while</p>
  <?php endwhile; ?>

  <!-- Bucle foreach -->
  <p><b>Bucle foreach</b></p>
  <ul>
    <?php foreach($usuarios as $usuario): ?>
      <li> El usuario es: <?= $usuario ?> </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
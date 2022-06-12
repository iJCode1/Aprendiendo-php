<?php 
  $esMayorDeEdad = true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Condicionales con HTML y PHP</title>
</head>
<body>
  <!-- Para poder crear condicionales en PHP hay varias formas, las cuales son -->

  <!-- Forma 1: No recomendada nunca -->
  <h1>Forma no recomendada nunca</h1>
  <?php 
    if($esMayorDeEdad){
      echo "<p>Es mayor de edad 😎</p>";
    }else{
      echo "<p>No es mayor de edad 😞</p>";
    }
  ?>

  <!-- Forma 2: Aceptada más no la mejor -->
  <h1>Forma aceptada</h1>
  <?php if($esMayorDeEdad){ ?>
    <p>Es mayor de edad 😎</p>
  <?php } else{ ?>
    <p>No es mayor de edad 😞</p>
  <?php } ?>

  <!-- Forma 3: La mejor forma entre las 3 -->
  <h1>La mejor forma</h1>
  <?php if($esMayorDeEdad): ?>
    <p>Es mayor de edad 😎</p>
  <?php else: ?>
    <p>No es mayor de edad 😞</p>
  <?php endif; ?>
</body>
</html>
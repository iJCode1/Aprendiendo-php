<?php
  $nombre = "Joel";
  $edad = 22;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Imprimir texto y etiquetas con PHP</title>
</head>
<body>
  <!-- Imprimir texto y etiquetas de HTML con PHP -->
  <!-- También se pueden imprimir variables de PHP en HTML-->
  <!-- Algunas formas son -->
  <!-- Forma 1 -->
  <h1>¡Hola, mis datos son: Nombre - <?php echo $nombre?>, Edad - <?php echo $edad ?> </h1>

  <!-- Forma 2 -->
  <h2>¡Hola, mis datos son: Nombre - <?= $nombre ?>, Edad - <?= $edad ?></h2>

  <!-- Forma 3 -->
  <?php
    echo "<h3>¡Hola, mis datos son: Nombre - $nombre, Edad - $edad</h3>";
  ?>

  <!-- Forma 4 -->
  <?= "<h4>¡Hola, mis datos son: Nombre - $nombre, Edad - $edad</h4>"; ?>

</body>
</html>
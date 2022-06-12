<?php
  // Creando un arreglo con las rutas de imagenes
  $imagenes = ["http://place-puppy.com/300x300", "http://place-puppy.com/200x250", "http://place-puppy.com/400x400"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - PHP en HTML</title>
</head>
<body>
  <h1>Pintando imágenes de forma dinámica con HTML y PHP</h1>
  <!-- Pintando imagenes de forma dinámica -->
  <?php
    foreach($imagenes as $imagen){
  ?>
    <img src="<?php echo $imagen?>" alt="Imagen de un perrito">
  <?php
    }
  ?>
</body>
</html>
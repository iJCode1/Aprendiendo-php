<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Guardando imagenes en el Servidor</title>
</head>
<body>
  <!-- Creando Formulario -->
  <!-- Cambiando la encriptación del formulario para el envío de imágenes -->
  <form action="./server.php" method="post" enctype="multipart/form-data">
    <label for="name">Ingresa el nombre</label>
    <input type="text" name="name" id="name">

    <label for="image">Selecciona la imágen</label>
    <input type="file" name="image" id="image">
    
    <button type="submit">Enviar Formulario</button>
  </form>
</body>
</html>
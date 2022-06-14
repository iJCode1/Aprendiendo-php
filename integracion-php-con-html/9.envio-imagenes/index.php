<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Envío de imágenes</title>
</head>
<body>
  <!-- Creación de formulario -->
  <!-- Se debe cambiar el tipo de encriptación para el envío de imágenes -->
  <form action="./server.php" method="POST" enctype="multipart/form-data">
  <label for="name">Nombre de la imágen: </label>
  <input type="text" name="name" id="name">
  <br/>
  <label for="image">Selecciona la imágen</label>
  <input type="file" name="image" id="image">

  <button type="submit">Enviar formulario</button>
  </form>
</body>
</html>
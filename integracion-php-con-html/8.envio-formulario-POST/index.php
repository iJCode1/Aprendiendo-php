<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Envío de datos por POST</title>
</head>
<body>
  <!-- Creación del formulario -->
  <form action="./server.php" method="post">
    <label for="name">Nombre: </label>
    <input type="text" name="name" id="name">

    <label for="age">Edad: </label>
    <input type="text" name="age" id="age">

    <button type="submit">Enviar formulario</button>
  </form>
</body>
</html>
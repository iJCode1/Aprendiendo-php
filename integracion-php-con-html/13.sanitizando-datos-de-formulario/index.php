<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Sanitizando datos del formulario</title>
</head>
<body>
  <!-- Creación de fomrulario -->
  <form action="./server.php" method="POST">
    <label for="name">Ingresa tu nombre:</label>
    <input type="text" id="name" name="name">
    <br>
    <br>

    <label for="username">Ingresa tu nombre de usuario:</label>
    <input type="text" id="username" name="username">
    <br>
    <br>

    <label for="age">Ingresa tu edad:</label>
    <input type="text" id="age" name="age">
    <br>
    <br>

    <label for="email">Ingresa tu correo:</label>
    <input type="text" id="email" name="email">
    <br>
    <br>

    <button type="submit">Enviar formulario</button>
  </form>
</body>
</html>
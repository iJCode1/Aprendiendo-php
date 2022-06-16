<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Validación de Formularios</title>
</head>
<body>
  <!-- Creación del formulario -->
  <form action="./server.php" method="POST">
    <label for="name">
      Ingresa tu nombre:
      <input type="text" name="name" id="name">
    </label>

    <!-- Un botón también puede llevar su atributo 'name' para validar si fue enviado por el método seleccionado -->
    <button type="submit" name="form">Enviar formulario</button>
  </form>
</body>
</html>
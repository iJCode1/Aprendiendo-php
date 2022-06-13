<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Envío de Formulario con GET</title>
</head>
<body>
  <!-- Se crea el formulario -->
  <!-- action: Hacia que archivo se mandan los datos -->
  <!-- method: Que método se usara -->
  <form action="./server.php" method="GET">
    <!-- Se crean los inputs -->
    <!-- En el input es necesario agregar el atributo 'name' ya que de esta forma se mandara y se podra obtener su valor -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"/>

    <label for="edad">Edad:</label>
    <input type="text" id="edad" name="edad"/>

    <!-- Se agrega el botón que enviara el formulario *Debe ser de tipo submit -->
    <button type="submit">Enviar Datos</bubtton>
  </form>
</body>
</html>
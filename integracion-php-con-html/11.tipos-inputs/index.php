<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Tipos de Inputs</title>
</head>
<body>
  <!-- Tipos de Inputs - Mandados al servidor -->
  <form action="./server.php" method="POST" enctype="multipart/form-data">
    <!-- Input normal -->
    <label for="name">Ingrese su nombre:</label>
    <input type="text" name="name" id="name"/>
    <br>
    <br>

    <!-- Input como 'array' -->    
    <label>Ingresa el nombre de las personas</label>
    <input type="text" name="person[]"/>
    <input type="text" name="person[]"/>
    <input type="text" name="person[]"/>
    <br>
    <br>

    <!-- Input como 'array asociativo' -->    
    <label for="name">Ingrese sus datos:</label>
    <br>
    <label for="nameUser">Nombre:</label>
    <input type="text" name="user[name]" id="nameUser"/>
    <br>
    <label for="ageUser">edad:</label>
    <input type="number" name="user[age]" id="ageUser"/>
    <br>
    <label for="teamUser">Equipo Favorito:</label>
    <input type="text" name="user[team]" id="teamUser"/>
    <br>

    <br>
    <button type="submit">Enviar Formulario</button>

  </form>
</body>
</html>
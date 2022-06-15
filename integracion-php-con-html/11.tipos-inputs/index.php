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

    <!-- Input de tipo checkbox -->
    <label>Selecciona las materias que llevas este semestre:</label>
    <label for="mate">Matematicas</label>
    <input type="checkbox" name="materia1" id="mate" value="Matematicas"/>
    <label for="progra">Programación Funcional</label>
    <input type="checkbox" name="materia2" id="progra" value="Programción funcional"/>
    <label for="movil">Desarrollo móvil</label>
    <input type="checkbox" name="materia3" id="movil" value="Desarrollo móvil"/>
    <br>
    <br>

    <!-- Input de tipo radio -->
    <label>Selecciona tu sexo:</label>
    <label for="h">Hombre</label>
    <input type="radio" name="sexo" id="h" value="hombre">
    <label for="m">Mujer</label>
    <input type="radio" name="sexo" id="m" value="mujer">
    <br>
    <br>

    <!-- Input de tipo 'file' multiple -->
    <label for="files">Carga tus archivos</label>
    <input type="file" multiple name="files[]" id="files"/>
    <br>
    <br>

    <button type="submit">Enviar Formulario</button>

  </form>
</body>
</html>
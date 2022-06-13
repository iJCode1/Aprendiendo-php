<?php
  // Creación de variables
  $personas = [
    [
      'id' => 0,
      'username' => "Joel",
    ],
    [
      'id' => 1,
      'username' => "Julieta",
    ],
    [
      'id' => 2,
      'username' => "Pepe",
    ],
  ];

  $saludo = "¡Hey, que tal!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Integración de PHP con HTML</title>
</head>
<body>
  <h1 id="saludo"></h1>

    <!-- Obteniendo variables de PHP desde Javascript -->
    <script>
      // Declarando variables
      let d = document;
      let $saludo = d.getElementById('saludo');

      // Pintando en el H1 el valor de la variable obtenida de PHP en JS
      $saludo.textContent = '<?= $saludo ?>';

      // Mostrando en consola el arreglo obtenido de PHP en JS
      let personas = '<?= json_encode($personas) ?>'; // [{"id":0,"username":"Joel"},{"id":1,"username":"Julieta"},{"id":2,"username":"Pepe"}]
      let personasJson = JSON.parse(personas);
      console.log( personasJson ); // (3) [{…}, {…}, {…}]

      // Recorriendo el arreglo obtenido para mostrar los nombres
      personasJson.forEach((el) =>{
        console.log(el.username);
      });
      /*
        Joel
        Julieta
        Pepe
      */
    //  Nota*: Se debe tener cuidado de obtener datos de PHP desde Js ya que esta información se puede leer y editar desde el navegador

    </script>
</body>
</html>
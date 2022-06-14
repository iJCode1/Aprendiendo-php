<?php
// Obteniendo la información mandada
$name = (isset($_POST['name'])) ? $_POST['name']: 'Sin nombre';

echo("<b>El nombre es: </b>");
echo($name);


echo("<br><b>Los datos de la imágen son:</b>");
echo("<pre>");

var_dump($_FILES);

echo("</pre>");


// Obteniendo la imagen de la carpeta temporal y guardandola en una carpeta dentro del proyecto
$imageTemporal = $_FILES['image']['tmp_name'];
$baseName = $_FILES['image']['name'];
$path = "./images/$baseName";

// Se comprueba, si no existe la imagen en la ruta, se mueve la imagen de la carpeta temporal a la carpeta 'images' dentro del proyecto
if(!(file_exists($path))){
  move_uploaded_file($imageTemporal, $path);
}
?>

<!-- Mostrar la imagen -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iJCode - Imagen guardada</title>
</head>
<body>
  <h1>La imágen guardada es</h1>
  <img src="<?= $path ?>" alt="<?= $basename ?>" width="300"/>
</body>
</html>
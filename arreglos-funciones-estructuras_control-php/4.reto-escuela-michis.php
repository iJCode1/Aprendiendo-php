<?php
/*
  Reto: Escuela de michis
  - Crear un arreglo 3 gatos
  - Cada gato debe tener: Nombre, ocupación, color y un sub-arreglo de 'comidas'
  - El sub-arreglo de 'comidas' debe estar clasificado por comidas que le gustan y comidas que no le gustan
*/

// Creación del arreglo
$michis = [
  'gato1' => [
    'nombre' => 'Pumini',
    'ocupacion' => 'Contador',
    'color' => 'Oro',
    'comidas' => [
      'comidasQueLeGustan' => 'Atun, Hamburguesas',
      'comidasQueNoLeGustan' => 'Ensalada, Sopa',
    ]
  ],
  'gato2' => [
    'nombre' => 'Gatuno',
    'ocupacion' => 'Programador',
    'color' => 'Amarillo',
    'comidas' => [
      'comidasQueLeGustan' => 'Tacos, Enchiladas',
      'comidasQueNoLeGustan' => 'Hamburguesas, Chilaquiles',
    ]
  ],
  'gato3' => [
    'nombre' => 'Panfilo',
    'ocupacion' => 'Deportista',
    'color' => 'Gris',
    'comidas' => [
      'comidasQueLeGustan' => 'Pollo en salsa verde, Chicarron enchilado',
      'comidasQueNoLeGustan' => 'Mole rojo, Elotes',
    ]
  ]
];


// Imprimiendo los datos de los michis
$gatoActual = $michis['gato1'];
echo("El nombre del Gato1 es: {$gatoActual['nombre']}, su ocupación es: {$gatoActual['ocupacion']}, su color es: {$gatoActual['color']}, las comidas que le gustan son: {$gatoActual['comidas']['comidasQueLeGustan']} y las comidas que no le gustan son: {$gatoActual['comidas']['comidasQueNoLeGustan']}\n");
// El nombre del Gato1 es: Pumini, su ocupación es: Contador, su color es: Oro, las comidas que le gustan son: Atun, Hamburguesas y las comidas que no le gustan son: Ensalada, Sopa

$gatoActual = $michis['gato2'];
echo "El nombre del Gato2 es: {$gatoActual['nombre']}, su ocupación es: {$gatoActual['ocupacion']}, su color es: {$gatoActual['color']}, las comidas que le gustan son: {$gatoActual['comidas']['comidasQueLeGustan']} y las comidas que no le gustan son: {$gatoActual['comidas']['comidasQueNoLeGustan']}\n";
// El nombre del Gato2 es: Gatuno, su ocupación es: Programador, su color es: Amarillo, las comidas que le gustan son: Tacos, Enchiladas y las comidas que no le gustan son: Hamburguesas, Chilaquiles

$gatoActual = $michis['gato3'];
echo "El nombre del Gato3 es: {$gatoActual['nombre']}, su ocupación es: {$gatoActual['ocupacion']}, su color es: {$gatoActual['color']}, las comidas que le gustan son: {$gatoActual['comidas']['comidasQueLeGustan']} y las comidas que no le gustan son: {$gatoActual['comidas']['comidasQueNoLeGustan']}\n";
// El nombre del Gato3 es: Panfilo, su ocupación es: Deportista, su color es: Gris, las comidas que le gustan son: Pollo en salsa verde, Chicarron enchilado y las comidas que no le gustan son: Mole rojo, Elotes

echo(PHP_EOL);
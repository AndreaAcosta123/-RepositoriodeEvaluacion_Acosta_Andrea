<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
$nombres = [
    ['nombre' => 'Juan', 'sueldo' => 3000],
    ['nombre' => 'Felix', 'sueldo' => 4000],
    ['nombre' => 'Brihanna', 'sueldo' => 3000],
    ['nombre' => 'Axel', 'sueldo' => 1000],
    ['nombre' => 'Aaròn', 'sueldo' => 500],
];

// Ordenar el arreglo por sueldo
uasort($nombres, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos originales
echo "Sueldos de empleados: <br>";
foreach ($nombres as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

echo "<p>";

// Agregar 2 empleados más
array_push($nombres, ['nombre' => 'Andy', 'sueldo' => 5000]);
array_push($nombres, ['nombre' => 'Laura', 'sueldo' => 3500]);

// Re-ordenar después de agregar nuevos empleados
uasort($nombres, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos ampliados
echo "Sueldos ampliados: <br>";
foreach ($nombres as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

?>
</body>
</html>
<?php


echo "<h3>Ejercicio 1</h3>";

// Creo un array asociativo y lo muestro usando foreach
$persona = [
    "nombre" => "Ignacio",
    "apellido" => "Breñas",
    "edad" => 20,
    "ciudad" => "Barcelona"
]
;

foreach ($persona as $valor) {
    echo $valor . "<br>";
}

echo "<h3>Ejercicio 2</h3>";
// Recorro el mismo array mostrando la clave y el valor
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";

}

echo "<h3>Ejercicio 3</h3>";
// Modifico la edad del array y vuelvo a mostrar todos los datos
$persona["edad"] = 24;

foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";

}

echo "<h3>Ejercicio 4</h3>";
// Elimino la ciudad del array y muestro el resultado con var_dump
unset($persona["ciudad"]);
var_dump($persona)
;

echo "<h3>Ejercicio 5</h3>";
// Convierto una cadena en array con explode y la ordeno para que se muestre al reves.
$letters = "a,b,c,d,e,f";

$arrayLetters = explode(",", $letters);
rsort($arrayLetters);
print_r($arrayLetters);



echo "<h3>Ejercicio 6</h3>";
// guardo las notas en un array  y las ordeno de mayor a menor

$notas = [
    "Ignacio" => 10,
    "Ian" => 7,
    "Ishak" => 9,
    "Gorka" => 8,
    "Paul" => 4,
    "Elyas" => 1
];

arsort($notas);

foreach ($notas as $nombre => $nota) {
    echo $nombre . ": " . $nota . "<br>";
}

echo "<h3>Ejercicio 7</h3>";
// calculo la media de las notas y muestro los alumnos por encima de la media

$suma = array_sum($notas);
$media = $suma /count($notas);

echo "Media: " . number_format($media, 2) . "<br>";
echo "Alumnos por encima de la media:<br>";

foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo $nombre . "<br>";
    }

}



echo "<h3>Ejercicio 8</h3>";

// Busco la nota más alta y muestro el nombre del mejor alumno
$notaMaxima = max($notas);
$mejorAlumno = array_search($notaMaxima, $notas);

echo "Mejor nota es : " . $notaMaxima;  "<br>";
echo "y el mejor alumno es  " . $mejorAlumno . "<br>";

?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica Arrays PHP</title>
</head>
<body>
</body>

</html>

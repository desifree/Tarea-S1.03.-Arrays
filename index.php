<?php
//Ejercicio 1
$array1 = [600, 250, 345, 480, 509];

foreach($array1 as $n){ //muestra los números del array uno por uno
    echo $n ."<br>";
}

// Ejercicio 2
$array2 = [100, 200, 300, 400, 500, 600];

echo "Tamaño inicial del array: ".count($array2)."<br>";

echo "Eliminamos el lugar 4 en el arraay: <br>";
unset($array2[4]); // Elimina un elemento del array: el '500'
var_dump($array2);

$array2 = array_values($array2);

echo "Tamaño final del Array: ".count($array2)."<br>";
echo "Contenido del Array: <br>";

foreach ($array2 as $Valor) {
    echo $Valor."<br>";

}

// Ejercicio 3:
$array3 = ["hola", "php", "html", "hospital", "hotel", "huskie"];

function todasContienen($palabras, $caracter) {
    foreach($palabras as $palabra) {
        if (strpos(strtolower($palabra), strtolower($caracter)) === false ) {
            return false;

        }
    }
    return true; 
}

 echo todasContienen($array3, "h") ? "true" : "false";
echo "<br>";
echo todasContienen($array3, "l") ? "true" : "false";


//ejercicio 4
$datosPersonales = [
    "nombre" => "Carol Desireé",
    "edad" => 33,
    "email" => "desireecarol@gmail.com",
    "comida_favorita"=> "Pozole"];

foreach( $datosPersonales as $clave => $valor ) {
echo $clave.": " . $valor . "<br>";

}

?>
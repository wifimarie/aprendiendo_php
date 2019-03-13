<?php

//crear arrays usando la palabra array

//$frutas = array("mango", "fresa");
//echo $frutas[1];
echo "<h3>Los d&iacute;as de la semana</h3>";
echo"<hr>";
$diaSemana = array("Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "Sabado", "Domingo"); 
echo $diaSemana[0];
echo"<br>";
echo $diaSemana[1];echo"<br>";
echo $diaSemana[2];echo"<br>";
echo $diaSemana[3];echo"<br>";
echo $diaSemana[4];echo"<br>";
echo $diaSemana[5];echo"<br>";
echo $diaSemana[6];echo"<br>";


// array cn los meses del año
echo "<h3>Los meses del a&ntilde;o son:</h3>";
echo"<hr>";
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; 
echo $meses[0] . "<br>";
echo $meses[1] . "<br>";
echo $meses[2] . "<br>";
echo $meses[3] . "<br>";
echo $meses[4] . "<br>";
echo $meses[5] . "<br>";
echo $meses[6] . "<br>";
echo $meses[7] . "<br>";
echo $meses[8] . "<br>";
echo $meses[9] . "<br>";
echo $meses[10] . "<br>";
echo $meses[11] . "<br>";

//Recorrer el array de meses

echo"<h1>Meses</h1>";
foreach ($meses as $valor) {
    echo $valor . "<br>";
}
echo $meses;

//////

for($indice = 0; $indice <= 11; $indice++) // se declaro la variable indice para mostrar las posiciones.
{
    echo $meses[$indice] . "<br>";
}

// Array que almacene nformacion de una persona

$datos = ["Marie", 18, "Santiago", false];
// muestra el codigo
echo "<pre>";
var_export($datos);
echo"</pre>";
//
echo "<h>Mis datos son: </h2>";
echo "<ul>";
echo "<li>Nombre: {$datos[0]}</li>";
echo "<li>Edad: {$datos[1]}</li>";
echo "<li>Ciudad: {$datos[2]}</li>";
echo "<li>Posee carro: {$datos[3]}</li>";
echo "</ul>";
//utilizando los arrays asociativos 
$datos = [ 
"nombre" => 'Marie',
"edad" => 18,
"ciudad" => 'Santiago',
"posee_carro" => false];

// probando con el ciclo foreach
echo "<hr>";
foreach ($datos as $valor) {
    echo $valor . "<br>";
}
//mostrar por medio de echo sin ciclos
echo "<hr>";
echo $datos["nombre"] . "<br>";
echo $datos["edad"]. "<br>";
echo $datos["ciudad"]. "<br>";
echo $datos["posee_carro"]. "<br>";

//////////////////////////para mostrar el codigo 
echo "<pre>";
var_export($datos);
echo "</pre>";

// array multidimensional
$datos['colores'] = array('naranja', 'azul', 'negro'); //en el mismo array datos podemos crear otro indice ej. 'colores' ♥

echo "<p>Tus colores favoritos son: </p>";
echo $datos['colores'][0] . "<br>";
echo $datos['colores'][1] . "<br>";
echo $datos['colores'][2] . "<br>";

$datos['paises'] = array('corea_del_sur', 'mexico', 'rusia', 'australia');
echo "<p>Tus paises favoritos son: </p>";
echo $datos['paises'][0] . "<br>";
echo $datos['paises'][1] . "<br>";
echo $datos['paises'][2] . "<br>";


// ceando un array de usuarios

$usuario1 = [ 
    "id" => '1',
    "nombre" => 'marie',
    "correo" => 'marie@hotmail.com',
    "username" => 'aticboy',
    "password" => '123456'];

    $usuario2 = [ 
        "id" => '2',
        "nombre" => 'mario',
        "correo" => 'mario@correo.com',
        "username" => 'chankletita',
        "password" => '123456'];

        $usuario3 = [ 
            "id" => '3',
            "nombre" => 'meri',
            "correo" => 'meri@meri.com',
            "username" => 'merilovesyou',
            "password" => '123456'];
   
?>



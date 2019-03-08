<?php


//variables
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$ciudad = $_GET["ciudad"];
$color = $_GET["color"];


echo "<style> 
body { 
    background-color: $color;
    font-size: {$edad}px;
}

</style>";
//echoes

//echo ("Bienvenido ingeniero de mis suenos, tienes ".$edad ." y vives en ".$ciudad); // primera forma. 0 (en comillas y concatenando con .)
echo ("Bienvenido $nombre $apellido, tienes $edad a&ntilde;os y vives en $ciudad"); // segunda forma. 0.1(con comillas sin concatenar)
echo "<p> Bienvenido $nombre $apellido, tienes $edad y vives en $ciudad.</p>"; //tercera forma. 1.(con comillas y etiqueta parrafo)
//echo '<p> Bienvenido $nombre $apellido, tienes $edad y vives en $ciudad.</p>'; //cuarta forma. 1.2(con comillas simples. )
//echo "<p> Bienvenido {$nombre} {$apellido}, tienes {$edad} años y vives en {$ciudad}.</p>"; // quinta forma 1.3 (encerradas en llaves.)

?>
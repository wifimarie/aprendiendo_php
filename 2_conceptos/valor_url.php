<?php
/* made by marie♥
be original or die <3
2019,03, 08 #endregion
*/

// esto es var_dump
$nombre = $_GET["nombre"];

echo $nombre. "<br><br>";

var_dump($nombre);

echo "<br><br><hr>"; //esto es un salto de línea.
$edad = 17;
echo "Tu edad es: ".$edad;
echo $_GET["edad"];

var_dump($edad);

echo "<br><br><hr>"; // esto es un salto de línea.

$posee_casa = true;

echo "Posee casa: ".$posee_casa; // para concatenar se utilzan puntos .
echo "<br><br>"; 
var_dump($posee_casa);

echo "<hr>";

// esto es $_GET

echo "El valor del pais es: "; 
echo $_GET ["pais"]; //cuando se cambia en la url a pais=el pais de tu preferencia, obtienes ese pais que estableciste.

echo "<pre>"; // esto muestra el codigo en pantalla tal y como es.

/*
array(1) {
  ["pais"]=>
  string(13) "corea del sur" el 13 indica la longitud o cantidad de caracteres icnluyendo lso espacios.
}
*/
var_dump($_GET);

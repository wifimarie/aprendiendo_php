<?php //esto se hace una sola vez
$host = "127.0.0.1";
$dbname = "marie_database";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//cambiar los valores para producción
if ($_SERVER["SERVER_NAME"] == 'daydreammarie.000webhostapp.com')
{
    $host = "localhost";
    $dbname = "id8907611_proyecto_db";
    $user = "id8907611_daydreammarie";
    $password = "elviragomez02";
}
    // 1. Conectarnos a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);

 
?>
<?php
$titulo = "Kulturizate | Iniciar Sesion"; 


// 

require 'app/conexion.php'; //archivito con la conexion del bd

if (isset($_POST['inputEmail'])) {
    $datosUsuario = array(
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );
    // Preparar el query
    $sql = 'SELECT * FROM usuarios WHERE username = :username AND password = :password ';
    $comando = $conexion->prepare($sql);
    // $comando->debugDumpParams();
    // Ejecutar el query
    $comando->execute($datosUsuario);
    // Traer los datos
    $resultado = $comando->fetchAll();
    $cantidadRegistros = count($resultado);
    if ($cantidadRegistros > 0) {
        die('Bienvenido');
    } else {
        die('Usuario no existe');
    }
}


require "app/vistas/login.vistas.php";
?>  


    

    

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
    // Ejecutar el query
    $comando->execute($datosUsuario);
    // Traer los datos
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $cantidadRegistros = count($resultado);
    if ($cantidadRegistros > 0) {
        // die('Bienvenido');
        $_SESSION['usuario_id'] = $resultado[0]['id'];
        $_SESSION['usuario_nombre'] = $resultado[0]['nombre'];
        $_SESSION['usuario_username'] = $resultado[0]['username'];
        header("Location: principal.php");
    } else {
        die('Usuario no existe');
    }
}


require "app/vistas/login.vistas.php";
?>  


    

    

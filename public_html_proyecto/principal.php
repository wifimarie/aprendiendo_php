<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 15/3/19
 * Time: 10:22 AM
 */
session_start();
require "app/conexion.php";
require "app/mis_funciones.php";
// Si el usuario no está logeado
if (isset($_SESSION['usuario_id']) == false) {
    // REDIRECCIONAR al login
    header("Location: login.php");
}

$listadopublicaciones = selectPublicacionesDelUsuario($conexion, $_SESSION['usuario_id']);
$titulo = "Kulturizate | Página principal";
// Incluir la vista
require "app/vistas/principal.vistas.php";
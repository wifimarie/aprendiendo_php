<?php
require "app/mis_funciones.php";
session_start();
// Si el usuario está logeado no puede ver esta página
if (isset($_SESSION['usuario_id']) == true) {
    // REDIRECCIONAR a la pagina principal
    header("Location: principal.php");
}
$titulo = "Bienvenidos | Kulturizate";
require vista("index");
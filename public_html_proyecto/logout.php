<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 15/3/19
 * Time: 10:21 AM
 */
session_start();
// Limpiar el array $_SESSION;
$_SESSION = array();
session_destroy();
header("Location: index.php");
<?php
$titulo = "Kulturizate | Registrate";
require "app/vistas/registro.vistas.php";
include 'config.php';

if (isset($_POST["u_btn"])) {
$u_name = $_POST["u_name"];
$u_email = $_POST["u_email"]; 
$u_pass = $_POST["u_pass"];
}

if (empty($u_name) ||empty($u_email) ||empty($u_pass) ) {
    echo "Por favor llena todos los campos.";
} 
else {
    $insert = mysqli_query($conn, "INSERT INTO  `marie_database`.`registroweb` (`u_name` , `u_email` , `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");
        echo ("Realizado satisfactoriamente!");
}
?>
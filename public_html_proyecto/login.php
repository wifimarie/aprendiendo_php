<?php
var_dump($_GET); 
echo "<br>";
var_dump($_POST); 
require "app/vistas/login.vistas.php";
?>

<?php
include 'config.php';

if (isset($_POST["u_btn"])) {
    $u_email = $_POST['u_email'];
    $u_pass = $_POST['u_pass'];
    if (empty($u_email) || empty($u_pass)) {
    echo "Por favor completa los campos";
    } else {
        $selectfdb = mysqli_query($conn, "SELECT * FROM `registroweb` WHERE u_email = '' AND u_pass = '' ");
        $row = mysqli_fetch_array($selectfdb);

        if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {
            echo "Bienvenido  ".$row["u_name"]." a tu cuenta";
        } else {
            echo "Contraseña o nombre de usuario incorrecto";
        }
    }
}
?>  


    

    

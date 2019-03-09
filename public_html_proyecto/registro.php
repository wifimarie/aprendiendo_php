
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro </title>
</head>
<body>
<?php
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

<form  action="registro.php" method="post">
    <label>Nombre</label>
    <input type="text" name="u_name" value=""><br />
    <label>Correo electr&oacute;nico</label>
    <input type="email" name="u_email" value=""><br />
    <label>Contrase&ntilde;a</label>
    <input type="password" name="u_pass" value=""><br />
    <input type="submit" name="u_btn" value="sign up"><br />
    <a href="login.php">Iniciar sesi&oacute;n</a>
</form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro </title>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("https://images.unsplash.com/photo-1525762867061-21c9fb70b15a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80");
}

.box {
    width: 600px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    text-align: left;

}
.box h1 {
    color: white;
    text-decoration: uppercase;
    font-weight: 500;
}


</style>
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

<form  class="box" action="registro.php" method="post">
    <label>Nombre</label>
    <input type="text" class="form-control" name="u_name" value=""><br />
    <label>Correo electr&oacute;nico</label>
    <input type="email" class="form-control" name="u_email" value=""><br />
    <label>Contrase&ntilde;a</label>
    <input type="password" class="form-control" name="u_pass" value=""><br />
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto los términos de uso.</label>
  </div>
    <input type="submit" name="u_btn" class="btn btn-outline-dark" value="Registrarme"><br />
    <center><span>¿Ya tienes tu cuenta? </span><a href="login.php">Inicia sesi&oacute;n.</a></center>
</form>
</body>
</html>

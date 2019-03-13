<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro </title>
    <style>

</style>
</head>
<body class="text-center">

<div class="container">
    <div class="row">
        <col-md-4>
<h3><i class="fab fa-kickstarter-k sexy"></i>ulturizate</h3>
<form  class="box" action="registro.php" method="post">
    <h1>Regístrate</h1>  
    <input type="text" class="form-control mb-3" autofocus name="u_name" value="Usuario" required> <!--mb significa margin bottom y el 2 ps la medida -->
    <input type="text" class="form-control mb-3" name="u_username" value="Nombre de Usuario" required autocapitalize>   
    <input type="email" class="form-control mb-3" name="u_email" value="Correo" required> <!--mb significa margin bottom y el 2 ps la medida -->
    <input type="password" class="form-control mb-3" name="u_pass" value="Contraseña" required> <!--mb significa margin bottom y el 2 ps la medida -->
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Acepto los términos de uso.</label>
  </div>
    <input type="submit" name="u_btn" class="btn btn-outline-dark btn-block" value="Registrarme"><br />
    <center><span>¿Ya tienes tu cuenta? </span><a href="login.php">Inicia sesi&oacute;n.</a></center>
 </col-md-4>

 <div class="col-md4"> <!-- esto es temporal -->
 <h5>Usuarios registrados: </h5>
 <?php foreach($usuarios as $usuario) :?>
 <ul>
 <li><?= $usuario['nombre']?><b>@<?= $usuario['username'] ?></b></li>
 <li><?= $usuario['nombre']?><b>@<?= $usuario['username'] ?></b></li>
 <li><?= $usuario['nombre']?><b>@<?= $usuario['username'] ?></b></li>

 </ul>
<?php endforeach; ?>
 </div>
    </div>
    </div>
</form>
</body>
</html>
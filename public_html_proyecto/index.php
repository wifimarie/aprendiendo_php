<?php
$saludo = "Bienvenidos a mi sitio web kulturizate";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0FB2EB";
    <title><?php echo $saludo; ?></title>
</head>
<body>
    <div class="container">
    <h1> <?= $saludo; ?></h1> <!-- < ?= indica que es un echo de php -->
     <a href="login.php">Iniciar sesion uwu </a>
</div>
</body>
</html>
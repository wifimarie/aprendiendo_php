<?php
$saludo = "Bienvenidos a mi sitio web daydreammarie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $saludo; ?></title>
</head>
<body>
    <div class="container">
    <h1> <?= $saludo; ?></h1> <!-- < ?= inidica que es un echo de php -->
</div>
</body>
</html>
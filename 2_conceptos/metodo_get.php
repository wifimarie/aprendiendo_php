<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendiendo PHP | método GET</title>
    <style>
        input {  /* css de los campos del form*/
        width: 100%;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
    } 
        input:focus {  /* css focus de los campos del form */
        border: 3px solid #555;
    }

    button { /* css del boton */
        background-color: lightblue;
        border: none;
        padding: 16px 32px;
        text-decoration. none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <!-- la referencia en *ACTION* es lo mismo que una referencia deenlace-->
    <a href="saludo.php?nombre=Maria&apellido=Gomez&edad=18&ciudad=Santiago">Saludar a Mar&iacute;a</a>
<br>
<br>
<br>
    <!-- FORMULARIO -->
<form action="saludo.php"> <!-- action permite hacer referencia a la pagina especificada -->
   <!--PRIMER campo-->
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
</div>
<!--SEGUNDO campo-->
<div>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">
</div>
<!--TERCER campo-->
<div> 
    <label for="edad">Edad</label>
    <input type="text" name="edad">
</div>
<!--CUARTO campo-->
<div> 
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad">
</div>

<div> 
    <label for="color">Color</label>
    <input type="text" name="color">
</div>
<!--BOTON GUARDAR DATOS-->
<div> 
    <button>Enviar datos</button>
</div>

</form>
<!-- MOSTRAR CODIGO -->
<pre>
<?php
var_dump($_GET);?>
</pre>



</body>
</html>
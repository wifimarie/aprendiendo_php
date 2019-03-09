<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login_style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url("https://asiaexchangeorg.r.worldssl.net//wp-content/uploads/2018/05/ciaran-o-brien-752246-unsplash.jpg");
}

.box {
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;

}
.box h1 {
    color: white;
    text-decoration: uppercase;
    font-weight: 500;
}

.box input[type = "text"],.box input[type = "password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #658ca7;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.30s;
}

.box input[type = "text"]:focus,.box input[type = "password"]:focus {
    width: 280px;
    border-color: #a59bc4;

}
.box input[type = "submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #658ca7;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.30s;
    cursor: pointer;
}
.box input[type = "submit"]:hover {
    background: #523f8a;
}

a {
    color: lightblue;

}

a:hover {
    color: white;
}
        </style>
</head>
<body>

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

<form class="box" action="login.php" method="post">
<h1> Iniciar sesión </h1>
<input type="text" name="u_email" placeholder="correo"> 
<input type="password" name="u_pass" placeholder="contraseña"> 
<input type="submit" name="u_btn" placeholder="sign in"> 
<a href="registro.php">Registrarse</a>
    </form>
</body>
</html>

    

    

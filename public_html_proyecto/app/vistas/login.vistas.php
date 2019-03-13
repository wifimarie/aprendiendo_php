<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia Sesión | Kulturizate</title>
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

<div class="container">
    <!-- fila y columna 4 -->
<div class="row">
    <div class="col-md-4">

  
<!-- form-->
<form class="box" action="login.php" method="post">
<h1> Iniciar sesión </h1>
<input type="text" autofocus name="u_email" placeholder="correo" required> 
<input type="password"  name="u_pass" placeholder="contraseña" required> 
<input type="submit" name="u_btn" placeholder="sign in"> 
<a href="registro.php">Registrarse</a>
    </form> 
 </div>
</div>
</div> <!-- fin del container-->
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

    
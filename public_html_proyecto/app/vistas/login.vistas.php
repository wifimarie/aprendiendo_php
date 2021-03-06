<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Incluir los estilos -->
<link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="shortcut icon" href="recursos/img/icon.ico" type="image/ico">   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="theme-color" content="#fc5864";> <!-- color del meta en google chrome--> 
    <title> <?php echo $titulo; ?></title>
<style>
     body {
            margin: 0;
            padding: 0;
            background-image: url("recursos/img/love.jpg");
            height: 100vh;
            background-size: cover;
        }
        .container {
           justify-content: center; 
        }
        
#login {
    width: 450px;
    padding: 60px;
    align-content: center;
    justify-content: center;
    background: #f9fafc;
    text-align: center;
    border-radius: 10px 10px 10px 10px;
}

a {
    color: #313131;
    transition: ease all 0.3s;
}
a:hover {
    color: #39a0bd;
    transition: ease all 0.3s;
}

.fondo-f {
    opacity: 5px;
    background: #313131;
    padding: 5px;
    width: 100%;
}
    </style>
</head>
<body>

<div class="container">
    <!-- fila y columna 4 -->
<div class="row">
    <div class="col-md-4">

    
<!-- form-->
<form id="login" class="box" action="login.php" method="post">

<h1><a href="index.php" class="text-kulturizate text-decoration-none "><i class="fab fa-kickstarter-k pl-0"></i><b>ulturizate</b></a></h1>
                    <hr>
                    <h4 class="mb-4">Inicia sesión</h4>
<input class="form-control mb-3" type="text" name="inputUser" placeholder="usuario" required autofocus> 
<input class="form-control mb-3" type="password" name="inputPassword" placeholder="contraseña" required> 
  <button class="btn btn-primary btn-block mb-3" type="submit">Iniciar sesión</button>

<!-- Error para avisarle al usuario -->
<em class="text-danger">
<?php 
if (isset($mensajesError['usuario_incorrecto'])) {
    echo $mensajesError['usuario_incorrecto'];
    }
?>
</em>
<br><span>¿No tienes tu cuenta? </span><a class="btn btn-dark" href="registro.php">Regístrate</a>
    </form> 
 </div>
</div>
</div> <!-- fin del container-->
<div class="row">
        <div class="col-md-12 mt-3 text-center fondo-f">
            <span style="color: white;"> <b>&copy;marie 2019</b></span>
        </div>
    </div>
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

    
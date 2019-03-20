<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="shortcut icon" href="recursos/img/icon.ico" type="image/ico">   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="theme-color" content="#031724";> <!-- color del meta en google chrome--> 
    <title> <?php echo $titulo; ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("recursos/img/cyberpunk.jpg");
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
#usuarios { /* fondo o bg de usuarios registrados*/
    width: 250px;
    padding: 20px;
    align-content: center;
    justify-content: center;
    background: #f9fafc;
    text-align: justify;
    border-radius: 10px 1px 10px 1px;
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
    opacity: 0.8px;
    background: #313131;
    padding: 5px;
    width: 100%;
}
        </style>
</head>
<body class="align-items-center">

<div class="container"> 
        <!-- .row>.col-md-4 -->
        <div class="row">
            <div class="col-md-6">

                <!-- form -->
                <form id="login" action="registro.php" method="post">
                    <h1><a href="index.php" class="text-kulturizate text-decoration-none "><i class="fab fa-kickstarter-k pl-0"></i><b>ulturizate</b></a></h1>
                    <hr>
                    <h4 class="mb-4">Regístrate</h4>
                    <input class="form-control mb-3" type="text" name="inputName" placeholder="Nombre" required
                        autofocus>
                    <input class="form-control mb-3" type="email" name="inputEmail" placeholder="Email" required>
                    <input class="form-control mb-3" type="text" name="inputUser" placeholder="Usuario" required
                        autocapitalize="off">
                    <input class="form-control mb-3" type="password" name="inputPassword" placeholder="Contraseña"
                        required>
                    <button class="btn btn-dark btn-block mb-3" type="submit">Registrarse</button>
                    <div class="text-danger">
                        <?php
                        if (isset($mensaje)) {
                            echo $mensaje;
                        }
                        ?>
                    </div>
                    <hr>
                    <div>¿Tienes una cuenta? <a href="login.php">Inicia sesión</a></div>

                </form>

</div>

 <!-- Mostrar usuarios registrados -->
 <div class="col-md-6">
     <div id="usuarios" class="ml-1">
                <h5><b>Usuarios registrados</b></h5>
                <ul type="square">
                    <?php
                        foreach($usuarios as $usuario) {
                            echo "<li> {$usuario['nombre']} <b>@{$usuario['username']}</b> </li>";
                        }
                    ?>
                </ul>
    </div>
    </div>
    </div>
</form>

<div class="row">
        <div class="col-md-12 mt-3 text-center fondo-f">
            <span style="color: white;"> <b>&copy;marie 2019</b></span>
        </div>
    </div>
</div>

    <!-- Incluir JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>
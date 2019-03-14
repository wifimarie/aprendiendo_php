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
    <meta name="theme-color" content="#0FB2EB";> <!-- color del meta en google chrome--> 
    <title> <?php echo $titulo; ?></title>
</head>
<body class="bg-light">
    <div class="container">
        <section id="bienvenido">
            <h1>Bienvenidos a <span class="d-inline-block text-ulturizate"><i class="fab fa-kickstarter-k"></i></i> ulturizate</span></h1>
            <p class="lead">Vamo' a kulturizarnos.</p>
            <br>
            <div>
                <a class="btn btn-primary" href="login.php">Iniciar sesión</a>
                <span class="m-1">o</span>
                <a class="text-link" href="registro.php">Registrarse</a>
            </div>
        </section>
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
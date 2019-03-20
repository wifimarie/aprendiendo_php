<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="shortcut icon" href="recursos/img/icon.ico" type="image/ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <meta name="theme-color" content="#222221" ;> <!-- color del meta en google chrome-->
    <title>Bandeja de entrada | kulturizate</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-primary" href="#"><i class="fab fa-xing-square"></i> XtudioPlay</a>

        <form action="" class="form-inline">
            <input type="search" class="form-control form-control-sm mr-1" placeholder="Buscar...">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="btnBuscar">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <a href="logout.php" class="text-danger"></i> Cerrar sesión</a>

    </div>
</nav>

<!--  Menu  -->
<div class="shadow-sm">
    <div class="container">
        <nav class="nav mb-4 pt-1 pb-1">
            <a class="nav-link active" href="#">Inicio</a>
            <a class="nav-link" href="#">Mis publicaciones
                <span class="badge badge-light"><?php echo count($publicaciones); ?></span></a>
        </nav>
    </div>
</div>

<!--  Saludo  -->
<div class="jumbotron">
    <div class="container">
        <h2 class="font-weight-normal">Bienvenido <?php echo $_SESSION['usuario_nombre']; ?> a tu página principal.</h2>
        <p class="lead">Empieza a disfrutar de tu espacio.</p>
        <a href='nueva_publicacion.php' class='btn btn-primary'><i class='fas fa-plus mr-1'></i> Crear publicación</a>
    </div>
</div>

<!--  Contenido principal  -->
<main class="container">
    <div class="row">
        <?php
        // Si no hay publicaciones, mostrar el siguiente mensaje
        /*if (isset($publicaciones) && count($publicaciones) < 1) {
            echo "<div class='bg-light border rounded text-center p-5'>
                    <img src='recursos/img/post.svg' alt='post' style='width: 150px;'>
                    <h4 class='mt-3 mb-2'>Hey {$_SESSION['usuario_nombre']} al parecer no tienes publicaciones.</h4>
                    <p class='lead'>¿Qué te parece si creas tu primera publicación?</p>
                    <a href='nueva_publicacion.php' class='btn btn-outline-primary'><i class='fas fa-plus-circle mr-1'></i> Crear publicación</a>
                </div>";
        }*/
        ?>

        <div class="col-md-12">
            <h2 class="font-weight-normal">Tus publicaciones recientes
                <small class="badge badge-secondary font-weight-light"><?php echo count($publicaciones); ?></small>
            </h2>
            <hr>
        </div>

        <?php
        // Mostrar las publicaciones (si las hay)
        if (count($publicaciones) > 0) {
            foreach ($publicaciones as $publicacion) {
                echo "<div class='col-md-4 mb-3'>
                            <div class='card'>
                                <div class='card-body'>
                                <h5 class='card-title'>#{$publicacion['id']} {$publicacion['titulo']}</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>{$publicacion['id_categoria']}</h6>
                                <p class='card-text'>{$publicacion['descripcion']}</p>
                                </div>
                            </div>
                        </div>";
            }
        }
        ?>
    </div>

</main>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

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
    <title>
        <?php $titulo ?>
    </title>
    <style>
    body {
        background-color: #DDF0FC;
    }
    a {
        color: white;
        transition: all ease 0.30s;
    }
    a:hover {
        color: grey;
        transition: all ease 0.30s;
    }
    .edit-btn {
        color: lightblue;
    }

    .delete-btn {
        color: #D32424;
    }
    .btn-back {
        font-size: 12px;
    }
    
.titulo {
    
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            font-weight: 700;
        }

}
    </style>
</head>

<body>
<nav class="navbar navbar-light bg-light">

        <a class="navbar-brand text-primary titulo" href="index.php"><i class="fab fa-kickstarter-k pl-0"></i>ulturizate</a>

        <form action="" class="form-inline">
            <input type="search" class="form-control form-control-sm mr-1" placeholder="Buscar...">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="btnBuscar">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <a href="logout.php" class="text-danger"></i> Cerrar sesión</a>


</nav>
<!-- aqui termina el navbar -->

<div class="container">

    <div class="row">
        <div class="col-md-4">

<form action="" method="post" enctype="multipart/form-data" class="mt-5">
        <h3>Crear categoría</h3>
        <hr>
        <input class="form-control" type="hidden" name="inputTituloCat" placeholder="nombre" value="<?php echo $_GET['id']; ?>" required>
               <input class="form-control" type="text" name="inputTituloCat" placeholder="nombre" required>
        <button class="btn btn-dark mt-2" name="btnCrearCategoria">Guardar</button>
    </form>

    <!-- BOTON PARA VOLVER A LA PAGINA ANTERIOR -->
        <button class="btn btn-dark mt-5" name="volver"><i class="fas fa-arrow-left p-2 btn-back"></i><a href="principal.php">Volver</a></button>

</div>
<div class="col-md-7 mt-5">
    
 

<table class='table table-hover table-dark'>
  <thead>
    <tr>
      <th scope='col'>Id</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($categorias as $categoria) {
       echo " <tr>
      <th> {$categoria['id']}</th>
      <td>{$categoria['nombre']}</td>
       <td><i class='fas fa-minus-circle p-2 delete-btn'></i><a href=\"?accion=borrar&id=".$categoria["id"]."\">Borrar</a></td>
       <td><i class='fas fa-pen p-2 edit-btn'></i><a href=\"?accion=actualizar&id=".$categoria["id"]."\">Actualizar</a></td>
    </tr>"; }
    
    ?>
  </tbody>
</table>
</div>
    </div>
</div>

} 

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
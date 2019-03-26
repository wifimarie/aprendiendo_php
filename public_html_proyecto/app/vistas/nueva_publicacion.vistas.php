
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
        <a class="navbar-brand text-primary" href="#"><i class="fab fa-kickstarter-k pl-0"></i>ulturizate</a>

        <form action="" class="form-inline">
            <input type="search" class="form-control form-control-sm mr-1" placeholder="Buscar...">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="btnBuscar">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <a href="logout.php" class="text-danger"></i> Cerrar sesión</a>

    </div>
</nav>
<!-- aqui termina el navbar -->

<div class="row">

    <form action="" method="post" class="col-md-3 mt-5" enctype="multipart/form-data">
        <h3>Crear publicacion</h3>
        <hr>
        <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        <select class="form-control" name="selectCategoria" required>
        <?php
        foreach($categorias as $categoria) {
            echo "<option value='{$categoria['id']}'>{$categoria['nombre']}</option>";
        }
        ?>

        </select>
        <input class="form-control" type="file" name="inputArchivo">
        <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
    </form>
    </div>
<!-- BOTON PARA VOLVER A LA PAGINA ANTERIOR -->
        <button class="btn btn-outline-dark mt-5 mb-5" name="volver"><i class="fas fa-arrow-left p-2 btn-back"></i><a href="principal.php">Volver</a></button>
<br>
    <!-- Mostrar los datos de la base de datos -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
      <th scope="col">Creado_por</th>
    </tr>
  </thead>
  <tbody>
  <?php
    // Recorrer todas las publicaciones
    foreach($listadoPublicaciones as $publicacion) {
        echo "<tr>
                <th>{$publicacion['id']}</th>
                <td>{$publicacion['titulo']}</td>
                <td>{$publicacion['descripcion']}</td>
                <td>{$publicacion['nombre']}</td>
                <td>{$publicacion['username']}</td>              
            </tr>";
    }
  ?>


  </tbody>
</table>
</body>

</html>

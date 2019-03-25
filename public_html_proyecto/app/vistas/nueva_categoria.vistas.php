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
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data">
        <h3>Crear categoría</h3>
        <hr>
        <input class="form-control" type="text" name="inputTituloCat" placeholder="nombre" required>
        <button class="btn btn-dark mt-2" name="btnCrearCategoria">Guardar</button>
    </form>
</div>
<div class="col-md-7 mt-5">
    
 

<table class='table table-hover table-dark'>
  <thead>
    <tr>
      <th scope='col'></th>
      <th scope='col'> </th>
      <th scope='col'>Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($categorias as $categoria) {
       echo " <tr>
      <th> {$categoria['id']}</th>
      <td>{$categoria['nombre']}</td>
       <td><i class='fas fa-minus-circle p-2'></i>Borrar</td>
       <td><i class='fas fa-pen p-2'></i>actualizar</td>
    </tr>"; }
    
    ?>
  </tbody>
</table>
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
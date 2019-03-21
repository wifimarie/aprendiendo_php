
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
<div class="row">
    <form action="" method="post" class="col-md-3">
        <h3>Crear publicacion</h3>
        <hr>
        <input class="form-control" type="text" name="inputTitulo" placeholder="Titulo" required>
        <input class="form-control" type="text" name="inputDescripcion" placeholder="Descripcion" required>
        <select class="form-control" name="selectCategoria" required>
            <option>--Selecciona--</option>
            <option value="1">Tecnologia</option>
            <option value="2">Salud</option>
            <option value="3">Ocio</option>
        </select>
        <input class="form-control" type="file" name="inputArchivo">
        <button class="btn btn-primary" name="btnCrearPublicacion">Crear publicacion</button>
    </form>
    </div>

    <!-- Mostrar los datos de la base de datos -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
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
                <td>{$publicacion['id_categoria']}</td>
            </tr>";
    }
  ?>


  </tbody>
</table>
</body>

</html>
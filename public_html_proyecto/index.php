<?php
$saludo = "Bienvenidos a mi sitio web kulturizate";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet"> 
    <meta name="theme-color" content="#0FB2EB";
    <title><?php echo $saludo; ?></title>
    <style>
    .slider {
    background: url("https://asiaexchangeorg.r.worldssl.net//wp-content/uploads/2018/05/ian-valerio-594879-unsplash.jpg");
    height: 50vh;
    background-size: cover; /* esto es para que se adapte al dispositivo */
    background-position: center; /* esto es para posicionarlo centralizadamente */
}

.box {
    width: 500px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
   
}

h1 {
    font-family: 'Contrail One', cursive;
    text-align: center;
}
.about {
    background: url("https://asiaexchangeorg.r.worldssl.net//wp-content/uploads/2018/05/ian-valerio-594879-unsplash.jpg");
    height: -100vh;
    background-size: cover;
    background-position: center;
    text-align: center;
}


    </style>
</head>
<body>

<div class="container-fluid">   

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">KULTURIZATE</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Inicia Sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registrate</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busca algo en particular..." aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</div> <!--aqui termina el container-fluid del navbar-->
<!--fondo de la pagina como es fluid cubre TODA LA PAGINA: slider es el nombre en sí del class-->
<section class="container-fluid slider d-flex justify-content-center align-items-center col-md-12">   
<div class="box">
<h1 class="display-4 text-center text-black">kulturizate</h1>  <!---Titulo con display para usar menos css -->
</div>
</section>
<br>
<br>
<div class="container-fluid">
    
    <div class="col-12 sm-12">
<div class="card-deck">
  <div class="card">
    <img src="recursos/img/korea.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bienvenida a Korea</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, iusto!</p>
      <a class="btn btn-outline-dark" href="#">leer más</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Publicado hace 3 minutos</small>
    </div>
  </div>
  <div class="card">
    <img src="recursos/img/churros.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kulturizate con nosotros</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a class="btn btn-outline-dark" href="#">leer más</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Publicado hace 3 minutos</small>
    </div>
  </div>
  <div class="card">
    <img src="recursos/img/soju.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">¿Kimchi o Tteokbokki?</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <a class="btn btn-outline-dark" href="#">leer más</a>
    </div>
    
    <div class="card-footer">
      <small class="text-muted">Publicado hace 3 minutos</small>
    </div>
  </div>
  <div class="card">
    <img src="recursos/img/love.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pokis y amor...</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <a class="btn btn-outline-dark" href="#">leer más</a>
    </div>
    
    <div class="card-footer">
      <small class="text-muted">Publicado hace 3 minutos</small>
    </div>
</div>
</div> <!-- fin container cards -->


<br>
<br>

<section class="container-fluid d-flex justify-content-center align-items-center col-md-12">   
<div class="about">
 <img src="recursos/img/cyberpunk.jpg" class="rounded-circle" width="150px" height="150px"/> <!---Titulo con display para usar menos css -->
<p> Conoce a Corea del Sur ♥</p>
</div>
</section>
</body>
</html>
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
    <style>
    /* Ocultar el div molesto de 000webhost */
body a[title] {
    display: none;
    
}
.bg {
    background-color: #edb88b;
}
body {
    transition: background ease .3s;
}
.fondo-kiki {
    background: url('https://i.ibb.co/m9w9bLC/logo.png'); /* https://i.ibb.co/m9w9bLC/logo.png | https://i.ibb.co/m9zprRc/parejita.png | https://i.ibb.co/gjVxfSq/parejota.png | https://i.ibb.co/bdsGndw/sexy.png   */
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: right;
}

#bienvenido {
    display: flex;
    /* align-items: center; */
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}
.textito {
    width: 50%;
    padding: 10px;
    margin: 5px;
    text-align: justify;
}
h1 {
    font-family: 'Montserrat', sans-serif;
}

.social-icons {
    font-size: 20px;
}
.social-icons a {
    color: #313131;
    transition: ease all 0.30s;
}
.social-icons a:hover {
    color: #39a0bd;
    transition: ease all 0.30s;
}
.nav-link,.nav-link-active {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
}
.nav-link,.nav-link-active a {
    color: black;
    transition: ease all 0.40s;
}
.nav-link,.nav-link-active a:hover {
    color: #39a0bd;
    transition: ease all 0.40s;
}
    </style>
</head>
<body>
 <div class="bg"></div>
    <div class="container fondo-kiki"> 
        <div class="row">
        <div class="col-md-6">
        <!-- menu link nav1-->
        <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">KULTURIZATE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blog.php">BLOG</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="registro.php">REGISTRO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">VIAJES</a>
  </li>
</ul>
</div>
<!-- menu nav2-->
<div class="col-md-6">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="faq.php">FAQ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">CONTACTO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">ENTRAR</a>
  </li>
</ul>
</div>
  </div>    
        <section id="bienvenido">
            <h1>Bienvenidos a <span style="color: #39a0bd;" class="d-inline-block text-ulturizate"><i class="fab fa-kickstarter-k"></i></i><b>ulturizate</b></span></h1>
            <p class="lead textito">Disfruta de la chercha y posts acerca de la cultura coreana, ¿no tienes idea alguna sobre su origen y/o características?
                necesitas quedarte y pasarte por el blog. ¿No te haz registrado aun? ¿Qué esperas?
            </p>
            <br>
            <div>
                <a class="btn btn-outline-dark mt-1" href="login.php"><i class="fas fa-caret-right p-1"></i>Iniciar sesión</a>
                <span class="m-1">o</span>
                <a class="btn btn-primary mt-1" href="registro.php"><i class="fas fa-sign-in-alt p-1"></i>Registrarse</a>
            </div>
        </section>
    
<!-- barra de social sites-->
    <div class="col-md-4">
    <div class="social-icons">
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-twitter"></i></a>
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-instagram"></i></a>
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-facebook-f"></i></a>
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-youtube"></i></a>
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-linkedin-in"></i></a>
        <a href="" class="social-icon pl-3 mt-3"> <i class="fab fa-google-plus-g"></i></i></a>
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
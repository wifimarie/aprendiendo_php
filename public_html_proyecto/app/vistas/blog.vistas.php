<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="recursos/css/bootstrap.css">
    <link rel="shortcut icon" href="recursos/img/icon.ico" type="image/ico">   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&effect=anaglyph" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="theme-color" content="#222221";> <!-- color del meta en google chrome--> 
    <title> <?php echo $titulo; ?></title>
    <style>
    .slider {
    background: url("https://i.ibb.co/0ccRknn/bundo-kim-693338-unsplash.jpg"); 
/* https://i.ibb.co/0ccRknn/bundo-kim-693338-unsplash.jpg
https://i.ibb.co/n3C6tSR/abbie-bernet-246064-unsplash.jpg
https://ibb.co/pxxBg11
https://ibb.co/LRBFbyB
https://ibb.co/fG9LtRw */
    height: 100vh;
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
    font-family: 'Roboto', sans-serif;
            font-size: 65px;
            font-weight: 700;
    
}

.bb {
    padding: 5px;
    font-size: 12px;
}

.descripcion {
    
    position: relative;
    margin-top: 10em;
    text-shadow: 2px 2px 4px #000000;
    
}

    </style>
</head>
<body>

<!--aqui termina el container-fluid del navbar-->
    <!--fondo de la pagina como es fluid cubre TODA LA PAGINA: slider es el nombre en sí del class-->
    <section class="container-fluid slider d-flex justify-content-center align-items-center col-md-12">   
    <div class="box shadow-sm p-3 mb-5">
    <h1 class="text-center font-effect-anaglyph">KULTURIZATE</h1>  <!---Titulo con display para usar menos css -->
    </div>

    <p class="lead text-center text-white descripcion ">Conoce Korea del Sur con los posts del blog pero sobre todo ¡disfrútalos!</p>


    </section>
    
    <br>
    <br>
    <div class="container-fluid">
        
        
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                    <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."/>              
                
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."/> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
        <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                           
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."/> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
    
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
        
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\clay-banks-170882-unsplash.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-dark">Leer mas</button>
                
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="recursos\img\churros.jpg" class="card-img-top"  width="100%" height="100%" alt="..."> 
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div> <!-- fin container cards -->


    <br>
    <br>

    

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
    </html>
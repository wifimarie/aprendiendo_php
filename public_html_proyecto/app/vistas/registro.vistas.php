<?php require '_head.php'; ?>
    <style>
body {
    margin: 0;
    padding: 0;    
    background-image: url("https://images.unsplash.com/photo-1525762867061-21c9fb70b15a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80");
    color: white;

}

.box {
    width: 600px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: black;
    

}
.box h1 {
    color: white;
    
    font-weight: 500;
}
.sexy {
    
    padding: 5px;
    
}
h3 {
    align-items: center;
    
}
</style>
</head>
<body class="text-center">

<div class="container">
    <div class="row">
        <col-md-4>
<h3><i class="fab fa-kickstarter-k sexy"></i>ulturizate</h3>
<form  class="box" action="registro.php" method="post">
    <h1>Regístrate</h1>  
    <input type="text" class="form-control mb-3" name="u_name" value="Usuario"> <!--mb significa margin bottom y el 2 ps la medida -->
    <input type="text" class="form-control mb-3" name="u_username" value="Nombre de Usuario">   
    <input type="email" class="form-control mb-3" name="u_email" value="Correo"> <!--mb significa margin bottom y el 2 ps la medida -->
    <input type="password" class="form-control mb-3" name="u_pass" value="Contraseña"> <!--mb significa margin bottom y el 2 ps la medida -->
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto los términos de uso.</label>
  </div>
    <input type="submit" name="u_btn" class="btn btn-outline-dark btn-block" value="Registrarme"><br />
    <center><span>¿Ya tienes tu cuenta? </span><a href="login.php">Inicia sesi&oacute;n.</a></center>
 </col-md-4>
    </div>
    </div>
</form>
</body>
</html>
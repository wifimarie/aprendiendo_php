<?php //esto se hace una sola vez
$host = "127.0.0.1";
$dbname = "marie_database";
$user = "root";
$password = "";
$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//cambiar los valores para producción
if ($_SERVER["SERVER_NAME"] == 'daydreammarie.000webhostapp.com')
{
    $host = "localhost";
    $dbname = "id8907611_proyecto_db";
    $user = "id8907611_daydreammarie";
    $password = "elviragomez02";
}
try {
    // 1. Conectarnos a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $opciones);
    // 2. Preparar el SQL (query)
    $sql = "SELECT * FROM usuarios";
    $comando = $conexion->prepare($sql);
    // 3. Ejecutar el SQL (query)
    $comando->execute();
    // 4. Traer los datos
    $usuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
   
} catch(PDOException $e) {
    echo $e->getMessage();
}

if (isset($_POST['inputName'])){
    // 

    $datosUsuarios = array(
        'nombre' => $_POST['inputName'],
        'correo' => $_POST['inputEmail'],
        'username' => $_POST['inputUser'],
        'password' => $_POST['inputPassword']
    );
    

    
    // Validar 
    if (false) {
    
    } else {
        // Enviar los datos
        // 1. Preparar el SQL (query)
        $sqlInsert = "INSERT INTO usuarios(nombre, correo, username, password)
                VALUES (:nombre, :correo, :username, :password)";
        $comando = $conexion->prepare($sqlInsert);
    
        // 2. Ejecutarlo
        $respuesta = $comando->execute($datosUsuarios);
        if ($respuesta == true) {
            echo "<script>alert('Datos insertados correctamente')</script>";
            //redirecciona a la pagina principal
            header("Location: /aprendiendo_php/public_html_proyecto/");
        } else {
            echo "No se insertaron los datos";
        }
    }
}
?>
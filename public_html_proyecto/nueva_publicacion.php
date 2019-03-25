<?php
session_start();
require "app/mis_funciones.php";
require "app/conexion.php";
/* Codigo para guardar la publicacion */

//  Verificar que el usuario haya hecho click en el boton

if (isset($_POST['btnCrearPublicacion'])) {

    // Guardar los datos en un array para insertarlos a la base de datos
    $publicacion = array(
        'titulo' => $_POST['inputTitulo'],
        'descripcion' => $_POST['inputDescripcion'],
        'id_categoria' => $_POST['selectCategoria'],
        'nombre_archivo' => "",
        'creado_por' => $_SESSION['usuario_id']
    );
    // 1. Preparar el query
    $sql = "INSERT INTO publicaciones(titulo, descripcion, id_categoria, nombre_archivo, creado_por) 
            VALUES (:titulo, :descripcion, :id_categoria, :nombre_archivo, :creado_por)";
    $comando = $conexion->prepare($sql);
    // 2. Ejecutar el query, con los datos de la publicacion
    $comando->execute($publicacion);
    // 3. Traer los datos
    $resultado = $comando->rowCount();
    if ($resultado > 0) {
        echo "Datos insertados.";
    } else {
        echo "Los datos no fueron insertados.";
    }

    // Subir el archivo
    if (isset($_FILES['inputArchivo'])) {
        $destino = "C:\\xampp\\htdocs\\aprendiendo_php\\public_html_proyecto\\recursos\\archivos";
        $nombreArchivo = $_FILES['inputArchivo']['name'];
        $nombreArchivoTemp = $_FILES['inputArchivo']['tmp_name'];

        // Concatenarle el nombre real del archivo a la variable destino
        $destino .= DIRECTORY_SEPARATOR . $nombreArchivo;
                                                     
        $subido = move_uploaded_file($nombreArchivoTemp, $destino);

        if ($subido == true) {
            echo "El archivo se subio correctamente";
            
            // Obtener el ultimo id insertado en la tabla de publicaciones
            $ultimoIdInsertado = $conexion->lastInsertId();
            

            //Obtener el ultimo id insertado en la tabla de publicaciones
            
            $sqlUpdate = "UPDATE publicaciones SET nombre_archivo = '$nombreArchivo' WHERE id = $ultimoIdInsertado";
            $comando = $conexion->prepare($sqlUpdate);
            $comando->execute();
            $resultado = $comando->rowCount();     


        } else {
            echo "El archivo no se subio correctamente";
        }
    }
}
/* Fin del codigo para guardar */


/* Traer las publicaciones */

$titulo = "Crear publicación";
$listadoPublicaciones = selectPublicacionesDelUsuario($conexion, $_SESSION['usuario_id']);

imprimir($listadoPublicaciones);


//definir las variables que voy a utilizar en la vista

$categorias = selectCategorias($conexion);


require vista("nueva_publicacion");
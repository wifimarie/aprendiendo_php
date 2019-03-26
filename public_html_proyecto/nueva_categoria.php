<?php 
session_start();
require "app/mis_funciones.php";
require "app/conexion.php";
$titulo = "Crear categoría | Kulturizate";

//  Verificar que el usuario haya hecho click en el boton

if (isset($_POST['btnCrearCategoria'])) {

    // Guardar los datos en un array para insertarlos a la base de datos
    $categoria = array(
       'nombre' => $_POST['inputTituloCat']      
    );

// 1. Preparar el query
    $sql = "INSERT INTO categorias(nombre) 
            VALUES (:nombre)";

    $comando = $conexion->prepare($sql);

    // 2. Ejecutar el query, con los datos de la publicacion
    $comando->execute($categoria);

    // 3. Traer los datos
    $resultado = $comando->rowCount();
    if ($resultado > 0) {
       // echo "Datos insertados.";
    } else {
        //echo "Los datos no fueron insertados.";
    }

///////////////////////////////////////////////////////////////
}



// Verificar las variables por la URL

if ( isset($_GET['accion']) && isset($_GET['id']) ) {

    // Guardar el id en una variable

    $idCategoria = $_GET['id'];

    // Accion de borrar

   /* if ($_GET['accion'] == 'borrar') {

        echo "Logica para borrar";

        // Borrado fisico

        $sql = "DELETE FROM categorias WHERE id = $idCategoria ";

        // Borrado logico

        $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";
    } */

    //------------------------------------------------------------------------------------
    
    if(isset($_GET['accion']) && $_GET['accion']=='actualizar'){ 

    $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria";
    $comando = $conexion->prepare($sql);
    $comando->execute($categorias);
    // 3. Traer los datos
    $resultado = $comando->rowCount();
    if ($resultado > 0) {
        $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";
    } else {
        //echo "Los datos no fueron insertados.";
    }
         
        
    }else if(isset($_GET['accion']) && $_GET['accion']=='borrar'){ 

    $idCategoria = $_GET['id'];

       $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria";
    $comando = $conexion->prepare($sql);
    $comando->execute();
    // 3. Traer los datos
    $resultado = $comando->rowCount();
    if ($resultado > 0) {
       // $sql = "UPDATE categorias SET eliminado = true WHERE id = $idCategoria ";
    } else {
       // echo "Los datos fueron eliminados.";
    } 

    }else{ 

    } 
          
    

      
}


$categorias = selectCategorias($conexion);


require "app/vistas/nueva_categoria.vistas.php";
?>
<?php
echo"<pre>";
var_export($_FILES);
echo"</pre>";

if (isset($_POST['btnSubir'])) {
    
    
    $destino = "archivos";
    $nombreArchivo = $_FILES['inputArchivo']['name'];
    $nombreArchivoTemp = $_FILES['inputArchivo']['tmp_name'];
    $destino .= DIRECTORY_SEPARATOR . "$nombreArchivo";
    $subido = move_uploaded_file($nombreArchivoTemp, $destino);
    if ($subido == true) {
        echo "El archivo se subió";
    } else {
        echo "El archivo no se subió";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kulturizate | Subir archivos </title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <p>Seleccione un archivo pa' subirlo: <input type="file" name="inputArchivo"> <br>
            <input name="btnSubir" type="submit" value="Subir">
            <br><br>
            <p>Seleccione otro archivo: </p> <input type="file" name="inputArchivo2">
            <input  type="submit" value="Subir">
    </form>

</body>

</html>
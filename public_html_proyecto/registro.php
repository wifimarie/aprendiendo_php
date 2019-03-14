<?php
$titulo = "Kulturizate | Registrate";


$usuarios = [
   
    0 => ['nombre' => 'marie',
            'username' =>'aticboy'
],
    1 => ['nombre' => 'lucas',
            'username' =>'lucasfelixcas'
],
    2 => ['nombre' => 'jamil',
            'username' =>'jamilie'
]
];

// foreach 
/*
foreach($usuarios as $usuario) :

    echo"<ul>";
    echo "<li>{$usuario['nombre']} {$usuario['username']}</li>";
    echo"<ul>";
endforeach;
*/
require 'config.php'; // archivito con las configuraciones de la base de datos.

require "app/vistas/registro.vistas.php";

?>
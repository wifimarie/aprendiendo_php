<?php
$titulo = "Kulturizate | Registrate";

session_start();
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
//enlazando base de datos con los campos del registro



require 'app/conexion.php'; // archivito con las configuraciones de la base de datos.

require "app/vistas/registro.vistas.php";

?>
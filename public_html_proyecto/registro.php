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
//enlazando base de datos con los campos del registro



require 'config.php'; // archivito con las configuraciones de la base de datos.

require "app/vistas/registro.vistas.php";

?>
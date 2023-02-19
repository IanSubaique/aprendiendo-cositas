<?php

    $servidor = "localhost";
    $nombreusuario = "root";

    $conexion = new mysqli($servidor, $nombreusuario, "");

    if($conexion -> connect_error){
        die("Conexion fallida: ". $conexion-> connection_error);
    }

    echo "Conexion exitosa.";

?>
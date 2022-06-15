<?php

// Se realiza la conexión a la base de datos seleccionada.

    $conexion = mysqli_connect('localhost','root','','proyectofinal');
    if (!$conexion){
        die('La conexion ha fallado: '.mysqli_connect_error());
    }
?>
<?php
    session_start();

// Se borra el repositorio temporal de archivos una vez se da la condición de que la sesión de usuario está 
// iniciada y el carrito vacío, esto puede suceder al cerrar el navegador, lo cual borra la sesion y 
// posteriomente al loguearse, al comprar, lo cual borra el carrito o al vaciar el carrito voluntariamente.

    if( (empty( $_SESSION['carrito'])) && (isset( $_SESSION['usuario'])) ) {
        if(is_dir('repositorioTemporal'.$_SESSION['usuario']['id'])){
            array_map('unlink', glob("repositorioTemporal". $_SESSION['usuario']['id'] ."/*.*"));
            rmdir("repositorioTemporal". $_SESSION['usuario']['id']);
          }
    }
?>
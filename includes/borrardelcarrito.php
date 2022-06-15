<?php
session_start();

// Al borrar de carrito se redirije a este código donde ser recorre el $GET (1 elemento) de forma que recoje 
// $key (nombre del imput) que es la posición del array $_SESSION['carrito'] que se va a borrar.

foreach($_GET as $key=>$value){
    array_splice($_SESSION['carrito'], $key, 1); 
}

// Se regresa a la pagina del carrito.

header('Location: ../carrito.php');
?>
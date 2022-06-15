<?php
include("classes.php");
//Se crea un objeto de clase usuario, pasandole el nick y la clave.
$usuario=new Usuario($_POST["email"],$_POST["clave"]);
//Se llama al metodo LogIn() de este objeto y si existe un usuario con ese nick y esa clave se inicia la sesion del mismo.
$usuario->LogIn();
?>
<?php
include("classes.php");

$usuario=new Usuario(
    htmlspecialchars($_POST["email"]),
    htmlspecialchars($_POST["clave"]),
    htmlspecialchars($_POST["nombre"]),
    htmlspecialchars($_POST["apellidos"]),
    htmlspecialchars($_POST["dni"]),
    htmlspecialchars($_POST["telefono"]),
    htmlspecialchars($_POST["direccion"]),
    htmlspecialchars($_POST["cp"]),
    htmlspecialchars($_POST["localidad"]),
    htmlspecialchars($_POST["provincia"]),
    htmlspecialchars($_POST["pais"])
);

$usuario->Registrar();
?>

<?php

// Se conecta con la base de datos y se borra el registro de usuarios cuyo email coincida con el de la sesion
// actual, después se borra la sesión para que no se pueda acceder ya que el usuario ya no esta en la BD. 

    session_start();
    include("conexion.php");
    $sql = "DELETE FROM usuarios WHERE email like '".$_SESSION['usuario']['email']."'";
    $resultado = mysqli_query($conexion, $sql);

    unset($_SESSION["usuario"]);

    echo '<script>alert("¡El perfil ha sido borrado!"); window.location.href="../index.php";</script>';
?>
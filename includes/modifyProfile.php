<?php

// Se hace la conexión a la BD y se toman por post todos los imput que se tratan para hacer la consulta. 
// En caso de estar vacio el campo de la contraseña no se añade a la consulta, en caso afirmativo se cifra
// antes de insertar.

    session_start();
    include("conexion.php");
    $nombre = "nombre='".htmlspecialchars($_POST["nombre"])."'";
    $apellidos = ", apellidos='".htmlspecialchars($_POST["apellidos"])."'";
    $dni = ", dni='".htmlspecialchars($_POST["dni"])."'";
    $telefono = ", telefono='".htmlspecialchars($_POST["telefono"])."'";
    $direccion = ", direccion='".htmlspecialchars($_POST["direccion"])."'";
    $cp = ", cp='".htmlspecialchars($_POST["cp"])."'";
    $localidad = ", localidad='".htmlspecialchars($_POST["localidad"])."'";
    $provincia = ", provincia='".htmlspecialchars($_POST["provincia"])."'";
    $pais = ", pais='".htmlspecialchars($_POST["pais"])."'";
    if ($_POST["clave"] != '') {
        $hash = password_hash(htmlspecialchars($_POST["clave"]), PASSWORD_DEFAULT);
        $clave = ", clave='$hash'";
    }
    
// Se hace el Update del registro en la base de datos y se toman los nuevos datos, que a su vez se guardan en
// la $_SESSION["usuario"] actual para que se vean reflejados los cambios en la misma. Se informa mediante alert
// que la modificación fue exitosa.

    $sql = "UPDATE usuarios SET 
            $nombre
            $apellidos
            $dni
            $telefono
            $direccion
            $cp
            $localidad
            $provincia
            $pais
            $clave
            WHERE email LIKE '".$_SESSION['usuario']['email']."'";
    $resultado = mysqli_query($conexion, $sql);
    $sql = "SELECT * FROM usuarios where email like '".$_SESSION['usuario']['email']."'";
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION["usuario"] = $row;
        
    echo '<script>alert("¡Datos modificados con exito!"); window.location.href="../micuenta.php";</script>';
?>
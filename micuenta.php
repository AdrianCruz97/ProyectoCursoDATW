<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>
    <link rel="shortcut icon" href="img/logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS)-->
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
    <?php include('includes/menu.php'); ?>

    <h1 class="text-center mt-5" >Mi Cuenta</h1>
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Envia el form por post a loguear.php y ejecuta el script. -->
            <form onsubmit="return validarForm()" name="registro" action="includes/modifyProfile.php" method="post" class="row g-3 px-3">
                <h2>Información personal</h2>
                <label for="nombre">Nombre: </label><input type="text" name="nombre" value="<?php echo $_SESSION['usuario']['nombre'] ?>" required>
                <label for="apellidos">Apellidos: </label><input type="text" name="apellidos" value="<?php echo $_SESSION['usuario']['apellidos'] ?>" required>
                <label for="dni">DNI: </label><input onchange="validarDNI()" type="text" name="dni" value="<?php echo $_SESSION['usuario']['dni'] ?>" required>
                <div class='text-danger' id="mensajedni"></div>
                <label for="telefono">Teléfono: </label><input onchange="validarTel()" type="text" name="telefono" maxlength="9" minlength="9" value="<?php echo $_SESSION['usuario']['telefono'] ?>">
                <div class='text-danger' id="mensajetel"></div>
                <label for="contraseña">Cambiar contraseña (min. 8 caracteres, no requerido):</label><input type="password" name="clave" minlength="8">
                <label for="comprobar contraseña">Confirma la nueva contraseña:</label><input onchange="validarPass()" type="password" name="clave2">
                <p class="text-danger" id="mensajepass"></p>
                <h2>Dirección</h2>
                <label for="direccion">Dirección: </label><input type="text" name="direccion" value="<?php echo $_SESSION['usuario']['direccion'] ?>" required>
                <label for="codigo postal">Código Postal: </label><input type="text" name="cp" value="<?php echo $_SESSION['usuario']['cp'] ?>" required>
                <label for="localidad">Localidad: </label><input type="text" name="localidad" value="<?php echo $_SESSION['usuario']['localidad'] ?>" required>
                <label for="provincia">Provincia: </label><input type="text" name="provincia" value="<?php echo $_SESSION['usuario']['provincia'] ?>" required>
                <label for="pais">Pais: </label><input type="text" name="pais" value="<?php echo $_SESSION['usuario']['pais'] ?>" required>
                <input type="submit" name="btn1" class="btn btn-primary" value="Modificar datos">
            </form>
            <br>
            <form onsubmit="return deleteProfile()" action="includes/deleteProfile.php" method="post" class="row g-3 px-3">
                <input type="submit" name="btn1" class="btn btn-warning" value="Eliminar perfil">
            </form>

        </div>
    </div>

    <?php include ('includes/footer.php'); ?>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="js/scripts.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
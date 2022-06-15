<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio de Modelado</title>
    <link rel="shortcut icon" href="img/logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Modelado 3D</h1>
                </div>
            </div>
        </div>
    </header>
    
    <section class="row">
        <div class="col-1"></div>
        <p class="mt-5 col-10">
        Nuestro equipo de diseño estará encantado de ayudarte a hacer realidad tus ideas. <br><br>
        Expresa tu idea en palabras, imágenes o dibujos y nosotros te ayudaremos a convertirlo en un diseño 3D. <br><br>
        Nuestros expertos conocen las limitaciones de la impresión 3D, y adaptarán cada diseño de forma que los diseños sean perfectamente adecuados para la impresión 3D y así poder garantizar el mejor resultado posible.<br><br>
        Disponemos de Escáner 3D de alta resolución para tomar referencias de piezas existentes que sirvan de base para adaptar el nuevo diseño o para copiar piezas existentes.
        </p>
        
    </section>

    <div class="row mt-5">
    <img class="col-md-6" src="img/escaner.jpg" alt="">
    <img class="col-md-6" src="img/solidworks.jpg" alt="">
    </div>

    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">¡Pide tu presupuesto sin compromiso!</h2>
            <hr class="divider" />
            <div class="text-center">
                <h3>Contacta con nosotros</h3>
                <a class="btn btn-primary btn-xl background" href="encargo.php">Hacer encargo</a>
            </div>
        </div>
    </section>

    <?php include ('includes/footer.php'); ?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>
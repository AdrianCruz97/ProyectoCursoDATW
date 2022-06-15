<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio de Impresión</title>
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
                    <h1 class="text-white font-weight-bold">Impresión 3D</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="row mt-5">
        <div class="col-1"></div>
        <div class="col-md-5">
            <h1 class="text-center">Características</h1>
            <ul class="mt-4">
                <li>Se Fabrican Piezas En Distintos Tamaños Y Resolución.</li>
                <li>Con resoluciones de hasta 25micras se pueden fabricar piezas con detalles muy finos y precisas.</li>
                <li>El tamaño máximo para las piezas es de 400x400x400mm. En caso de que las piezas superen este volumen, se varias partirán en piezas.</li>
                <li>Grosor mínimo de paredes o detalles: 1.2mm. En caso de que los modelos tengan detalles más pequeños tenemos que estudiar la viabilidad de imprimir estas piezas.</li>
                <li>Si las piezas a fabricar tienen que aguantar más de 85ºC en continuo, es conveniente que nos indiques el uso para adaptar el material de impresión.</li>
            </ul>
        </div>
        <div class="col-md-5">
            <h1 class="text-center">Materiales</h1>
            <p class="mt-4">Elige entre una amplia gama de materiales para encontrar el que mejor se adapta a tu caso:</p> 
            <ul>
                <li>PLA</li>
                <li>PETG</li>
                <li>ABS</li>
                <li>FLEXIBLE TPU</li>
                <li>EP</li>
                <li>NYLON</li>
                <li>NYLON FIBRA DE VIDRIO</li>
                <li>NYLON FIBRA DE CARBONO</li>
                <li>POLICARBONATO</li>
                <li>POLIPROPILENO</li>
            </ul>
        </div>
    </section>

    <hr class="divider mt-5" />

    <div class="row">
        <div class="col-3"></div>
        <div id="carouselExampleIndicators" class="carousel slide col-md-6 mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/carousel0.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    
    <section class="page-section2 mt-5" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">¡Pide tu presupuesto sin compromiso!</h2>
            <hr class="divider" />
            <div class="text-center">
                <h3>Contacta con nosotros</h3>
                <a class="btn btn-primary btn-xl background" href="encargo.php">Hacer encargo</a>
            </div>
        </div>
    </section>

    <section class="page-section2" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Nos define:</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/clock.png" height="100px"></div>
                        <h3 class="h4 mb-2">Velocidad</h3>
                        <p class="text-muted mb-0">Disponemos de suficientes impresoras para poder realizar tu encargo en 2-3 días.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/money.png" height="100px"></div>
                        <h3 class="h4 mb-2">Precio</h3>
                        <p class="text-muted mb-0">Teenemos precios muy competitivos para todo tipo de piezas y características.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/tick.png" height="100px"></i></div>
                        <h3 class="h4 mb-2">Condiciones Claras</h3>
                        <p class="text-muted mb-0"> Antes de comenzar un trabajo te daremos todos los detalles y precios.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/quality.png" height="100px"></i></div>
                        <h3 class="h4 mb-2">Calidad</h3>
                        <p class="text-muted mb-0">Nuestros estándares de calidad son muy altos y podrás especificar una mayor precisión en caso de ser necesario.</p>
                    </div>
                </div>
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
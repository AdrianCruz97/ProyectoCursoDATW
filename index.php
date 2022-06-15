<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresión y Modelado 3D en Tenerife</title>
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
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Servicio de Impresión 3D</h1>
                    <hr class="divider"/>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white h5">Damos forma a tus ideas</p>
                    <p class="text-white">Impresión 3D, Modelado 3D, copia de piezas…<br>
                        Servicio de impresión en Tenerife</p>
                    <a class="btn btn-primary btn-xl background" href="encargo.php">Hacer encargo</a>
                </div>
            </div>
        </div>
    </header>
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Te Ofrecemos</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/impresora.png" height="100px"></div>
                        <h3 class="h4 mb-2">Impresión 3D</h3>
                        <p class="text-muted mb-0">Tenemos a tu disposición nuestro servicio de impresión 3D, con variedad de materiales que se adaptan a todo tipo de proyectos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/laptop.png" height="100px"></div>
                        <h3 class="h4 mb-2">Diseño 3D</h3>
                        <p class="text-muted mb-0">Disponemos de software específico en caso de que necesites que diseñemos desde 0 una pieza que se adapte a tus necesidades.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/tools.png" height="100px"></i></div>
                        <h3 class="h4 mb-2">Componentes</h3>
                        <p class="text-muted mb-0"> Contamos con un amplio catálogo de repuestos y filamentos de distintos materiales para tu impresora 3D.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><img src="img/service.png" height="100px"></i></div>
                        <h3 class="h4 mb-2">Asesoramiento</h3>
                        <p class="text-muted mb-0">Ofrecemos servicio técnico de reparación y modificaciones para todo tipo de impresoras 3D.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/a.jpg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/a.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Escorpión</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/b.jpg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/b.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Prótesis de mano</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/c.jpeg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/c.jpeg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Componente</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/d.jpg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/d.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Piezas de ajedrez</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/e.jpg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/e.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Bloque motor</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/f.jpg" title="Project Name">
                        <img class="img-fluid" src="img/portfolio/thumbnails/f.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Proyecto</div>
                            <div class="project-name">Componente especial</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section2 bg-dark text-white">
        <div class="container text-center">
            <h2>Algunos de nuestros trabajos</h2>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">¡Contactanos sin compromiso!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Preguntanos cualquier duda que tengas. ¡Te responderemos tan pronto como sea posible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="includes/mailto.php" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." required>
                                <label for="name">Nombre y Apellidos*</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" required>
                                <label for="email">Correo electrónico*</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Company input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="company" type="tel" placeholder=" ">
                                <label for="company">Empresa (opcional)</label>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Escribe aquí tu consulta.</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es requerido.</div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Acepto la política de privacidad.</label>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php include ('includes/footer.php'); ?>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="js/scripts.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
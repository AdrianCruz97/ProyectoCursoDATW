<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
                    <h1 class="text-white font-weight-bold">Contacta con nosotros</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-5">
            <!--Ajustamos texto de contacto y iframe del mapa para situarlos en la misma altura-->
            <div class="row justify-content-center margensuperior mt-5">
                <div class="col-md-4">
                    <h2 class="text-center"><b>Detalles de contacto:</b></h2>
                    <h2 class="mt-4">Correo electrónico</h2>
                    <p>info@printacan3d.com</p>
                    <h2>Teléfono</h2>
                    <p>+34 654 987 321</p>
                    <h2>Dirección</h2>
                    <p>Oficina 3, CTCAN, Polígono Industrial Valle de Güímar, 38509, 38509 Santa Cruz de Tenerife</p>
                    <h2>Horario</h2>
                    <p>
                        De Lunes a Viernes<br>
                        - Mañanas: 9:00-13:00<br>
                        - Tardes: 15:00-18:00
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d519.863365847048!2d-16.369129309021208!3d28.339779187609096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc402de9ef72e269%3A0x55ba73879f07fc52!2sCentro%20Tecnol%C3%B3gico%20de%20Candelaria%20(CTCAN)!5e0!3m2!1ses!2ses!4v1653382553002!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!--Formulario de contacto-->
            <div class="row justify-content-center mt-5">
              <div class="col-sm-10">
                <form>
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Tu nombre (Requerido):</label>
                    <input for="nombre" type="text" class="form-control" id="nombre">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Tu correo electrónico (Requerido):</label>
                    <input for="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="mb-3">
                    <label for="company" class="form-label">Tu empresa:</label>
                    <input for="company" type="company" class="form-control" id="company">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escribe aquí tu mensaje (Requerido):</label>
                    <textarea for="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Acepto la política de privacidad.</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
              </div>
            </div>
        </div>
    </div>

    <?php include ('includes/footer.php'); ?>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>
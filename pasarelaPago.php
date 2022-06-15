<?php include('includes/borrarficherotemporal.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<?php 
    include('includes/menu.php');
    // print_r($_SESSION['carrito']);
?>
    <h1 class="text-center mt-5">Confirmar pago</h1>

    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="col-6">
            <p class="text-center">Aquí iria la pasarela de pago.</p>
            <p class="text-center">Tarjeta, Paypal,...</p>
            <h2 class="text-center"><?php echo $_SESSION['precioFinal']; ?></h2>
            <form onsubmit="return validarLogin()" action="includes/confirmarPago.php" method="post">
                <input type="submit" value="Confirmar Pago" class="col-12 mb-4 text-center btn btn-primary">
            </form>
        </div>
    </div>

<footer class="bg-light py-5 mt-5">
  <div class="container px-4 px-lg-5 "><div class="small text-center text-muted">Copyright &copy; 2022 - Printacan 3D</div></div>
</footer>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="js/scripts.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
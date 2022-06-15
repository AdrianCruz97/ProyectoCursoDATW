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
    <!-- Media query para disminuir el tapaño de la fuente y el ancho del imput de cantidad 
    cuando la resolución es baja -->
    <style>
      #qty {
        width:50px;
      }
      @media screen and (max-width: 600px) {
        #table {
          font-size:2vw;
        }
        #qty {
          width:20px;
        }
      }
      
    </style>
</head>
<body>
  <?php 
    include('includes/menu.php');
    // print_r($_SESSION['carrito']);
  ?>
  <h1 class="text-center mt-5">Carrito</h1>

  <div class="row mt-4">
        
  <?php

// Al modificar la cantidad de cada producto se envia automaticamente a la misma pagina (onchange="form.submit()")
// por $get la posición del producto en el carrito ($key) y la cantidad del mismo ($value).

  foreach($_GET as $key=>$value){
      $_SESSION['carrito'][$key][5] = $value;
  }

// Se calcula el total a pagar:

  if( !empty( $_SESSION['carrito'] ) ) {
    $nProductos = count($_SESSION['carrito']);
    $preciototal = 0;
    $nArticulos = 0;
    for ($i=0; $i<$nProductos; $i++) {
      $preciototal += (($_SESSION['carrito'][$i][4]) * ($_SESSION['carrito'][$i][5]));
      $nArticulos += $_SESSION['carrito'][$i][5];
    }
    $_SESSION['precioFinal'] = $preciototal + 5; // 5 euros de gastos de envio.


// Lista de prodyctos en el carrito.

    echo '
    <div class="col-lg-8 px-4" id="table">
      <table class="table table-hover">
      <thead>
          <tr>
              <th> # </th>
              <th> Archivo </th>
              <th> Material </th>
              <th> Relleno </th>
              <th> Acabado </th>
              <th> Precio  </th>
              <th> Cantidad  </th>
          </tr>
      </thead>
      <tbody>
    ';

// Detalles de los productos.

    foreach( $_SESSION['carrito'] as $key=>$producto ) {
      echo "
      <tr class='align-items-center'>
        <td class='align-middle'> ".($key+1)." </td>
        <td class='align-middle'> ".$producto[0]." </td>
        <td class='align-middle'> ".$producto[1]." </td>
        <td class='align-middle'> ".$producto[2]." % </td>
        <td class='align-middle'> ".$producto[3]." </td>
        <td class='align-middle'> ".$producto[4]." € </td>
        <td class='d-flex align-items-center'> <form action='' method='get'><input onchange='form.submit()' name='$key' type='number' id='qty' value=".$producto[5]." min=1></form>
        <form action='includes/borrardelcarrito.php' method='get'><input type='hidden' name='$key' value='delete'><button onchange='form.submit()' height='30px' class='btn transparent'><img src='img/bin.png' height='25px'></button></form></td>
      </tr>
      ";
    }

// Resumen y boton de pagar.
    echo '
    </tbody>
    </table>
    </div>
    <div class="col-lg-4 px-4 mb-5">
      <div class="container border">
        <p class="mt-4"></p>
        <div class="row">
          <span class="col">'.$nArticulos.' artículos</span><span class="col text-end"> '.$preciototal.' € </span>
        </div>
        <div class="row">
          <span class="col">Transporte:</span><span class="col text-end"> 5 € </span>
        </div>
        <hr>
        <div class="row">
          <span class="col-8 h5"> Total (impuestos inc.)</span><span class="col h5 text-end"> '.$_SESSION['precioFinal'].' € </span>
        </div>
        <div class="row justify-content-center mt-4">
          <form onsubmit="return validarLogin()" action="pasarelaPago.php" method="post"><input type="submit" value="Pagar" class="col-12 mb-4 text-center btn btn-primary"></form>
        </div>
      </div>
    </div>
    ';
  } else {

// Si no hay nada en el carrito.

    echo '
      <div class="col-1"></div>
      <div class="mb-5 mt-5 col-10">
        <div class="text-center alert alert-danger mb-5 mt-5 "> Aun no has añadido nada al carrito </div>
      </div>
      ';
  }
  ?>
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

<?php 
  session_start();
  // Archivo de configuración para la llamada a la API
  require_once("includes/config.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<?php

include('includes/menu.php'); 

// Seteo las variables innecesarias para la API.
if ($_POST) {
  $_POST["color"] = partPriceConfig::$materials[$_POST["material"]]["colors"][0];
  $_POST["layerHeight"] = partPriceConfig::$layerHeights[$_POST["acabado"]]["amount"];
  $_POST["infillPercentage"] = ($_POST['relleno'] * 100);
  $_POST["shipping"] = 'pickup';


  function buildPartPost($fields, $files, $boundary=""){
      
      // echo "<pre>".print_r($fields,true)."</pre>";
      // echo "<pre>".print_r($files)."</pre>";
      
      $output = "";
      $disallowedChars = array("\0", "\"", "\r", "\n");
      foreach($fields as $key => $value){
          $key = str_replace($disallowedChars, "_", $key);
          $value = str_replace($disallowedChars, "_", $value);
          $output .= $boundary . "\n" . "Content-Disposition: form-data; name=\"".$key."\"\n\n".$value."\n";
      }
      
      foreach($files as $key => $value){
          $key = str_replace($disallowedChars, "_", $key);
          
          if (is_array($value["name"]) == false){
              $value['name'] = str_replace($disallowedChars, "_", $value['name']);
              $value['type'] = str_replace($disallowedChars, "_", $value['type']);
              $output .= $boundary . "\n" . "Content-Disposition: form-data; name=\"".$key."\"; filename=\"".$value['name']."\"\n" . "Content-Type: ".$value['type']."\n\n".file_get_contents($value['tmp_name'])."\n";
          }
          else{
              for($i=0; $i<count($value["name"]); $i++){
                  if ($value["error"][$i] != 0)
                      continue;
                  $value['name'][$i] = str_replace($disallowedChars, "_", $value['name'][$i]);
                  $value['type'][$i] = str_replace($disallowedChars, "_", $value['type'][$i]);
                  $output .= $boundary . "\n" . "Content-Disposition: form-data; name=\"".$key."[]\"; filename=\"".$value['name'][$i]."\"\n" . "Content-Type: ".$value['type'][$i]."\n\n".file_get_contents($value['tmp_name'][$i])."\n";
              }
          }
      }
      
      return $output.$boundary."--";
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST"){
      
      // print_r($_FILES);
      
      $boundary = "------WebKitFormBoundary".substr(md5(microtime(true)),0,16);

      
      
      $ch = curl_init("http://api.3dpartprice.com");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: multipart/form-data; boundary=".substr($boundary,2)));
      curl_setopt($ch, CURLOPT_POST, true);
      $_POST["configFile"] = urlencode(base64_encode(serialize(get_class_vars("partPriceConfig"))));
      $_POST["density"] = partPriceConfig::$materials[$_POST["material"]]["density"]["amount"];
      curl_setopt($ch, CURLOPT_POSTFIELDS, buildPartPost($_POST, $_FILES, $boundary));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      $response = curl_exec($ch);

      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      
      if ($httpCode != 200){
          echo "http code: ".$httpCode.", error occured!";
          echo "<pre>".print_r(unserialize($response),true)."</pre>";
      }
      else{
        // Decodifico la variable $response y la grabo en la variable $responseArray.
          $responseArray = unserialize($response);
      }

      // echo "<pre><h2>API Response</h2>".print_r($responseArray,true)."</pre>";

// Si está seteado el usuario, se guarda el archivo .stl en la carpeta repositorioTemporal del usuario y
// se codifica el nombre del archivo.
      if(isset($_SESSION['usuario'])) {
        $nombreRepositorio = 'repositorioTemporal'.$_SESSION['usuario']['id'];
        if(!is_dir($nombreRepositorio)){
          mkdir($nombreRepositorio);
        }
        
        //usamos uniqid para añadir un id único al archivo imprescindible en las páginas multiusuario
    
        $destino = '/'. uniqid() .'_' . basename($_FILES['stlFiles']['name'][0]);
    
        // echo $_FILES['stlFiles']['type'][0];
    
        if($_FILES['stlFiles']['type'][0] == 'application/octet-stream' ){
          if(move_uploaded_file($_FILES['stlFiles']['tmp_name'][0], $nombreRepositorio . $destino)){
          } else {
            echo '<script>alert("Error al subir el archivo");</script>';
          }
        }else{
          echo '<script>alert("Formato de archivo no valido");</script>';
        }
      }

// Con los datos recibidos de la API calculo el coste de fabricación de la pieza.

      $volumen = $responseArray[0]['stlVolume']['amount']; // Depende del stl solo
      $tiempoImpresion = $responseArray[0]['printDuration']['amount']; // Depende de la altura de capa
      $densidad = $_POST["density"];
      $preciounitario = partPriceConfig::$materials[$_POST["material"]]["price"]["amount"];
      $relleno = $_POST['relleno'];

      $precio = $tiempoImpresion*0.00083+(((1+$relleno)/2)*($volumen*$densidad*$preciounitario));
      $precio = round($precio, 2);

// Se guarda el pedido en la variable $_SESSION['addcarrito'] a la espera de añadirse al carrito de forma 
// definitiva, en caso de que no se guarde, esta se sobreescribirá al calcular el siguiente presupuesto.

      if(isset($_SESSION['usuario'])) {
        $_SESSION['addcarrito'] = [ $_FILES['stlFiles']['name'][0], $_POST["material"], $_POST["infillPercentage"], $_POST["acabado"], $precio, 1, $destino ];
      }
      // print_r($_SESSION['addcarrito']);
      // print_r($_SESSION['carrito']);
  }
}
if ($_POST) {

  // Formulario de confirmación para añadir al carrito.

  echo " 
    <div class='row mt-5 px-4'>
      <div class='col-md-3'>
      </div>
      <div class='mt-5 justify-content-center col-md-6 border'>
      <form action='' method='get' onsubmit='return validarLogin()'>
        <div class='row justify-content-center mt-4'>
          <h2 class='text-center'> El precio por la impresión es:</h2>
          <h1 class='text-center'>".(( ($_POST)? $precio : '' ) . ' €')."</h1>
          <div class='col-auto'>
            <input class='mt-5 mb-2 text-center btn btn-primary' type='submit' name='addcarrito' id='carrito' value='Pulsa para añadir al carrito'>
          </div>
          <a class='text-center mb-4' href='encargo.php'>O modificar datos</a>
        </div>
      </form>
      </div>
    </div>
  ";
} else {

  // Formulario para elegir entre modelado 3d o calcular presupuesto de impresión.

  echo '
    <h1 class="text-center mt-5">Realizar encargo:</h1>
    <div class="row px-4">
      <div class="col-md-3">
      </div>
      <div class="mt-5 col-md-6 border">
        <div class="row mt-4 align-items-center">
          <h2 class="col"><b>1. </b> ¿Qué necesitas?</h2>
          <div class="col">
            <input onchange="changeForm(this.value)" type="radio" id="impresion" value="impresion" name="option" checked><label for="impresion 3d">Impresión 3D</label>&nbsp&nbsp&nbsp
            <input onchange="changeForm(this.value)" type="radio" id="modelado" value="modelado" name="option"><label for="modelado 3d">Modelado 3D</label>
          </div>
        </div>
        <form enctype="multipart/form-data" action="" method="post">
          <div id="formulario">
          </div>
        </form>
      </div>
    </div>
  ';
}

// Al pulsar el boton 'añadir al carrito' se guarda la variable almacenada en $SESSION['addacarrito'] en el
// array $SESSION['acarrito'] y se lleva al cliente a la pagina del carrito.

if ( isset( $_GET['addcarrito'] ) ) {
  if( empty( $_SESSION['carrito'] ) ) {
    $_SESSION['carrito'][0] = $_SESSION['addcarrito'];
  } else {
    array_push( $_SESSION['carrito'], $_SESSION['addcarrito'] );
  }

  echo "<script>location='http://localhost/PROYECTO/carrito.php'</script>";
    
}
  

include ('includes/footer.php'); 
?>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

// La función changeForm() permite cambiar el formulario entre contactar para pedir presupuesto de modelado o 
// calcular el coste de imprimir un archivo ya existente mediante la selección de uno y otro en un input de tipo
// radio y un evento onchange.

  changeForm(document.getElementById('impresion').value)
  function changeForm(option) {
    if (option == 'impresion') {
      document.getElementById('formulario').innerHTML=`
        <div class="row mt-4 ">
          <h2><b>2. </b> Material</h2>
          <div class="text-center mt-4">
            <input type="radio" name="material" value="PLA" checked><label for="impresion 3d">PLA</label>&nbsp
            <input type="radio" name="material" value="ABS"><label for="modelado 3d">ABS</label>&nbsp
            <input type="radio" name="material" value="PC"><label for="impresion 3d">PC (Policarbonato)</label>&nbsp
            <input type="radio" name="material" value="Nylon"><label for="modelado 3d">Nylon</label>&nbsp
            <input type="radio" name="material" value="TPE"><label for="impresion 3d">TPE (Elastómero termoplástico)</label>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <h2><b>3. </b> Relleno interior</h2>
          <div class="text-center mt-4">
            <input type="radio" name="relleno" value="0.3" checked><label for="impresion 3d">20%-30%</label>&nbsp&nbsp
            <input type="radio" name="relleno" value="0.6"><label for="impresion 3d">50%-60%</label>&nbsp&nbsp
            <input type="radio" name="relleno" value="1"><label for="modelado 3d">90%-100%</label>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <h2><b>4. </b> Acabado</h2>
          <div class="text-center mt-4">
            <input type="radio" name="acabado" value="rugoso"><label for="impresion 3d">Rugoso</label>&nbsp&nbsp
            <input type="radio" name="acabado" value="medio" checked><label for="impresion 3d">Medio</label>&nbsp&nbsp
            <input type="radio" name="acabado" value="fino"><label for="modelado 3d">Fino</label>
          </div>
        </div>
        <div class="row mt-4 align-items-center">
          <h2><b>5. </b> Sube tu modelo 3D (.stl)</h2>
          <form method="POST" enctype="multipart/form-data" name="customQuote">
          <div class="row justify-content-center mt-4">
            <div class="col-auto">
              <input onchange="return fileValidation()" id="file" type="file" name="stlFiles[]" required>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-auto">
            <input class="mt-5 mb-4 text-center btn btn-primary" type="submit" value="Obtener presupuesto">
          </div>
        </div>
      `;
    } else {
      document.getElementById('formulario').innerHTML=`
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
                    <label for="project" class="form-label">Tu Proyecto:</label>
                    <input for="project" type="project" class="form-control" id="project">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escribe aquí que deseas hacer, puedes adjuntar algún archivo si lo consideras necesario (Requerido):</label>
                    <textarea for="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                  </div>
                  <div class="row justify-content-center mt-4">
                    <div class="col-auto">
                      <input type="file" name="archivo">
                    </div>
                  </div>
                  <div class="mb-3 mt-4 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Acepto la política de privacidad.</label>
                  </div>
                  <button type="submit" class="btn btn-primary mb-4">Enviar</button>
                </form>
              </div>
            </div>
      `;
    }
    
  }
</script>
<script src="js/scripts.js"></script>
</html>


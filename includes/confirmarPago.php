<?php

// Una vez confirmado el pago se graba en la base de datos las características el pedido y se devuelve el id del
// mismo para poder relacionarlo con los productos insertados.

    session_start();
    include( 'conexion.php' );
    $sql = "INSERT INTO pedidos (`id_usuario`, `fecha`, `concepto`) 
            VALUES ('".$_SESSION['usuario']['id']."' , now(), 'impresion')";
    $resultado = mysqli_query($conexion, $sql);
    $sql = "SELECT LAST_INSERT_ID()";
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);
    $idpedido = $row['LAST_INSERT_ID()'];

    // Se recorre el carrito.

    foreach( $_SESSION['carrito'] as $producto ) {
        //Mover archivos temporales a stlFiles (definitivo donde se guarda la ruta en la BD).
        $from = '../repositorioTemporal'. $_SESSION['usuario']['id'] . $producto[6];
        $to = '../stlFiles' . $producto[6];
        print_r($from);
        print_r($to);
        rename( $from , $to );
        $producto[6] = $to;

        // Insertar en la tabla productos de la DB.
        $sql = "INSERT INTO `productos`(`id_pedido`, `precio`, `archivo`, `material`, `relleno`, `acabado`, `cantidad`) 
                VALUES ('$idpedido','".$producto[4]."','".$producto[6]."','".$producto[1]."','".$producto[2]."','".$producto[3]."','".$producto[5]."')";
        $resultado = mysqli_query($conexion, $sql);
    }

// Una vez se graba en la base de datos, se borra el carrito. Y se informa de que se ha realizado la compra con
// exito.

    unset($_SESSION['carrito']);

    echo"
    <script>
        alert('¡Compra realizada con exito!');
        window.location.href='../index.php';
    </script>
    ";
?>

<!-- Media query para eliminar el nombre de la marca cuando la resolución es muy pequeña (movil) para que 
entre el menú completo en una sola fila-->

<style>
@media screen and (max-width: 600px) {
  #brand {
    display: none;
  }
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"><img src="img/logo.png" alt="logo ACR 3D" height="40px"><div  id="brand"><p class="h2 navbar-brand">&nbsp PRINTACAN <b>3D</b></p></div></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-md-4"></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a href="index.php" class="nav-link px-2 text-dark">Inicio</a></li>
                <li><a href="impresion.php" class="nav-link px-2 text-dark">Impresión 3D</a></li>
                <li><a href="modelado.php" class="nav-link px-2 text-dark">Modelado 3D</a></li>
                <li><a href="acercade.php" class="nav-link px-2 text-dark">Acerca de</a></li>
                <li><a href="contacto.php" class="nav-link px-2 text-dark">Contacto</a></li>
            </ul>
        </div>

    <!-- Se añade el número de articulos en carrito y se cambia el desplegable del usuario para mostrar
    sus datos y salir o para poder registrarse o iniciar sesion si no está losgueado.-->

        <div class="d-flex">
            <a href="carrito.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"><img src="img/carrito.png" alt="carrito" height="30px"></a>
            &nbsp<span class="align-self-center"> <?php echo( (!empty($_SESSION['carrito']))?  count( $_SESSION['carrito'] ) : '' ) ; ?> </span>&nbsp
            <div class="d-flex dropdown">
                <button class="btn transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/usuario.png" alt="usuario" height="35px">
                <span id="login"><?php
                        if ( !empty($_SESSION['usuario']) ) {
                            echo $_SESSION['usuario']['nombre'];
                        }
                    ?></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <?php
                        if ( empty($_SESSION['usuario']) ) {
                            echo "
                            <li class='text-center'>¡Bienvenido&nbspa&nbspPrintacan&nbsp3D!</li>
                            <li><hr class='dropdown-divider'></li>
                            <li><a class='dropdown-item' href='login.php'>Identificarse</a></li>
                            <li><a class='dropdown-item' href='register.php'>Registrarse</a></li>
                            ";
                        } else {
                            echo "
                            <li class='text-center'>¡Hola, ".$_SESSION['usuario']['nombre']."!</li>
                            <li><hr class='dropdown-divider'></li>
                            <li><a class='dropdown-item' href='micuenta.php'>Ver perfil</a></li>
                            <li><form action='' method='post'><input type='submit' name='salir' value='Salir' class='dropdown-item'></form></li>
                            ";
                            if(isset($_POST["salir"])){
                                unset($_SESSION['usuario']);
                                echo '<script type="text/JavaScript"> location.reload(); </script>';
                            }
                        }
                    ?>
                
                </ul>
            </div>
        </div>
    </div>
</nav>

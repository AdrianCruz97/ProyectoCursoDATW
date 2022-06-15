<?php
session_start(); 
// Clase usuario. En caso de login rellena los campos vacíos con string vacios.
class Usuario{
    function __construct($email,$password,$nombre="",$apellidos="",$dni="",$telefono="",$direccion="",$cp="",$localidad="",$provincia="",$pais=""){
        $this->email = $email;
        $this->clave = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->cp = $cp;
        $this->localidad = $localidad;
        $this->provincia = $provincia;
        $this->pais = $pais;
    }

// Función Registrar: Se conecta a la base de datos tabla usuarios y busca resultados con ese email. En caso de 
// ya existir un registro con ese email informa que no se puede registrar. En caso de que no exista, cifra la 
// contraseña e inserta el usuario en la tabla.

    function Registrar(){
        include("conexion.php");
        $sql = "SELECT * FROM usuarios where email like '$this->email'";
        $resultado = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($resultado) == 0){
            $hash = password_hash($this->clave, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `usuarios` VALUES (null,'$this->email', '$hash', '$this->nombre', '$this->apellidos', '$this->dni', '$this->telefono', '$this->direccion', '$this->cp', '$this->localidad', '$this->provincia', '$this->pais');";
            $resultado = mysqli_query($conexion, $sql);
            echo '<script>alert("¡Usuario creado con exito!"); window.location.href="../login.php";</script>';
        } else {
            echo '<script>alert("No se pudo crear el usuario porque el email empleado ya esta en uso.");window.location.href="../register.php";</script>';
        }
    }

// Función Login: Se conecta a lka base de datos tabla usuarios y busca resultados con ese email. Si no existe
// un registro con ese email informa que no se puede acceder. Si existe, comprueba que la contraseña coincide: 
// en caso afirmativo graba en la sesion los datos del usuario y se loguea, en caso contrario, informa que 
// no se puede acceder.
    
    function LogIn(){
        include("conexion.php");
        $sql = "SELECT * FROM usuarios where email like '$this->email'";
        $resultado = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_assoc($resultado);
        if (mysqli_num_rows($resultado) == 0){
            echo '<script>alert("Usuario y contraseña incorrectos."); window.location.href="../login.php";</script>';
        } else if (password_verify($this->clave, $row['clave'])) {
            $_SESSION["usuario"] = $row;
            header ('Location: ../index.php');
        } else {
            echo '<script>alert("Usuario y contraseña incorrectos."); window.location.href="../login.php";</script>';
        }
        echo '<br>';
        print_r($_SESSION["usuario"]);
    }
}
?>
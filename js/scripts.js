// Función para preguntar si está seguro de querer eliminar el perfil.
function deleteProfile() {
    var result = window.confirm('¿Desea eliminar su perfil? Se borraran todos sus datos.')
    return result;
}

// Función para validar el dni.
function validarDNI() {
    dnival = false;
    document.getElementById("mensajedni").innerHTML = "";
    var dni = (document.forms["registro"]["dni"].value).toUpperCase();
    if( dni.length == 9 ) {
        var numero = dni.slice(0,8);
        var letra = dni.slice(8,9);
        var letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
        if (letras[numero%23]==letra){
            dnival = true;
        } else {
            document.getElementById("mensajedni").innerHTML="<p class='text-danger'>El DNI introducido es incorrecto.</p>";
        }
    } else {
        document.getElementById("mensajedni").innerHTML="<p class='text-danger'>El DNI introducido es incorrecto.</p>";
    }
    return( dnival );
}

// Función para validar el teléfono.
function validarTel() {
    telval = false;
    document.getElementById("mensajetel").innerHTML = "";
    var tel = document.forms["registro"]["telefono"].value;
    if( tel.length == 9 && !isNaN( tel ) ) {
        telval = true;
    } else {
        document.getElementById("mensajetel").innerHTML="<p class='text-danger'>Introduce un número de teléfono válido.</p>";
    }
    return( telval );
}

// Función para validar que las contraseñas coincidan.
function validarPass() {
    passval = false;
    document.getElementById("mensajepass").innerHTML = "";
    var pass = document.forms["registro"]["clave"].value;
    var pass2 = document.forms["registro"]["clave2"].value;
    if( pass == pass2 ) {
        passval = true;
    } else {
        document.getElementById("mensajepass").innerHTML="<p class='text-danger'>Las contraseñas introducidas deben ser iguales.</p>";
    }
    return( passval );
}

// Función para comprobar que todas las validaciones son correctas y parar el envío del formulario en caso contrario..
function validarForm() {
    if (validarDNI() && validarTel() && validarPass()) {
        return true;
    } else {
        return false;
    }
    
}

// Función para validar que el usuario se registra o loguea antes de añadir al carrito o proceder al pago.
function validarLogin() {
    if (document.getElementById('login').innerHTML != '') {
        return true;
    } else {
        alert('Debe registrarse o iniciar sesión para hacer esto.');
        return false;
    }
    
}

// Función para validar que el archivo subido es de tipo .stl.
function fileValidation() {
    var fileInput = document.getElementById('file');
     
    var filePath = fileInput.value;
 
    // Allowing file type
    var allowedExtensions =
            /(\.stl)$/i;
     
    if (!allowedExtensions.exec(filePath)) {
        alert('Archivo no valido');
        fileInput.value = '';
        return false;
    }
}
$(document).ready(function(){

    $('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
    var fechaA = new Date();
    var yyyy = fechaA.getFullYear();

    $("#fechaNacimiento").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1900:' + yyyy,
        dateFormat: "dd-mm-yy"
    });

    $("#fechaNacimientou").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1900:' + yyyy,
        dateFormat: "dd-mm-yy"
    });

});

function agregarUsuarioNuevo() {
    $.ajax({
        method: "POST",
        data: $('#frmRegistro').serialize(),
        url: "../procesos/usuario/registro/agregarUsuario.php",
        success:function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $("#frmRegistro")[0].reset();
                $('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
                swal(":D", "Agregado con exito!", "success");
            } else if(respuesta == 2) {
                swal("Este usuario ya existe, por favor escribe otro !!!");
            } else if (respuesta == 'e') {
                swal("El correo ya existe, por favor escribe uno diferente!!");
            } else {
                swal(":(", "Fallo al agregar!", "Error");
            }
        }
    });

    return false;
}

function desactivarUsuario(idUsuario) {
    $.ajax({
        type : "POST",
        data : "idUsuario=" + idUsuario,
        url : "../procesos/usuario/cambioEstado.php",
        success : function(respuesta) {
            if (respuesta == 1) {
                $('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
                swal(':D','Estado cambiado con exito!','success');
            } else {
                swal(':(','No se pudo cambiar!','error');
            }
        }
    });
}

function agregarIdUsuario(idUsuario) {
    $('#idUsuarioReset').val(idUsuario);
}

function cambiarPasswordUsuario() {
    $.ajax({
        type : "POST",
        data : $('#frmCambiarPassword').serialize(),
        url : "../procesos/usuario/cambioPassword.php",
        success : function(respuesta) {

            if (respuesta == 1) {
                $('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
                $("#frmCambiarPassword")[0].reset();
                swal(':D','Cambiado con exito!','success');
            } else {
                swal(':(','No se pudo cambiar!' + respuesta,'error');
            }
        }
    });

    return false;
}

function actualizarUsuario() {
    $.ajax({
        type : "POST",
        data : $('#frmActualizarUsuario').serialize(),
        url : "../procesos/usuario/actualizarUsuario.php",
        success : function(respuesta) {
           
            if (respuesta == 1) {
                $('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
                swal(':D','Actualizado con exito!','success');
            } else {
                swal(':(','No se pudo actualizar!' + respuesta,'error');
            }
        }
    });

    return false;
}

function editarUsuario(idUsuario) {
    $.ajax({
        type: "POST",
        data: "idUsuario=" + idUsuario,
        url: "../procesos/usuario/editarUsuario.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#idUsuarioUpdate').val(respuesta['idUsuarioUpdate']);
            $('#nombreu').val(respuesta['nombreu']);
            $('#fechaNacimientou').val(respuesta['fechaNacimientou']);
            $('#correou').val(respuesta['correou']);
            $('#usuariou').val(respuesta['usuariou']);
            $('#rolUsuario').val(respuesta['rolUsuario']);
        }
    });
}
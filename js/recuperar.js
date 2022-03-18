function recuperarPassword() {

    $.ajax({
        type: "POST",
        url: "procesos/recuperar/enviarEmail.php",
        data : $('#frmRecuperar').serialize(),
        success : function(respuesta) {
            if (respuesta == 1) {
                swal("Se enviaron las credenciales a tu email :)");
            } else {
                swal("Fallo el servidor!");
            }
        }
    });

    return false;
}
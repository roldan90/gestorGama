<?php 
    require_once "../../clases/Usuario.php";
    $Usuario = new Usuario();
    $datos = array(
        "idUsuario" => $_POST['idUsuarioUpdate'],
        "nombre" => $_POST['nombreu'],
        "fechaNacimiento" => $_POST['fechaNacimientou'],
        "email" => $_POST['correou'],
        "usuario" => $_POST['usuariou'],
        "rol" => $_POST['rolUsuario']
    );
    $tmp = $Usuario->actualizarUsuario($datos);
    if($tmp){
        echo 1;
    }else{
        echo 0;
    }

?>
<?php
    require_once "../../clases/Usuario.php";
    $idUsuario = $_POST['idUsuario'];
    $usuario = new Usuario();
    echo $usuario->cambiarEstadoUsuario($idUsuario);
?>
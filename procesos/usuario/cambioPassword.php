<?php
    require_once "../../clases/Usuario.php";
    $idUsuario = $_POST['idUsuarioReset'];
    $password = sha1($_POST['nuevoPassword']);
    $passwordOld = $_POST['nuevoPassword'];
    $Usuario =  new Usuario();

    echo $Usuario->cambiarPasswordUsuario($idUsuario, $password, $passwordOld);
?>
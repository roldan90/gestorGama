<?php 
    require_once "../../clases/Usuario.php";
    $Usuarios = new Usuario();

    echo $Usuarios->enviarMailRecuperarPassword($_POST['email']);
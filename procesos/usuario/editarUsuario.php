<?php 
    require_once "../../clases/Usuario.php";
    $Usuario = new Usuario();
    $idUsuario = $_POST['idUsuario'];
    echo json_encode($Usuario->editarUsuario($idUsuario));
?>
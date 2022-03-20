<?php 
   session_start();
   require_once "../../clases/Gestor.php";
    $data = array(
        'id_archivo' => $_POST['idArchivou'],
        'id_usuario' => $_SESSION['idUsuario'],
        'no_oficiou' => $_POST['no_oficiou'], 
        'categoriasArchivosu' => $_POST['categoriasArchivosu'], 
        'asuntou' => $_POST['asuntou'], 
        'fecha_oficiou' => $_POST['fecha_oficiou'], 
        'descripcionu' => $_POST['descripcionu'], 
        'fecha_oficiolimitu' => $_POST['fecha_oficiolimitu'], 
        'remitente_oficiou' => $_POST['remitente_oficiou'], 
        'destinatario_oficio' => $_POST['destinatario_oficio'], 
        'status_oficiou' => $_POST['status_oficiou']
    );
    
    $Gestor = new Gestor();
    echo $Gestor->actualizarArchivo($data);

?>
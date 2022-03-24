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
    $respuesta = $Gestor->actualizarArchivo($data);

    if($_FILES['archivou']['name'] != "" && $respuesta) {
        $nombreArchivoAnterior = "../../archivos/20/" . $Gestor->obtenerArchivo($idArchivo);

        if(unlink($nombreArchivoAnterior)) {
            $rutaGuardado = $_FILES['archivou']['tmp'];
            $nuevoArchivo = "../../archivos/20/" . $_FILES['archivou']['name'];
            if (move_uploaded_file($rutaGuardado, $nuevoArchivo)) {

                $nombreArchivo = $_FILES['archivos']['name'][$i];
				$explode = explode('.', $nombreArchivo);
				$tipoArchivo = array_pop($explode);
				$rutaAlmacenamiento = $_FILES['archivos']['tmp_name'][$i];
				$rutaFinal = $carpetaUsuario . "/" . $nombreArchivo;

                $datos = array(
                    "nombreArchivo" => $nombreArchivo,
                    "tipo" => $tipoArchivo,
                    "ruta" => $rutaFinal,
                    "id_archivo" => $data['id_archivo']
                );

                if ($Gestor->actualizarSeccionArchivo($datos)) {
                    echo "1";
                } else {
                    echo "No se pudo actualizar seccion de archivo";
                }
            }
        } else {
            echo "No se pudo eliminar el archivo";
        }
    } else {
        echo $respuesta;
    }

?>
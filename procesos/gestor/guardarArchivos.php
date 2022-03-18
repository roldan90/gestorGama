<?php 
	session_start();
	require_once "../../clases/Gestor.php";
	if (Gestor::oficioRepetido($_POST['no_oficio'])) {
		$Gestor =  new Gestor();
		$idCategoria = $_POST['categoriasArchivos'];
		$idUsuario = $_SESSION['idUsuario'];
		$asunto = $_POST['asunto'];
		$no_oficio = $_POST['no_oficio'];
		$fecha_oficio = $_POST['fecha_oficio'];
		$remitente_oficio = $_POST['remitente_oficio'];
		$destinatario_oficio = $_POST['destinatario_oficio'];
		$fecha_oficiolimit = $_POST['fecha_oficiolimit'];
		$status_oficio = $_POST['status_oficio'];
		$descripcion = $_POST['descripcion'];

		if($_FILES['archivos']['size'] > 0) {

			$carpetaUsuario = '../../archivos/'.$idUsuario;

			if (!file_exists($carpetaUsuario)) {
				mkdir($carpetaUsuario, 0777, true);
			}

			$totalArchivos = count($_FILES['archivos']['name']);
			for ($i=0; $i < $totalArchivos; $i++) { 

				$nombreArchivo = $_FILES['archivos']['name'][$i];
				$explode = explode('.', $nombreArchivo);
				$tipoArchivo = array_pop($explode);
				$rutaAlmacenamiento = $_FILES['archivos']['tmp_name'][$i];
				$rutaFinal = $carpetaUsuario . "/" . $nombreArchivo;

				$datosRegistroArchivo = array(
						"idUsuario" => $idUsuario,
						"idCategoria" => $idCategoria,
						"no_oficio" => $no_oficio,
						"fecha_oficio" => $fecha_oficio,
						"id_remitente" => $remitente_oficio,
						"id_destinatario" => $destinatario_oficio,
						"fecha_oficiolimit" => $fecha_oficiolimit,
						"nombreArchivo" => $nombreArchivo,
						"tipo" => $tipoArchivo,
						"ruta" => $rutaFinal,
						"asunto" => $asunto,
						"status_oficio" => $status_oficio,
						"descripcion" => $descripcion
				);

				if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
					
					$respuesta = $Gestor->agregaRegistroArchivo($datosRegistroArchivo);
				}
			}

			echo $respuesta;
		} else {
			echo 0;
		}
} else {
	//error no oficio
	echo 'oficio';
}

 ?>
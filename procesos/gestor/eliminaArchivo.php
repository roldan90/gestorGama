<?php 

	session_start();
	require_once "../../clases/Gestor.php";
	$Gestor =  new Gestor();
	$idArchivo = $_POST['idArchivo'];
	
	$datos = $Gestor->obtenNombreArchivo($idArchivo);

	$rutaEliminar = "../../archivos/" . $datos['id_usuario'] . "/" . $datos['nombre'];

	if (unlink($rutaEliminar)) {
		echo $Gestor->eliminarRegistroArchivo($idArchivo);
	} else {
		echo 0;
	}

	
 ?>
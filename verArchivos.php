<?php 
	session_start();
	require_once "clases/Gestor.php";
	$Gestor =  new Gestor();
	$idArchivo = $_GET['idArchivo'];	
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
		crossorigin="anonymous">
		<title>Archivo seleccionado</title>
	</head>
	<body>
		<?php
			if ($_GET['tipo'] == 'pdf') {
				$ruta = $Gestor->obtenerRutaArchivo($idArchivo);
				header('content-type: application/pdf');
				readfile($ruta);
			} else {
				echo $Gestor->obtenerRutaArchivo($idArchivo);
			}
		?>
	</body>
</html>


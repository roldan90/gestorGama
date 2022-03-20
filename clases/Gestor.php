<?php 
	require_once "Conexion.php";
	class Gestor extends Conectar {

		public function agregaRegistroArchivo($datos) {
			$conexion = Conectar::conexion();
			$sql = "INSERT INTO t_archivos (id_usuario,
											id_categoria,
											no_oficio,
											nombre,
											asunto,
											fecha_oficio,
											id_remitente,
											id_destinatario,
											fecha_oficiolimit,
											status_oficio,
											tipo,
											ruta, 
											descripcion)
							VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('iissssiisssss', $datos['idUsuario'],
										$datos['idCategoria'],
										$datos['no_oficio'],
										$datos['nombreArchivo'],
										$datos['asunto'],
										$datos['fecha_oficio'],
										$datos['id_remitente'],
										$datos['id_destinatario'],
										$datos['fecha_oficiolimit'],
										$datos['status_oficio'],
										$datos['tipo'],
										$datos['ruta'],
										$datos['descripcion']);

			$respuesta = $query->execute();
			$query->close();
			return $respuesta;
		}

		public function actualizarArchivo($data) {
			$conexion = Conectar::conexion();

			try {
				$sql = "UPDATE t_archivos SET id_usuario = ?,
											id_categoria = ?,
											no_oficio = ?,
											descripcion = ?,
											asunto = ?,
											fecha_oficio = ?,
											fecha_oficiolimit = ?,
											id_remitente = ?,
											id_destinatario = ?,
											status_oficio = ?
					WHERE id_archivo = ?";
				$query = $conexion->prepare($sql);
				$query->bind_param('iisssssiisi', $data['id_usuario'], 
													$data['categoriasArchivosu'],
													$data['no_oficiou'],
													$data['descripcionu'],
													$data['asuntou'],
													$data['fecha_oficiou'],
													$data['fecha_oficiolimitu'],
													$data['remitente_oficiou'],
													$data['destinatario_oficio'],
													$data['status_oficiou'],
													$data['id_archivo']);
				$respuesta = $query->execute();
				$query->close();
				return $respuesta;
			} catch (\Throwable $th) {
				return $th->getMessage();
			}
		}
		
		public static function oficioRepetido($no_oficio) {
			$conexion = Conectar::conexion();
			$sql = "SELECT * FROM t_archivos WHERE no_oficio = '$no_oficio'";
			$result = mysqli_query($conexion, $sql);
			if (mysqli_num_rows($result) > 0) {
				return false;
			} else {
				return true;
			}
		}

		public function obtenNombreArchivo($idArchivo){
			$conexion = Conectar::conexion();
			$sql = "SELECT nombre, id_usuario
					FROM t_archivos 
					WHERE id_archivo = '$idArchivo'";
			$result = mysqli_query($conexion, $sql);

			$datos = mysqli_fetch_array($result);
			return ["nombre" => $datos['nombre'], "id_usuario" => $datos['id_usuario']];
		}

		public function eliminarRegistroArchivo($idArchivo) {
			$conexion = Conectar::conexion();
			$sql = "DELETE FROM t_archivos WHERE id_archivo = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idArchivo);
			$respuesta = $query->execute();
			$query->close();
			return $respuesta;
		}

		public function obtenerRutaArchivo($idArchivo) {
			$conexion = Conectar::conexion();

			$sql = "SELECT nombre, 
							tipo, 
							id_usuario
					FROM t_archivos 
					WHERE id_archivo = '$idArchivo'";
			
			$result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
			$nombreArchivo = $datos['nombre'];
			$extension = $datos['tipo'];
			$idUsuario = $datos['id_usuario'];

			return self::tipoArchivo($nombreArchivo, $extension, $idUsuario);
		}

		public function editarArchivos($idArchivo) {
			$conexion = Conectar::conexion();
			$sql = "SELECT 
						archivos.id_usuario AS id_usuario,
						archivos.id_archivo AS idArchivo,
						usuario.nombre AS nombreUsuario,
						categorias.nombre AS categoria,
						categorias.id_categoria AS id_categoria,
						archivos.no_oficio AS no_oficio,
						archivos.fecha_oficio AS fecha_oficio,
						remitente.id AS remitente_oficio,
						destino.id AS destinatario_oficio,
						archivos.nombre AS nombreArchivo,
						archivos.fecha_oficiolimit AS fecha_oficiolimit,
						archivos.status_oficio AS status_oficio,
						archivos.tipo AS tipoArchivo,
						archivos.ruta AS rutaArchivo,
						archivos.fecha AS fecha,
						archivos.asunto AS asunto,
						archivos.descripcion AS descripcion
					FROM
						t_archivos AS archivos
							INNER JOIN
						t_usuarios AS usuario ON archivos.id_usuario = usuario.id_usuario
							INNER JOIN
						t_categorias AS categorias ON archivos.id_categoria = categorias.id_categoria
							INNER JOIN
						t_cat_destinatarios AS destino ON archivos.id_destinatario = destino.id
							INNER JOIN
						t_cat_remitente AS remitente ON archivos.id_remitente = remitente.id
					WHERE
						id_archivo = '$idArchivo'";
			
			$result = mysqli_query($conexion, $sql);
			$respuesta = mysqli_fetch_array($result);
			$data = array(
				'id_archivo' => $respuesta['idArchivo'],
				'id_usuario' => $respuesta['id_usuario'],
				'id_categoria' => $respuesta['id_categoria'],
				'no_oficio' => $respuesta['no_oficio'],
				'tipo' => $respuesta['tipoArchivo'],
				'ruta' => $respuesta['rutaArchivo'],
				'descripcion' => $respuesta['descripcion'],
				'asunto' => $respuesta['asunto'],
				'fecha_oficio' => $respuesta['fecha_oficio'],
				'fecha_oficiolimit' => $respuesta['fecha_oficiolimit'],
				'remitente_oficio' => $respuesta['remitente_oficio'],
				'destinatario_oficio' => $respuesta['destinatario_oficio'],
				'status_oficio' => $respuesta['status_oficio'],
				'fecha' => $respuesta['fecha']
			);

			return $data;
			
		}

		public static function tipoArchivo($nombre, $extension, $idUsuario){

			$ruta = "./archivos/".$idUsuario."/".$nombre;
			$extension = strtoupper($extension); 

			switch ($extension) {
				case 'PNG':
					return '<img src="'.$ruta.'" >';
					break;
					
				case 'JPG':
					return '<img src="'.$ruta.'" >';
					break;

				case 'PDF':
					return $ruta;
					break;

				case 'MP3':
					return '<audio controls src="' . $ruta .'"></audio>';
					break;

				case 'MP4':
					return '<video src="'.$ruta.'" controls width="100%" height="600px"></video>';
					break;
				
				case 'JPEG':
					return '<img src="'.$ruta.'" >';
					break;
				
				default:
					# code...
					break;
			}

		}
		
		public static function extensionesValidas() {
			$extensionesValidas = array('PNG', 'JPG', 'PDF', 'MP3', 'MP4', 'JPEG');
			return $extensionesValidas;
		}

		public static function iconosExtenciones($ext) {
			$icono = "";
			switch ($ext) {
				case 'DOCX':
					$icono = '<span style="color:blue" class="fas fa-file-word fa-2x"></span>';
					break;
				case 'DOC':
					$icono = '<span style="color:blue" class="fas fa-file-word fa-2x"></span>';
					break;
				case 'XLS':
					$icono = '<span style="color:green" class="fas fa-file-excel fa-2x"></span>';
					break;
				case 'XLSX':
					$icono = '<span style="color:green" class="fas fa-file-excel fa-2x"></span>';
					break;
				case 'CSV':
					$icono = '<span style="color:green" class="fas fa-file-excel fa-2x"></span>';
					break;
				case 'PDF':
					$icono = '<span style="color:red" class="fas fa-file-pdf fa-2x"></span>';
					break;
				case 'PNG':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'JPG':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'GIF':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'JPEG':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'SVG':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'BMP':
					$icono = '<span style="color:white" class="fas fa-file-image fa-2x"></span>';
					break;
				case 'HTML':
					$icono = '<span style="color:orange" class="fab fa-html5 fa-2x"></span>';
					break;
				case 'PPT':
					$icono = '<span style="color:orange" class="fas fa-file-powerpoint5 fa-2x"></span>';
					break;
				case 'PPTX':
					$icono = '<span style="color:orange" class="fas fa-file-powerpoint fa-2x"></span>';
					break;
				case 'MP3':
					$icono = '<span style="color:purple" class="fas fa-file-audio fa-2x"></span>';
					break;
				case 'MP4':
					$icono = '<span style="color:brown" class="fas fa-file-video fa-2x"></span>';
					break;					
			}

			return $icono;
		} 
	}

 ?>
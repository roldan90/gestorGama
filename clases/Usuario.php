<?php 
	require_once "Conexion.php";
	class Usuario extends Conectar{

		public function agregarUsuario($datos) {
			$conexion = Conectar::conexion();

			if (self::buscarUsuarioRepetido($datos['usuario'])) {
				return 2;
			} else {
				$sql = "INSERT INTO t_usuarios (nombre,
											fechaNacimiento,
											email,
											usuario,
											password,
											old_password) 
							VALUES (?, ?, ?, ?, ?, ?)";
				$query = $conexion->prepare($sql);
				$query->bind_param('ssssss', $datos['nombre'],
											$datos['fechaNacimiento'],
											$datos['email'],
											$datos['usuario'],
											$datos['password'], 
											$datos['old_password']);
				$exito = $query->execute();
				$query->close();
				if($exito){
					return 1;
				}
				return 0;
			}
		}

		public static function buscarUsuarioRepetido($usuario) {
			$conexion = Conectar::conexion();

		    	$sql = "SELECT usuario 
				         FROM t_usuarios 
				         WHERE usuario = '$usuario'";
			$result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);

			if ($datos != NULL) {
				if ($datos['usuario'] != "" || $datos['usuario'] == $usuario) {
					return 1;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}

		public function login($usuario, $password) {
			$conexion = Conectar::conexion();

			$sql = "SELECT count(*) as existeUsuario 
					FROM t_usuarios 
					WHERE usuario = '$usuario' 
						AND password = '$password'";
			$result = mysqli_query($conexion, $sql);

			$respuesta = mysqli_fetch_array($result)['existeUsuario'];

			if ($respuesta > 0) {

				$sql = "SELECT id_usuario, rol, activo
						FROM t_usuarios 
						WHERE usuario = '$usuario' 
						AND password = '$password'";
				$result = mysqli_query($conexion ,$sql);
				$datos = mysqli_fetch_row($result);
				
				if ($datos[2] == 1) {
					$_SESSION['usuario'] = $usuario;
					$_SESSION['idUsuario'] = $datos[0];
					$_SESSION['rol'] = $datos[1];
					return 1;
				} else {
					return 2;
				}

			} else {
				return 0;
			}
		}

		public static function emailRepetido($email) {
			$conexion = Conectar::conexion();
			$sql = "SELECT * FROM t_usuarios WHERE email = '$email'";
			$result = mysqli_query($conexion, $sql);
			if (mysqli_num_rows($result) > 0) {
				return false;
			} else {
				return true;
			}
		}

		public static function recuperarOldPassword($email){
			$conexion = Conectar::conexion();
			$sql = "SELECT email FROM t_usuarios WHERE email = '$email'";
			$result = mysqli_query($conexion, $sql);
			return mysqli_fetch_row($result)[0];
		}

		public static function recuperarUsuario($email){
			$conexion = Conectar::conexion();
			$sql = "SELECT usuario FROM t_usuarios WHERE email = '$email'";
			$result = mysqli_query($conexion, $sql);
			return mysqli_fetch_row($result)[0];
		}

		public function enviarMailRecuperarPassword($email) {	
			
			$mensaje = "Tus credenciales Son:\r\nUsuario: ". self::recuperarUsuario($email) ."\r\nPassword: " . self::recuperarOldPassword($email);
			$respuesta = mail($email, "Recuperacion de contraseña", $mensaje);
			if ($respuesta) {
				return 1;
			} else {
				return 0;
			}
		}

		public static function usuarioActivoSiNo($idUsuario) {
			$conexion = Conectar::conexion();
			$sql = "SELECT activo FROM t_usuarios WHERE id_usuario = '$idUsuario'";
			$result = mysqli_query($conexion, $sql);
			$activo = mysqli_fetch_array($result)[0];
			return $activo;
		}

		public function cambiarEstadoUsuario($idUsuario) {

			$activoSiNo = self::usuarioActivoSiNo($idUsuario);

			if ($activoSiNo) {
				$activoSiNo = 0;
			} else {
				$activoSiNo = 1;
			}

			$conexion = Conectar::conexion();
			$sql = "UPDATE t_usuarios SET activo = ? WHERE id_usuario = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('ii', $activoSiNo, $idUsuario);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function cambiarPasswordUsuario($idUsuario, $password, $passwordOld) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_usuarios 
					SET password = ?, old_password = ? 
					WHERE id_usuario = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('ssi', $password, $passwordOld, $idUsuario);
			$respuesta = $query->execute();
			return $respuesta;
		}

		public function editarUsuario($idUsuario) {
			$conexion = Conectar::conexion();
			$sql = "SELECT id_usuario,
							nombre,
							fechaNacimiento,
							email,
							usuario,
							rol,
							activo 
					FROM t_usuarios 
					WHERE id_usuario = '$idUsuario'";
			$result = mysqli_query($conexion, $sql);
			$data = mysqli_fetch_array($result);

			$usuarioDatos = array(
				'idUsuarioUpdate' => $data['id_usuario'],
				'nombreu' => $data['nombre'],
				'fechaNacimientou' => self::formatoFecha($data['fechaNacimiento']),
				'correou' => $data['email'],
				'usuariou' => $data['usuario'],
				'rolUsuario' => $data['rol']
			);

			return $usuarioDatos;
		}

		public  function formatoFecha($fecha) {
			$fecha = explode("-", $fecha);
			$fecha2 = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
			
			return $fecha2;
		}

		public function actualizarUsuario($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_usuarios 
					SET nombre = ?, 
						fechaNacimiento = ?, 
						email = ?, 
						usuario = ?, 
						rol = ? 
					WHERE id_usuario = ?";
			$query = $conexion->prepare($sql);
			$fecha = self::formatoFecha($datos['fechaNacimiento']);
			$query->bind_param('sssssi', $datos['nombre'], 
										$fecha,
										$datos['email'],
										$datos['usuario'],
										$datos['rol'],
										$datos['idUsuario']);
			$respuesta = $query->execute();
			return $respuesta;
		}
	}
	
 ?>

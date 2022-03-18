<?php 

	class Conectar{
		public static function conexion() {
			$servidor = "localhost";
			$usuario = "root";
			$password = "autodidacta";
			$base = "gestorjose";

			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$base);
			$conexion->set_charset('utf8mb4');
			return $conexion;
		}
	}

 ?>
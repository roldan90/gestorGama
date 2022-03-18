<?php session_start(); 
	require_once "../../clases/Conexion.php";
	$c = new Conectar();
	$conexion = $c->conexion();
	$idCategoria = $_GET['idCategoria'];
	$sql = "SELECT id_categoria, 
					nombre 
			FROM t_categorias";
	$result = mysqli_query($conexion, $sql);
 ?>

<select name="categoriasArchivosu" id="categoriasArchivosu" class="form-control"> 
 	<?php
 		while($mostrar = mysqli_fetch_array($result)){ 
 			
			if($mostrar['id_categoria'] == $idCategoria) {
 	?>
				<option selected value="<?php echo $mostrar['id_categoria'] ?>"><?php echo $mostrar['nombre']; ?></option>
 	<?php 
 			} else {
	?>
				<option value="<?php echo $mostrar['id_categoria'] ?>"><?php echo $mostrar['nombre']; ?></option>
	<?php
			 }
		}
 	 ?>
 </select>
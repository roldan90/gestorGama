<?php session_start(); 
	require_once "../../clases/Conexion.php";
	$c = new Conectar();
	$conexion = $c->conexion();
	$id = $_GET['id'];
	$sql = "SELECT id, 
					nombre 
			FROM t_cat_remitente";
	$result = mysqli_query($conexion, $sql);
 ?>

<label for="remitente_oficiou"><b>Remitente:</b></label>
<select class="form-control" type="text" id="remitente_oficiou" name="remitente_oficiou" placeholder="Remitente" required >
    <option selected value=""> Elige Remitente </option>
 	<?php
 		while($mostrar = mysqli_fetch_array($result)){ 
 		$idRemitente = $mostrar['id'];
		if($mostrar['id'] == $id) {
	?>
			<option selected value="<?php echo $idRemitente ?>"><?php echo $mostrar['nombre']; ?></option>
	<?php 
		 } else { 
 	?>
 			<option value="<?php echo $idRemitente ?>"><?php echo $mostrar['nombre']; ?></option>
 	<?php 
	 		}
 		}
 	 ?>
 </select>
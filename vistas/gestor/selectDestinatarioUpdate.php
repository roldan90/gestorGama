<?php session_start(); 
	require_once "../../clases/Conexion.php";
	$c = new Conectar();
	$conexion = $c->conexion();	
	echo $id = $_GET['id'];
	$sql = "SELECT id, 
					nombre 
			FROM t_cat_destinatarios";
	$result = mysqli_query($conexion, $sql);
 ?>

<label for="destinatario_oficio"><b>Destinatario:</b></label>
<select class="form-control" type="text" id="destinatario_oficio" name="destinatario_oficio" placeholder="Destinatario" required >
    <option selected value="No Especificado"> Elige Destinatario </option>
	<?php
 		while($mostrar = mysqli_fetch_array($result)){ 
 		$idDestinatario = $mostrar['id'];
		if($mostrar['id'] == $id) {
	?>
			<option selected value="<?php echo $idDestinatario ?>"><?php echo $mostrar['nombre']; ?></option>
	<?php 
		 } else { 
 	?>
 			<option value="<?php echo $idDestinatario ?>"><?php echo $mostrar['nombre']; ?></option>
 	<?php 
	 		}
 		}
 	 ?>
 </select>
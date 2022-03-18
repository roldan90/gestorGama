<?php session_start(); 
	require_once "../../clases/Conexion.php";
	$c = new Conectar();
	$conexion = $c->conexion();

	$sql = "SELECT id, 
					nombre 
			FROM t_cat_remitente";
	$result = mysqli_query($conexion, $sql);
 ?>

<label for="remitente_oficio"><b>Remitente:</b></label>
<select class="form-control" type="text" id="remitente_oficio" name="remitente_oficio" placeholder="Remitente" required >
    <option selected value=""> Elige Remitente </option>
 	<?php
 		while($mostrar = mysqli_fetch_array($result)){ 
 		$idRemitente = $mostrar['id'];  
 	?>
 		<option value="<?php echo $idRemitente ?>"><?php echo $mostrar['nombre']; ?></option>
 	<?php 
 		}
 	 ?>
 </select>
<?php session_start();
	require_once "../../clases/Gestor.php";
	$conexion = Conectar::conexion();
	$idUsuario = $_SESSION['idUsuario'];
	$sql = "SELECT 
				archivos.id_archivo AS idArchivo,
				usuario.nombre AS nombreUsuario,
				categorias.nombre AS categoria,
				archivos.no_oficio AS no_oficio,
				archivos.fecha_oficio AS fecha_oficio,
				remitente.nombre AS remitente_oficio,
				destino.nombre AS destinatario_oficio,
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
			ORDER BY nombreArchivo";
	$result = mysqli_query($conexion, $sql);

 ?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-dark  dt-responsive nowrap" style="width: 100%;" id="tablaGestorDataTable">
				<thead>
					<tr>
					    <th>NO. OFICIO</th>
						<th>NOMBRE ARCHIVO</th>
						<th>ASUNTO</th>
						<th>REMITENTE</th>
						<th>DESTINATARIO</th>
						<th>DESCRIPCIÓN</th>
						<th>FECHA OFICIO</th>
						<th>FECHA RESPUESTA</th>
						<th>STATUS OFICIO</th>
						<th>CATEGORÍA</th>
						<th>FECHA SUBIDA</th>
						<th>EXTENSION</th>
						<th>DESCARGAR</th>
						<th>VISUALIZAR</th>
						<th>EDITAR</th>
						<th>ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					while($mostrar = mysqli_fetch_array($result)) { 

						$rutaDescarga = "../archivos/".$idUsuario."/".$mostrar['nombreArchivo'];
						$nombreArchivo = $mostrar['nombreArchivo'];
						$idArchivo = $mostrar['idArchivo'];
				 ?>
					<tr>
					    <td><?php echo $mostrar['no_oficio'] ?></td>
						<td><?php echo $mostrar['nombreArchivo']; ?></td>
						<td><?php echo $mostrar['asunto'] ?></td>
						<td><?php echo $mostrar['remitente_oficio'] ?></td>
						<td><?php echo $mostrar['destinatario_oficio'] ?></td>
						<td><?php echo $mostrar['descripcion'] ?></td>
						<td><?php echo $mostrar['fecha_oficio'] ?></td>
						<td><?php echo $mostrar['fecha_oficiolimit'] ?></td>
						<td><?php echo $mostrar['status_oficio'] ?></td>
						<td><?php echo $mostrar['categoria']; ?></td>

						<td><?php echo $mostrar['fecha'] ?></td>
						<td class="text-center">
							<?php 
								
								$extension = strtoupper($mostrar['tipoArchivo']);
								if(Gestor::iconosExtenciones($extension) != ""){
									echo Gestor::iconosExtenciones($extension);
								} else {
									echo $extension;
								}
							?>
						</td>
						<td>
							<a href="<?php echo $rutaDescarga; ?>" 
								download="<?php echo $nombreArchivo; ?>" class="btn btn-success btn-sm">
								<span class="fas fa-download"></span>
							</a>
						</td>
						<td>
							<?php 
								$extensionesValidas = Gestor::extensionesValidas();
								for ($i=0; $i < count($extensionesValidas); $i++) { 
									if ($extensionesValidas[$i] == $extension) {
							?>
									<a href="../verArchivos.php?idArchivo=<?php echo $idArchivo; ?>&tipo=<?php echo $mostrar['tipoArchivo']; ?>" 
										target="_blank"
										class="btn btn-primary btn-sm">
										<span class="fas fa-eye"></span>
									</a>
							<?php
									}
								}
							 ?>
						</td>
						<td>
							<span class="btn btn-warning btn-sm" 
							data-toggle="modal" data-target="#editarArchivo"
								onclick="editarArchivo('<?php echo $idArchivo; ?>')">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<?php if ($_SESSION['rol'] == 'administrador') {?>
								<span class="btn btn-danger btn-sm" 
									onclick="eliminarArchivo('<?php echo $idArchivo ?>')">
									<span class="fas fa-trash-alt"></span>
								</span>
							<?php } ?>
						</td>
					</tr>
				<?php
					} 
				 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaGestorDataTable').DataTable({ 
			language : {
				url : "../js/datatable_es.json"
            }
		});
	});
</script>
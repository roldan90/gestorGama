<?php session_start();
	require_once "../../clases/Conexion.php";
	$idUsuario = $_SESSION['idUsuario'];
	$conexion = new Conectar();
	$conexion = $conexion->conexion();

	$sql = "SELECT id_categoria,
					nombre, 
					fechaInsert
			FROM t_categorias "; 
	$result = mysqli_query($conexion, $sql);

 ?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
		<table class="table table-hover table-dark  dt-responsive nowrap" style="width: 100%;" id="tablaCategoriasDataTable">
				<thead>
					<tr >
						<th>NOMBRE</th>
						<th>FECHA</th>
						<th>EDITAR</th>
						<th>ELIMINAR</th>
					</tr>
				</thead>
				<tbody>

				<?php
					while($mostrar = mysqli_fetch_array($result)){ 
						$idCategoria = $mostrar['id_categoria'];
				?>
					<tr style="text-align: center;">
						<td><?php echo $mostrar['nombre']; ?></td>
						<td><?php echo $mostrar['fechaInsert']; ?></td>
						<td>
							<span class="btn btn-warning btn-sm" 
								onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')"
								data-toggle="modal" data-target="#modalActualizarCategoria">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class="btn btn-danger btn-sm" 
									onclick="eliminarCategorias('<?php echo $idCategoria ?>')" >
								<span class="fas fa-trash-alt"></span>
							</span>
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
		$('#tablaCategoriasDataTable').DataTable({ 
			language : {
                url : "../js/datatable_es.json"
            }
		});
	});
</script>

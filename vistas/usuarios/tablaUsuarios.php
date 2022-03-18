<?php session_start(); 
    require_once "../../clases/Usuario.php";
    $conexion = Conectar::conexion();
    $sql = "SELECT * FROM t_usuarios";
    $result = mysqli_query($conexion, $sql);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover table-dark dataTable no-footer dt-responsive nowrap" style="width: 100%;" id="tablaUsuariosDatatable">
                <thead>
                    <th>NOMBRE</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>EMAIL</th>
                    <th>USUARIO</th>
                    <th>ROL DE USUARIO</th>
                    <th>ROL STATUS</th>
                    <th>CAMBIAR CONTRASEÑA</th>
                    <th>EDITAR</th>
                    <th>ACTIVO/INACTIVO</th>
                </thead>
                <tbody>
                <?php
                    while ($mostrar = mysqli_fetch_array($result)) { 
                ?>
                    <tr>
                        <td><?php echo $mostrar['nombre']; ?></td>
                        <td><?php echo $mostrar['fechaNacimiento']; ?></td>
                        <td><?php echo $mostrar['email'] ?></td>
                        <td><?php echo $mostrar['usuario']; ?></td>
                        <td><?php echo $mostrar['rol']; ?></td>
                        <td class="text-center">
                            <?php
                                if ($mostrar['activo']) {
                            ?>
                                <span class="badge badge-success">
                                    <span class="fas fa-user-shield"></span>
                                </span>
                            <?php 
                                } else {
                            ?>
                                <span class="badge badge-danger">
                                    <span class="fas fa-user-slash"></span>
                                </span>
                            <?php 
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalResetPassword" 
                                onclick="agregarIdUsuario('<?php echo $mostrar['id_usuario'] ?>')">
                                <span class="fas fa-user-cog"></span>
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizarUsuario" 
                                onclick="editarUsuario('<?php echo $mostrar['id_usuario'] ?>')">
                                <span class="fas fa-user-edit"></span>
                            </span>
                        </td>
                        <td class="text-center">
                            <?php
                                if ($mostrar['activo']) {
                            ?>
                                <span class="btn btn-danger btn-sm" onclick="desactivarUsuario('<?php echo $mostrar['id_usuario'] ?>')">
                                    <span class="fas fa-user-alt-slash"></span>
                                </span>
                            <?php 
                                } else {
                            ?>
                                <span class="btn btn-success btn-sm" onclick="desactivarUsuario('<?php echo $mostrar['id_usuario'] ?>')">
                                    <span class="fas fa-user-check"></span>
                                </span>
                            <?php
                                }
                            ?>
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
		$('#tablaUsuariosDatatable').DataTable({ 
			language : {
				url : "../js/datatable_es.json"
            }
		});
	});
</script>
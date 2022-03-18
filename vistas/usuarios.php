<?php session_start();
	if ( isset($_SESSION['usuario']) && $_SESSION['rol'] == 'administrador' ) {
		include "header.php"; 
?>
<!--Box MODULO USUARIOS-->
<div class="container my-4">
<div class="row">
    <div class="col-md-12">
        <div class="card">
             <div class="card-header">
			<h2 class="section-title text-left wow fadeInDown"><span class="fas fa-users"></span> Modulo Usuarios</h2>
			<span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
					<span class="fas fa-plus-circle"></span> Agregar usuarios
				</span>
            </div>
            <div class="card-body">
			<div id="tablaUsuarios"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--FIN Box MODULO USUARIOS-->

<!-- Modal AGREGAR USUARIOS-->
<form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
    <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalAgregarUsuario" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
               <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
                  <h5 class="modal-title" id="modalAgregarUsuario">Agregar Usuario</h5>
                    <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label><b>Nombre Completo:</b></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required="">
                    <label><b>Fecha de Nacimiento:</b></label>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="" readonly="">
                    <label><b>Correo Electronico:</b></label>
                    <input type="email" name="correo" id="correo" class="form-control" required="">
                    <label><b>Nombre de Usuario:</b></label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required="">
                    <label><b>Ingresar Contraseña:</b></label>
                    <input type="password" name="password" id="password" class="form-control" required="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Registrar</button>
                    <span class="btn btn-dark" data-dismiss="modal">Cerrar</span>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal EDITAR USUARIOS-->
<form id="frmActualizarUsuario" method="post" onsubmit="return actualizarUsuario()" autocomplete="off">
    <div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
               <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Datos de Usuario</h5>
                    <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="idUsuarioUpdate" id="idUsuarioUpdate" hidden>
                    <label><b>Nombre Completo:</b></label>
                    <input type="text" name="nombreu" id="nombreu" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required="">
                    <label><b>Fecha de nacimiento:</b></label>
                    <input type="text" name="fechaNacimientou" id="fechaNacimientou" class="form-control" required="" readonly="">
                    <label><b>Email o correo:</b></label>
                    <input type="email" name="correou" id="correou" class="form-control" required="">
                    <label><b>Nombre de usuario:</b></label>
                    <input type="text" name="usuariou" id="usuariou" class="form-control" required="">
                    <label><b>Rol de usuario:</b></label>
                    <select name="rolUsuario" id="rolUsuario" class="form-control" require>
                        <option value="estandar">Estandar</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnActualizaUsuario">Actualizar</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal" 
        	                id="btnCerrarUpdateUsuario">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
</form>

<!-- Modal CAMBIAR PASSWORD-->
<form id="frmCambiarPassword" method="POST" onsubmit="return cambiarPasswordUsuario()">
    <div class="modal fade" id="modalResetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
               <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
                  <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="idUsuarioReset" id="idUsuarioReset" hidden>
                <label for=""><b>Nueva Contaseña:</b></label>
                <input type="text" class="form-control" name="nuevoPassword" id="nuevoPassword" required>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Cambiar</button>
                <span class="btn btn-dark" data-dismiss="modal">Cerrar</span>
            </div>
            </div>
        </div>
    </div>
</form>


<!--Dependencia de USUARIOS, todas las funciones js de USUARIOS-->
<?php include "footer.php"; ?>
<script src="../js/usuarios.js"></script>

<?php 
	} else {
		header("location:../index.php");
	}
?>
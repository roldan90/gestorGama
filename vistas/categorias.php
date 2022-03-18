<?php 
	session_start();
	if (isset($_SESSION['usuario'])) {
		include "header.php";
?>

	<!--Box MODULO CATEGORIAS-->
<div class="container my-4">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
			<h2 class="section-title text-left wow fadeInDown"><span class="fas fa-list-ul"></span> Modulo Categorías</h2>
			<span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregaCategoria">
							<span class="fas fa-plus-circle"></span> Agregar Categoría
			</span>
            </div>
            <div class="card-body">
			<div id="tablaCategorias"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--FIN Box MODULO CATEGORIAS-->

<!-- Modal -->
<div class="modal fade" id="modalAgregaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
  <div class="modal-content">
      <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Categoría</h5>
        <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmCategorias">
        	<label><b>Nombre de la Categoría:</b></label>
        	<input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnGuardarCategoria">Guardar</button>
		<button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal CATEGORIAS -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<form id="frmActualizaCategoria">
      			<input type="text" id="idCategoria" name="idCategoria" hidden="">
	        	<label>Categoria</label>
	        	<input type="text" id="categoriaU" name="categoriaU" class="form-control">
      		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal" 
        	id="btnCerrarUpdateCategoria">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnActualizaCategoria">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<?php
		include "footer.php"; 
?>
	<!--Dependencia de categorias, todas las funciones js de categorias-->
	<script src="../js/categorias.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaCategorias').load("categorias/tablaCategoria.php");

			$('#btnGuardarCategoria').click(function(){
				agregarCategoria();
			});

			$('#btnActualizaCategoria').click(function(){
				actualizaCategoria();
			});
		});
	</script>
<?php 		
	} else {
		header("location:../index.php");
	}
?>
<?php session_start();
	if (isset($_SESSION['usuario'])) {
       
		include "header.php"; 

       
?>
    <!--Box MODULO GESTOR DE ARCHIVOS-->
    <div class="container my-4" >
    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">
                <h2 class="section-title text-left wow fadeInDown"><span class="far fa-folder-open"></span> Modulo Archivos</h2>
                    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos" >
                        <span class="fas fa-plus-circle"></span> Agregar archivos
                    </span>
                </div>
                <div class="card-body">
                <div id="tablaGestorArchivos"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--FIN Box MODULO GESTOR DE ARCHIVOS-->


<?php 
     include "./gestor/modal_agregar.php";
    include "./gestor/modal_actualizar.php";

    // Modal GUARDAR ARCHIVOS GESTOR
   
    //Modal VISUALIZADOR ARCHIVOS
    include "./gestor/modal_visualizar.php";

    
?>

<?php include "footer.php"; ?>
<script src="../js/gestor.js"></script>
<?php 		
	} else {
		header("location:../index.php");
	}
?>

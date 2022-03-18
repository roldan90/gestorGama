<?php session_start();

if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<div class="jumbotron">
				<h2 class="section-title text-center wow fadeInDown"><span class="fa fa-users"></span> Bienvenid@s</h2>
				<p class="text-center wow fadeInDown">¡Hola! <strong>Sistema de Informacion CIFAD </strong>es una aplicacion web a cargo de la <strong>Coordinacion de Instituciones Formadoras y Actualizadoras de Docentes (CIFAD) </strong>, 
            aplicación para almacenar documentos.</p>
					<hr class="my-4">
					<p><img src="../img/logo.png" width="300px" /></p>
					<p class="lead">
						<a class="btn btn-primary btn-md" href="gestor.php" role="button">INICIAR</a>
					</p>
				</div>


			</div>
		</div>
	</div>

	<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CIFAD | Sistema de Informacion</title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../librerias/datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/datatable/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.css">
	<link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body style="background-color: #e9ecef">
	<!-- Barra de Navegacion MENU SUPERIOR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand" href="inicio.php">
				<img src="../img/logo.png" alt="" width="50px"><span class="logo-lg"></span>
			</a>
			<div class="box-title" >
            <b><label class="box-title" style="text-align:center; color:#fff; font-size:18px;" >SISTEMA DE INFORMACIÓN</label>
            </div></b>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="inicio.php"> <span class="fas fa-home"></span> Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="categorias.php"> <span class="fas fa-list-ul"></span> Categorias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="gestor.php"> <span class="far fa-folder-open"></span> Archivos</a>
					</li>

                    <!-- INICIO RESTRICCION - SOLO ADMINISTRADORES VEN MODULO USUARIOS-->
					<?php
						if ($_SESSION['rol'] == 'administrador') {
					?>
						<li class="nav-item">
							<a class="nav-link" href="usuarios.php"> <span class="fas fa-users"></span> Usuarios</a>
						</li>
					<?php 
						} 
					?>

					 <!-- FIN RESTRICCION - SOLO ADMINISTRADORES VEN MODULO USUARIOS-->
					<!--<li class="nav-item" >
						<a class="nav-link" href="../procesos/usuario/salir.php"> <span class="fa fa-sign-out-alt"></span> Salir </a>
					</li>-->

                    <!-- INICIO - Sidebar Toggle USUARIO CONECTADO-->
					<nav class="navbar navbar-static-top">
						<ul class="nav navbar-nav">
							<a style="text-decoration:none" href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../img/user_imagen.png" class="user-image" width="25px" class="logo-xs">
							<span class="hidden-xs" style="text-align:center; color:#fff; font-size:16px;"><b><?php echo $_SESSION['usuario'];?></b></span>
							</a>
							<ul class="dropdown-menu" style="text-align:center;">
							<!-- Mostar Imagen Usuario -->
							<li class="nav-item">
								<img src="../img/user_imagen.png" class="img-circle" width="100px" alt="Usuario">
								<p>
								<span class="hidden-xs" style="text-align:center; color:#7a0626; font-size:16px;"><b>Usuario: <?php echo $_SESSION['usuario']; ?></b></span>
								</p>
							</li>
							<!-- Menu Salir Usuario-->
							<li class="nav-item">
								<div class="pull-center">
								<a href="../procesos/usuario/salir.php" class="fa fa-sign-out-alt"> Salir</a>
								</div>
							</li>
							</ul>
						</ul>
					</nav>
					<!-- FIN - Sidebar Toggle USUARIO CONECTADO-->

				</ul>
			</div>
		</div>
	</nav>
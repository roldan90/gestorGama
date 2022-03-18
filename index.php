<!DOCTYPE html>
<html>
<head>
    <title>CIFAD | Sistema de Informacion CIFAD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Theme style LOGIN -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="css/blue.css">
    <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body style="background-color:#7a0626;">
	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->
    <div class="fadeIn first">
      <p></p>
      <img src="img/logo.png" width="150px" id="icon" alt="User Icon" />
      <h1 style="text-align:center; font-size:30px;"><b>Sistema de Información CIFAD</b></h1>
    </div>

    <!-- Login Form -->
    <form method="post" id="frmLogin" onsubmit="return logear()">
    <div class="form-group has-feedback">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario" required="">
      </div>
      <div class="form-group has-feedback">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required="">
      </div>
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Recuperar Contraseña -->
    <div id="formFooter" style="color: #ffffff; background: #7a0626; border-bottom: solid 10px #222d32;">
    <span data-toggle="modal" data-target="#modalRecuperarpassword">
    <a class="underlineHover" style="color:#fff;"> ¿Has olvidado la contraseña?</a>
  </span>
     </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalRecuperarpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmRecuperar" method="post" onsubmit="return recuperarPassword()" autocomplete="off">
          <label for="email">Escribe tu Email:</label>
            <input type="email" class="form-control" require id="email" name="email" required>
               <br>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark">Enviar</button>
        <a href="index.php" class="btn btn-danger"> Cerrar</a>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Llamado a librerias-->
<!-- jQuery -->
<script src="librerias/jquery-3.4.1.min.js"></script>
<!-- Sweetalert -->
<script src="librerias/sweetalert.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="librerias/bootstrap4/bootstrap.min.js"></script>
<!-- JS Recuperar contraseña -->
<script src="js/recuperar.js"></script>
<script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	function logear() {
		$.ajax({
			type:"POST",
			data:$('#frmLogin').serialize(),
			url:"procesos/usuario/login/login.php",
			success:function(respuesta) {
				console.log(respuesta);
				respuesta = respuesta.trim();
				if (respuesta == 1) {
					window.location = "vistas/inicio.php";
				} else if (respuesta == 2) {
					swal(`Usuario inactivo, informar al administrador de sitio para que el usuario pueda ser utilizado`);    
				} else {
					swal("Error de Acceso!", "Usuario y/o Contraseña son incorrectos.", "error");
				}
			}
		});
		return false;
	}
</script>

</body>
</html> 



$(document).ready(function() {
	$('#tablaGestorArchivos').load("gestor/tablaGestor.php");
	$('#categoriasLoad').load("categorias/selectCategorias.php");
	$('#controlRemitente').load("gestor/selectRemitente.php");
	$('#controlDestinatario').load("gestor/selectDestinatario.php");
	$('#btnGuardarArchivos').click(function(){
		agregarArchivosGestor();
	});

});

function agregarArchivosGestor() {
	var formData = new FormData(document.getElementById('frmArchivos'));

	if ($('#categoriasArchivos').val() == "") {
		swal("Elige una categoria!", "", "error");
		return false;
	} else if ($('#no_oficio').val() == "") {
		swal("Espeficifica un No. de Oficio!", "", "error");
		return false;
	} else if ($('#asunto').val() == "") {
		swal("Especifica Asunto del Oficio!", "", "error");
		return false;
	} else if ($('#descripcion').val() == "") {
		swal("Escribe la descripcion del Oficio!", "", "error");
		return false;
	} else if ($('#fecha_oficio').val() == "") {
		swal("Especifica la fecha del Oficio!", "", "error");
	} else if ($('#remitente_oficio').val() == "") {
		swal("Especifica el remitente del Oficio!", "", "error");
		return false;
	} else if ($('#destinatario_oficio').val() == "") {
		swal("Especifica el destinatario del Oficio!", "", "error");
		return false;
	} else if ($('#status_oficio').val() == "") {
		swal("Especifica el status del Oficio!", "", "error");
		return false;
	} else if ($('#archivos').val() == "") {
		swal("Selecciona un Archivo!", "", "error");
		return false;
	}

	
	$.ajax({
		url:"../procesos/gestor/guardarArchivos.php",
		type:"POST",
		datatype: "html",
		data: formData,
		cache:false,
		contentType:false,
		processData:false,
		success:function(respuesta){
			console.log(respuesta);
			respuesta = respuesta.trim();

			if (respuesta == 1) {
				$('#frmArchivos')[0].reset();
				$('#tablaGestorArchivos').load("gestor/tablaGestor.php");
				swal("Excelente!", "Archivo agregado correctamente!", "success");
			} else if (respuesta == 'oficio') {
                swal("No. de Oficio ya existe!", "por favor registra uno diferente!", "error");
			} else {
				swal("Ocurrió un error!", "Verifica los datos del registro!", "error");
			}
		}
	});
} 

function eliminarArchivo(idArchivo) {
	swal({
	  title: "Estas seguro de eliminar este archivo?",
	  text: "Una vez eliminado, no podra recuperarse!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    	$.ajax({
	    		type:"POST",
	    		data:"idArchivo=" + idArchivo,
	    		url:"../procesos/gestor/eliminaArchivo.php",
	    		success:function(respuesta){
	    			console.log(respuesta);
	    			respuesta = respuesta.trim();
	    			if (respuesta == 1) {

	    				$('#tablaGestorArchivos').load("gestor/tablaGestor.php");
	    				swal("Eliminado con exito!", {
	      					icon: "success",
	    				});
	    			} else {
	    				swal("Error al eliminar!", {
	      					icon: "error",
	    				});
	    			}

	    			
	    		}
	    	});
	  } 
	});
}

function obtenerArchivoPorId(idArchivo) {
	$.ajax({
		type:"POST",
		data:"idArchivo=" + idArchivo,
		url:"../procesos/gestor/obtenerArchivo.php",
		success:function(respuesta){
			console.log(respuesta);
			$('#archivoObtenido').html(respuesta);
		}
	});
}


function editarArchivo(idArchivo) {
	$.ajax({
		type:"POST",
		data:"idArchivo=" + idArchivo,
		url:"../procesos/gestor/editarArchivo.php",
		success:function(respuesta) {
			console.log(respuesta);
			respuesta = jQuery.parseJSON(respuesta);
			
			$('#no_oficiou').val(respuesta['no_oficio']);
			$('#fecha_oficiolimitu').val(respuesta['fecha_oficiolimit']);
			$('#asuntou').val(respuesta['asunto']);
			$('#fecha_oficiou').val(respuesta['fecha_oficio']);
			$('#descripcionu').val(respuesta['descripcion']);
			$('#status_oficiou').val(respuesta['status_oficio']);
			$('#categoriasLoadu').load("categorias/selectCategoriasUpdate.php?idCategoria=" + respuesta['id_categoria']);
			$('#remitenteIdUpdate').load("gestor/selectRemitenteUpdate.php?id=" + respuesta['remitente_oficio']);
			$('#destinatarioIdUpdate').load("gestor/selectDestinatarioUpdate.php?id=" + respuesta['destinatario_oficio']);
		}
	});
}
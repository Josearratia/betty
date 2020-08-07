function agregarUsuario(nombre, apellido, email) {
	cadena = "nombre=" + nombre + "&apellido=" + apellido + "&email=" + email;
	
	$.ajax({
		type:"POST", url:"php/agregarUsuario.php", data:cadena,
		success:function(r) {
			if(r == 1) {
				$('#tabla').load('registros/tabla.php');
				alertify.success("Usuario agregado...)");
			} else {
				alertify.error("Error al agregar");
			}
		}
	});
}

function agregarFormulario(datos) {
	d = datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#apellidou').val(d[2]);
	$('#emailu').val(d[3]);
}

function actualizarDU() {
	id = $('#idpersona').val();
	nombre = $('#nombreu').val();
	apellido = $('#apellidou').val();
	email = $('#emailu').val();

	cadena = "id=" + id + "&nombre=" + nombre + "&apellido=" + apellido + "&email=" + email;

	$.ajax({
		type:"POST", url:"php/actualizarDU.php", data:cadena,
		success:function(r){
			
			if(r == 1) {
				$('#tabla').load('registros/tabla.php');
				alertify.success("Datos actualizados...");
			}  else {
				alertify.error("Error al actualizar");
			}
		}
	});
}

function eliminarConfirmacion(id) {
	alertify.confirm('Eliminar usuario', '¿Está seguro que desea eliminar el registro?', 
		function(){ eliminarDatos(id) }
		, function(){ alertify.error('Error al borrar')});
}

function eliminarDatos(id) {
	cadena = "id=" + id;

	$.ajax({
		type:"POST", url:"php/eliminarDatos.php", data:cadena,
		success:function(r) {
			if(r==1) {
				$('#tabla').load('registros/tabla.php');
				alertify.success("Usuario eliminado...");
			} else {
				alertify.error("Error al borrar");
			}
		}
	});
}
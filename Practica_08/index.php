<?php 
  session_start();
  unset($_SESSION['consulta']);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Práctica 08</title>	
</head>
<body>
  <div class="jumbotron text-center">
    <h1>Práctica 08</h1>
    <h3>Registro de usuarios</h3>
  </div>

	<div class="container">
		<div id="tabla"></div>
	</div>

  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar nuevo usuario</h4>
        </div>
        <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellido" class="form-control input-sm">
        	<label>Correo</label>
        	<input type="text" name="" id="email" class="form-control input-sm">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id="guardarnuevo">Aceptar</button>    
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        </div>

        <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellidou" class="form-control input-sm">
        	<label>Correo</label>
        	<input type="text" name="" id="emailu" class="form-control input-sm">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

  <script src="js/funciones.js"></script>
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script> 
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tabla').load('registros/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function() {
          nombre = $('#nombre').val();
          apellido = $('#apellido').val();
          email = $('#email').val();
            agregarUsuario(nombre, apellido, email);
        });

        $('#actualizadatos').click(function() {
          actualizarDU();
        });
    });
</script>
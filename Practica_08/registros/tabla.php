<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 ?>

<div class="row">
	<div class="col-sm-12 text-center">
	<h2>Registro de usuarios</h2>
		<table class="table table-striped table-dark">
		<caption>
			<button class="btn btn-link" data-toggle="modal" data-target="#modalNuevo"> Agregar usuario </button>
		</caption>
		<thead class="thead-dark">
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Correo</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>

			<?php 
				if(isset($_SESSION['consulta'])) {
					if($_SESSION['consulta'] > 0) {
						$idp=$_SESSION['consulta'];
						$sql = "SELECT id, nombre, apellido, email FROM datos WHERE id= '$idp'";
					} else {
						$sql = "SELECT id, nombre, apellido, email FROM datos";
					}
				} else {
					$sql = "SELECT id, nombre, apellido, email FROM datos";
				}
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)) { 
					$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td>
					<button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregarFormulario('<?php echo $datos ?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="eliminarConfirmacion('<?php echo $ver[0] ?>')"></button>
				</td>
			</tr>
			<?php 
		}
			?>
		</table>
	</div>
</div>
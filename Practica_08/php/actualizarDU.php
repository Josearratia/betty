<?php 
	require_once "conexion.php";
	$conexion = conexion();
	$id = $_POST['id'];
	$n = $_POST['nombre'];
	$a = $_POST['apellido'];
	$e = $_POST['email'];

	$sql = "UPDATE datos SET nombre='$n', apellido='$a', email='$e' WHERE id='$id'";
	echo $result = mysqli_query($conexion, $sql);

 ?>
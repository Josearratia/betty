<?php 
	require_once "conexion.php";
	$conexion = conexion();
	$n = $_POST['nombre'];
	$a = $_POST['apellido'];
	$e = $_POST['email'];

	$sql = "INSERT INTO datos (nombre, apellido, email) VALUES ('$n','$a','$e')";
	echo $result = mysqli_query($conexion, $sql);

 ?>
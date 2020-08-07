<?php
	function conexion() {
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$basedatos = "usuarios";

		$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);
		return $conexion;
	}

?>
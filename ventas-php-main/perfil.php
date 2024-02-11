<?php

session_start();
if(empty($_SESSION['usuario'])) header("location: login.php");
include_once "encabezado.php";
include_once "navbar.php";
include_once "funciones.php";
$nombreUsuario = $_SESSION['usuario'];
$idUsuario = $_SESSION['idUsuario'];
?>

<div class="container">
	<div class="alert alert-primary text-center shadow-sm rounded" role="alert">
		<h1>
		<h1><?= $nombreUsuario?></h1>
		</h1>
	</div>
	
	<div class="text-center mt-3">
		<a href="cambiar_password.php" class="btn btn-lg btn-primary">
			<i class="fa fa-key"></i>
			Cambiar contraseña
		</a>
	</div>
</div>
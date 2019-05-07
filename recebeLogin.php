<?php
	require "Usuario.php";
	session_start();
	$email=$_POST["email"];
	$senha=$_POST["senha"];

	$objUsuario = new Usuario($email, $senha);
	if($objUsuario->login()){
		$_SESSION["usuario"] = $objUsuario;
	}
	

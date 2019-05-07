<?php 
	include "Filtro.php";
	require "Usuario.php";
	$senha=$_POST["senha"];
	$senhaSessao=$_SESSION["senha"];
	$novaSenha=$_POST["novaSenha"];
	if ($senha == $senhaSessao){
		$objUsuario = new Usuario($_SESSION["email"], $_SESSION["senha"]);
		$objUsuario->setIdUsuario($_SESSION["idUsuario"]);
		$objUsuario->mudarSenha($novaSenha);

	}else{
		echo "<script> 
		alert('As senhas não coincidem...');
		window.location.href='mudarSenha.php';
		</script>
		";
	}
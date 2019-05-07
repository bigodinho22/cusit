<?php 
	require "Filtro.php";
	require "Usuario.php";
	$emailN = $_POST["emailN"];
	$senhaN = $_POST["senhaN"];
	$senhaAtual = $_POST["senhaAtual"] ;
	$objUsuario = new Usuario($_SESSION["email"], $_SESSION["senha"]);
	$objUsuario->adicionarAdmin($emailN, $senhaN, $senhaAtual);
<?php
	include "Filtro.php";
	require "Usuario.php";
	$idComentario=$_GET["idComentario"];
	$objUsuario = new Usuario($_SESSION["email"], $_SESSION["senha"]);
	$objUsuario->setIdUsuario($_SESSION["idUsuario"]);
	$objUsuario->excluirComentario($idComentario);
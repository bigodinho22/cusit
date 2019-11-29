<?php
	require "Comentario.php";
	$email = $_POST["email"];
	$conteudo = $_POST["conteudo"];

	$objComentario = new Comentario($conteudo, $email);
	$objComentario->inserir();
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CUSIT?</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="images/cusitIcone.ico" type="image/x-icon"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><pre> CAN U SOLVE IT?</pre></h1>
							<p>Obrigado</p>						
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li ><a href="index.html">Home</a></li>
								<li class="current">
									<a href="sobre.html">Sobre</a>	
								</li>
								<li>
									<a href="contato.html">Contato</a>
								</li>
								<li>
									<a href="login.php">Administração</a>
								</li>
							</ul>
						</nav>

				</section>

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">Comentário enviado!</div>
					<div class="container">	
						<p class="style2">
							Sua avaliação é muito importante para nós :D
						</p>
						<p class="style3">
							<a href="index.html">Retornar ao início </a>
						</p>
					</div>
				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
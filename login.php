<?php 
	include "FiltroLogin.php";
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
							<p>Entrar como admnistrador</p>						
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
									<a href="comentar.html">Comentar</a>
								</li>
								<li>
									<a href="login.php">Administração</a>
								</li>
							</ul>
						</nav>

				</section>

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">Login</div>
					<div class="container">	
						<form name="comentario" action="recebeLogin.php" method="post">
							<input type="text" name="email" placeholder="Seu email" />
							<br />
							<input type="password" name="senha" placeholder="Sua senha">
							<br />
							<button type="submit" style="color: white;"> Entrar </button>
						</form>
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
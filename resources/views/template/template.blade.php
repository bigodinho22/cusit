<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="{{ asset("images/cusitIcone.ico") }}" type="image/x-icon"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		<script type="text/javascript" language="javascript">
			function jogar(){
				window.location.href = "levels/inicio/level1.html"
			}
		</script>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><pre> CAN U SOLVE IT?</pre></h1>
							<ul class="actions">
							@yield('banner')
						</ul>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
                                <li class='{{ request()->routeIs('index')?'current':'' }}'><a href="{{ route("index") }}">Home</a></li>
								<li class='{{ request()->routeIs('sobre')?'current':'' }}'>
									<a href="{{ route("sobre") }}">Sobre</a>	
								</li>
								<li class='{{ request()->routeIs('contato')?'current':'' }}'>
									<a href="{{ route("contato") }}">Contato</a>
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
                
                @yield('conteudo')
                		<!-- Scripts -->
        <script src={{ asset("js/jquery.min.js") }}></script>
        <script src={{ asset("js/jquery.dropotron.min.js") }}></script>
        <script src={{ asset("js/browser.min.js") }}></script>
        <script src={{ asset("js/breakpoints.min.js") }}></script>
        <script src={{ asset("js/util.js") }}></script>
        <script src={{ asset("js/main.js") }}></script>

</body>
</html>
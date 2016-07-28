<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Sistema de Información de Monitoreo y Seguimiento | SIMSE</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/general.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
      @include('navbar')
		</nav>
    <div>
      @yield('content')
    </div>
  	<footer class="navbar-fixed-bottom">
  		Todos los derechos reservados &copy 2016 <br>
  		DIMSE</b>
  	</footer>
  	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  	<script src="/js/bootstrap.js"></script>
  	<script src="/js/ubigeo.js"></script>
	</body>
</html>

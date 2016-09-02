<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="es">	
	<link rel="stylesheet" type="text/css" href="{{ asset('/cenepred/css/cenepred_main.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('/cenepred/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/cenepred/css/flat_and_modern.css') }}">	
	<script type="text/javascript" src="{{ asset('/cenepred/scripts/jquery-2.2.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/cenepred/scripts/bootstrap.min.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('/cenepred/scripts/cenepred.js') }}"></script>

	<title> Sistema de Información de Monitoreo,  Seguimiento y Evaluación </title>
</head>

<body>

<div class="container" id="container-cenepred">
	@include('cenepred.cabeza')    
	<div class="container-fluid">		
		@yield('contenido')
	</div>
	<div class="clear"></div>
	@include('cenepred.pie')	
	
</div>
</body>
</html>

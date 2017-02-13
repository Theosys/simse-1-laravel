@extends('cenepred.base')

@section('contenido') 
<div class="container-fluid">
	<h2>Sistema de Consultas</h2>
	<h3>Grupo de Trabajo</h3>
	<div class="container-fluid">
		<div class="img-circle col-lg-2 ">
		<span class="number">20%</span>
		<span class="lbl">Ministerios</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		<div class="img-circle col-lg-2  bg2">
		<span class="number">40%</span>
		<span class="lbl">Gobiernos Regionales</span> </br>
		<a href="{{ url('/consultas/dep') }}"><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		
		<div class="img-circle col-lg-2  bg3">
		<span class="number">35%</span>
		<span class="lbl">Municipalidades Provinciales</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>

		<div class="img-circle col-lg-2  bg4">
		<span class="number">21%</span>
		<span class="lbl">Municipalidades Distritales</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>		
	</div>
	<div style="clear: both;"></div>

	<h3>Plan de prevención y Reducción del Riesgo</h3>
	<div class="container-fluid">
		<div class="img-circle col-lg-2 ">
		<span class="number">10%</span>
		<span class="lbl">Ministerios</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		<div class="img-circle col-lg-2  bg2">
		<span class="number">42%</span>
		<span class="lbl">Gobierno Regional</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		
		<div class="img-circle col-lg-2  bg3">
		<span class="number">30%</span>
		<span class="lbl">Municipalidad Provincial</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>

		<div class="img-circle col-lg-2  bg4">
		<span class="number">22%</span>
		<span class="lbl">Municipalidad Distrital</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>		
	</div>
	<div style="clear: both;"></div>

	<h3>Capacitación o asistencia técnica </h3>
	<div class="container-fluid">
		<div class="img-circle col-lg-2 ">
		<span class="number">21%</span>
		<span class="lbl">Ministerios</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		<div class="img-circle col-lg-2  bg2">
		<span class="number">30%</span>
		<span class="lbl">Gobierno Regional</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		
		<div class="img-circle col-lg-2  bg3">
		<span class="number">31%</span>
		<span class="lbl">Municipalidad Provincial</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>

		<div class="img-circle col-lg-2  bg4">
		<span class="number">21%</span>
		<span class="lbl">Municipalidad Distrital</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>		
	</div>
	<div style="clear: both;"></div>

	<h3>Consultan los Lineamientos Técnicos y Normativos</h3>
	<div class="container-fluid">
		<div class="img-circle col-lg-2 ">
		<span class="number">22%</span>
		<span class="lbl">Ministerios</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		<div class="img-circle col-lg-2  bg2">
		<span class="number">42%</span>
		<span class="lbl">Gobierno Regional</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		
		<div class="img-circle col-lg-2  bg3">
		<span class="number">25%</span>
		<span class="lbl">Municipalidad Provincial</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>

		<div class="img-circle col-lg-2  bg4">
		<span class="number">31%</span>
		<span class="lbl">Municipalidad Distrital</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>		
	</div>
	<div style="clear: both;"></div>

	<h3>Conocen y/o usan instrumentos técnicos metodológicos </h3>
	<div class="container-fluid">
		<div class="img-circle col-lg-2 ">
		<span class="number">30%</span>
		<span class="lbl">Ministerios</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		<div class="img-circle col-lg-2  bg2">
		<span class="number">20%</span>
		<span class="lbl">Gobierno Regional</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>
		
		<div class="img-circle col-lg-2  bg3">
		<span class="number">45%</span>
		<span class="lbl">Municipalidad Provincial</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>

		<div class="img-circle col-lg-2  bg4">
		<span class="number">11%</span>
		<span class="lbl">Municipalidad Distrital</span> </br>
		<a href=""><span class="glyphicon glyphicon-plus">detalle</span></a>	
		</div>		
	</div>
	<div style="clear: both;"></div>
	</br>
	</br>

</div>
@endsection
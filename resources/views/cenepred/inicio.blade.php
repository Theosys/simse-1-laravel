@extends('cenepred.base')

@section('contenido')
 <div class="container-fluid home"> 	
 	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 	  
 	  <ol class="carousel-indicators">
 	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
 	    <li data-target="#carousel-example-generic" data-slide-to="1"></li> 	    
 	  </ol>
 	  <div class="carousel-inner" role="listbox">
 	    <div class="item active">
 	      <img src="{{ asset('/cenepred/images/simse-1.png') }}" alt="cenepred">
 	      <div class="carousel-caption"> 	        
 	      </div>
 	    </div>
 	    <div class="item">
 	      <img src="{{ asset('/cenepred/images/simse-2.png') }}" alt="cenepred">
 	      <div class="carousel-caption">
 	      </div>
 	    </div> 	    
 	  </div> 	  
 	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
 	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 	    <span class="sr-only">Anterior</span>
 	  </a>
 	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
 	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
 	    <span class="sr-only">Siguiente</span>
 	  </a>
 	</div>

 	<div class="col-md-12" id="content-home">
 	<p>EL Centro Nacional de Estimación, Prevención y Reducción del Riesgo de Desastres - <b>CENEPRED</b> a través de la Dirección de Monitoreo Seguimiento y Evaluación - DIMSE pone a disposición el Sistema de Información de Monitoreo,
Seguimiento y Evaluación - SIMSE.</p>
 	<p>El Sistema de información es una herramienta de apoyo que permite gestionar y monitorear la Implementación de la Política y el Plan Nacional de Gestión del Riesgo de Desastres, en sus tres niveles de gobierno.</p>
 	<p>EL sistema permite recabar información a travès de cuestionarios de indicadores ajustado al PLANAGERD, así como la directiva que norma su uso. </br>
	Invitamos a todas las instituciones de los tres niveles del gobierno, y por intermedio de sus respectivos Grupos de Trabajo en GRD, a que participen utilizando el cuestionario de manera frecuente (una vez por semestre), a fin de ir mejorando el sistema de seguimiento con información cada vez más confiable y con mayor cobertura, lo cual nos permitirá retroalimentar el sistema y ajustar nuestras estrategias para un óptimo resultado del SINAGERD en conjunto.
	</p>
 	</div> 	 	

 	<script type="text/javascript" src="{{ asset('/cenepred/scripts/carousel.js') }}"></script>
 </div>
@endsection

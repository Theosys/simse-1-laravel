@extends('cenepred.base')

@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('/admin_cenepred/css/fonts.css') }}">
 <div class="container-fluid mapas er"> 	
 	<h3>Escenario de Riesgos</h3>	
 	<div>
 		<div id="map"></div>
 		<div id="capture">
 			  <div class="row survey-welcome">
 			    <div class="col-sm-12 ">    
 			        <p class="surveywelcome">
 			            </p><p style="text-align: center;">&nbsp;<img alt="yes" src="http://dimse.cenepred.gob.pe/encuestas/upload/templates/cenepred/files/cenepred-ericka-hola.png" title="yes"></p>

     			    <p style="text-align: center;"><strong><span style="font-size:14px;">Hola estimad@!!</span></strong></p>
     			    <p>Si deseas información detallada por departamento y provincias debe hacer click en cada  región del mapa.</p>
 			    </div>
 			  </div>        

 		</div>
    <div style="clear: both;"></div>
    <br>    
    <div id="tbdist"></div> 		
    <p id="id_m"></p>
    
 	</div>
 </div>
<script type="text/javascript" src="{{asset('cenepred/data/escenario_riesgos.js?ver=1.0')}}"></script>
<script type="text/javascript" src="{{asset('cenepred/scripts/main_er.js')}}"></script>
<script  defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZP6RL5Q7xcy8o9gO_V3AS3UblNfTRpV0&callback=initMap">
</script>
@endsection



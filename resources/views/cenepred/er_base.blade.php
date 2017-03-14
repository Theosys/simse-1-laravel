<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="es">
	<link rel="stylesheet" type="text/css" href="{{ asset('/cenepred/css/cenepred_main.css?ver=1.5') }}">
	<script type="text/javascript" src="{{ asset('/cenepred/scripts/jquery-2.2.3.min.js') }}"></script>	
</head>
<body>
 <div class="container-fluid mapas er"> 	 	
 	<div>
 		<div id="map"></div>
 		<div id="capture">
 			  <div class="row survey-welcome">
 			    <div class="col-sm-12 ">    
 			        <p class="surveywelcome">
 			            </p><p style="text-align: center;">&nbsp;<img alt="yes" src="http://dimse.cenepred.gob.pe/encuestas/upload/templates/cenepred/files/cenepred-ericka-hola.png" title="yes"></p>

     			    <p style="text-align: center;"><strong><span style="font-size:14px;">Hola estimad@!!</span></strong></p>
     			    <p>Si deseas información detallada por departamento y provincias debe hacer click en cada  región del mapa.</p>
                    <div>
                        <span class="er-nivel er_afectado"></span>  Departamento afectado     </br>                
                    </div>
 			    </div>
 			  </div>        

 		</div>
    <div style="clear: both;"></div>
    <br>    
    <div id="tbdist"></div> 		
    <p id="id_m"></p>    
 	</div>
 </div>
 @yield('contenido')

<script  defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZP6RL5Q7xcy8o9gO_V3AS3UblNfTRpV0&callback=initMap">
</script>
</body>
</html>
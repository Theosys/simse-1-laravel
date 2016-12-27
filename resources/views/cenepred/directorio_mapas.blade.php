@extends('cenepred.base')

@section('contenido')
<style>      
      #map {
       height: 500px;
       width: 580px;
       overflow: hidden;
       float: left;
       border: thin solid #333;
       }
      #capture {
        height: 500px;
        width: 549px;
        overflow: hidden;
        float: left;
        background-color: rgb(202, 221, 224);
        border: thin solid #333;
        border-left: none;
        padding: 20px;
       }
       .mapas {
	       margin-bottom: 15px;
       }
</style>

 <div class="container-fluid mapas"> 	
 	<h3>Mapa de Contactos GRD</h3>
 	<div>
 	<p>El presente directorio permite conocer a las personas de contacto en la gestión del iego de esatres de los gobiernos locles y regionales conformntes del Sistema Nacional de Gestiñon del Riesgo de Desastres</p>
 	</div> 	 	

 	<div>
 		<div id="map"></div>
 		<div id="capture">
 			<div class="row survey-welcome">
 			    <div class="col-sm-12 ">    
 			        <p class="surveywelcome">
 			            </p><p style="text-align: center;">&nbsp;<img alt="yes" src="http://dimse.cenepred.gob.pe/encuestas/upload/templates/cenepred/files/cenepred-ericka-hola.png" title="yes"></p>

 			<p style="text-align: center;"><strong><span style="font-size:14px;">Hola estimad@!!</span></strong></p>

 			<p style="text-align: center;"><strong><span style="font-size:14px;">El presente directorio le permite conocer a la persona de contacto en Gestión del Riesgo de Desastres de los gobiernos locales y regionales.  
 			        </p>
 			        <p>Para ello en el mapa debe ubicar el lugar del cual quiere conocer sobre la persona de contacto en GRD y hacer click sobre ello.</p>
 			    </div>
 			</div>
 		</div>
 		<a href="#" id="demo" onclick="myFunction()">Click me to change my text color.</a>

 		<script>
 		function myFunction() {
 		    //alert("hola mun")
 		    myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';
 		    var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId; 	
 		    alert(src);	    
 		    initMap();
 		}
 		</script>
 		<script>

 		  var map;

 		  //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';
 		  myMapsId = '1u_Yks7MejdJgPd6V70S9xONz9vA';//peru
 		  //myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';//loreto
 		  //myMapsId = '1Y8A8Bx2PuqMPSfxM_Ugs7vS_Hb'; //campus
 		  var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;
 		  //var src = 'http://localhost/googlemaps/kml/westcampus_0.kml';

 		  /**
 		   * Initializes the map and calls the function that loads the KML layer.
 		   */
 		  function initMap() {
 		    map = new google.maps.Map(document.getElementById('map'), {
 		      //center: new google.maps.LatLng(-19.257753, 146.823688),          
 		      //center: new google.maps.LatLng(37.4239, -122.09149),          
 		      center: {lat: -10.812013, lng: -75.967858},
 		      zoom: 8
 		      
 		    });
 		    loadKmlLayer(src, map);
 		  }

 		  /**
 		   * Adds a KMLLayer based on the URL passed. Clicking on a marker
 		   * results in the balloon content being loaded into the right-hand div.
 		   * @param {string} src A URL for a KML file.
 		   */
 		  function loadKmlLayer(src, map) {
 		    var kmlLayer = new google.maps.KmlLayer(src, {
 		      suppressInfoWindows: true,
 		      preserveViewport: false,
 		      map: map
 		    });
 		    google.maps.event.addListener(kmlLayer, 'click', function(event) {
 		      var content = event.featureData.infoWindowHtml;
 		      var testimonial = document.getElementById('capture');
 		      testimonial.innerHTML = content;
 		    });
 		  }
 		</script>
 		<script  defer
 		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL-YzOG4cSALFgMipEMEUTAT9M7KJxf8c&callback=initMap">
 		</script>
 	</div>
 </div>
@endsection



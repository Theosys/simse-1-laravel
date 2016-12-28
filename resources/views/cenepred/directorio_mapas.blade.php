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
 		<a href="#" id="demo" onclick="initMap()"> >> Ir a Peru</a>
    <p id="id_m"></p>
 		
 		<script>
      function ir_mapa(id_map) {
        //alert("hola mun")
        //var myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';
        if (id_map == "g9ad0734d466eee62") {
          var myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';  
        }
        //cajamarca
        else if(id_map == "gdcf4099c520a97ae") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Amazonas
        else if(id_map == "g0de9ff0c7f25d6e4") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        // San Martin
        else if(id_map == "gd8c0be71567fc852") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Tumbes
        else if(id_map == "g8c77dfc63d18e3ac") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Piura
        else if(id_map == "ge57c6f40da352ffa") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Lambayeque
        else if(id_map == "gaa042965628fd507") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }   
        //La Libertad
        else if(id_map == "g0565b082575e3430") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        } 
        //Huanuco
        else if(id_map == "g5de02044b2374a44") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Pasco
        else if(id_map == "g3adc52e475f3707e") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Lima
        else if(id_map == "g805b4513e7260455") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Ucayali
        else if(id_map == "g75f2ee1e92e2f937") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Ica
        else if(id_map == "g0f01e68de600466f") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Huancavelica
        else if(id_map == "g7a4d1d35d66c10cd") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Apurimac
        else if(id_map == "gd8c697dd557edd10") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Madre de Dios
        else if(id_map == "gb139aa58cc52ba5f") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //Puno
        else if(id_map == "g5e862778c8cb94ba") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //MOQUEGUA
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }
        //TACNA
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';  
          alert(id_map);
        }        
        var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;  
        
        center()    
        loadKmlLayer(src, map);
        
      }
      function center(){
        map = new google.maps.Map(document.getElementById('map'), {          
          center: {lat: -10.812013, lng: -75.967858},
          zoom: 8          
        }); 
      }

 		  //var map;

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
 		      zoom: 8,
 		      
 		    });
 		    loadKmlLayer(src, map);
 		  }
 		  
 		  function loadKmlLayer(src, map) {
 		    var kmlLayer = new google.maps.KmlLayer(src, {
 		      suppressInfoWindows: true,
 		      preserveViewport: false,
 		      map: map
 		    });
        var center_pol = {lat: -10.812013, lng: -75.967858};
        //addMarker(event.latLng);
 		    google.maps.event.addListener(kmlLayer, 'click', function(event) {
          var content = event.featureData.infoWindowHtml;
          var des = event.featureData.description;
          var id = event.featureData.id;
          var name = event.featureData.name;
          //var autor = event.featureData.author; //no funca
 		      var testimonial = document.getElementById('capture');
 		      testimonial.innerHTML = content+" <a href='#' onclick='ir_mapa(\""+id+"\")'>Gobiernos Locales</a>";
          document.getElementById('id_m').innerHTML = id;
          addMarker(event.latLng); 
          //addMarker(center_pol);         
          map.setCenter(marker.getPosition());
 		    });
 		  }
      //Agregando punto
      function addMarker(location) {
        //        
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        //marker.setMap(null);        
        map.panTo(location);        

        //markers.push(marker);
      }
 		</script>
 		<script  defer
 		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL-YzOG4cSALFgMipEMEUTAT9M7KJxf8c&callback=initMap">
 		</script>
 	</div>
 </div>
@endsection


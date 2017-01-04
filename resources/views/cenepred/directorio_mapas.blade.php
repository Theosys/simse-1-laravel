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
        height: auto;
        width: 549px;
        /*overflow: hidden;*/
        float: left;
        /*background-color: rgb(202, 221, 224);*/
        /*border: thin solid #333;*/
        border-left: none;
        padding: 20px;
       }
       .mapas {
	       margin-bottom: 15px;
       }
       h5 {
        font-size: 20px !important;
       }
      body thead tr td {
        font-weight: bold;
        font-size: 12px !important;        
        background: #4999b0 !important;
        text-align: center;
        color: #fff;
        padding: 5px;


       }
      body tbody tr td, body thead tr td {
        border: 1px solid #ccc;
        font-size: 12px !important;
        background: #d7ebf0;
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
    <div style="clear: both;"></div>
 		<a href="#" id="demo" onclick="initMap()"> >> Ir a Peru</a>
    <p id="id_m"></p>
 		<script type="text/javascript" src="{{asset('cenepred/data/loreto.js')}}"></script>
 		<script>
      function readTextFile(file, callback) {
          var rawFile = new XMLHttpRequest();
          rawFile.overrideMimeType("application/json");
          rawFile.open("GET", file, true);
          rawFile.onreadystatechange = function() {
              if (rawFile.readyState === 4 && rawFile.status == "200") {
                  callback(rawFile.responseText);
              }
          }
          rawFile.send(null);
      }

      function ir_mapa(id_map) {        
        //var myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';        
        //LORETO        
        if (id_map == "g9ad0734d466eee62") {
          var myMapsId = '14aDq7woBGiPdR1zDzjExhM3lyU4';                                
          // readTextFile("{{asset('cenepred/data/loreto.json')}}", function(text){
          //     var data = JSON.parse(text);
          //     console.log(data[1].ID_LAYER);
          // });          
        }           
        //cajamarca
        else if(id_map == "gdcf4099c520a97ae") {        
          var myMapsId = '19W-fqi4g-EJuDmwTKN7bJkOZYsI';            
        }
        //Amazonas
        else if(id_map == "g0de9ff0c7f25d6e4") {          
          var myMapsId = '12gMeHUaS7gtaOUJAAOPGeG9GmS8';            
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
          var myMapsId = '190HpYGFTBUkTMATLWzNhdC1ZWw0';            
        }
        //Lambayeque
        else if(id_map == "gaa042965628fd507") {          
          var myMapsId = '1znFQyk-NR8is1oZTqprS9i4YODI';            
        }   
        //La Libertad
        else if(id_map == "g0565b082575e3430") {          
          var myMapsId = '19KR-Emnu5ywcnjocznV01h7QToE';            
        } 
        //Huanuco
        else if(id_map == "g5de02044b2374a44") {          
          var myMapsId = '1h9KZVXapnvaN63X7karNSP5DzWw';            
        }
        //Pasco
        else if(id_map == "g3adc52e475f3707e") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //Junin
        else if(id_map == "g1c6e8a138d9cabe1") {          
          var myMapsId = '1EXpXXhKaRkp4_yovlZPm3Nbcs7A';            
        }
        //Lima
        else if(id_map == "g805b4513e7260455") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //Ucayali
        else if(id_map == "g75f2ee1e92e2f937") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //Ica
        else if(id_map == "g0f01e68de600466f") {          
          var myMapsId = '12yRkGQJl8xXEOmAobGS5K50UPnY';            
        }
        //Huancavelica
        else if(id_map == "g7a4d1d35d66c10cd") {          
          var myMapsId = '1NTVwbJBMWLRt9mcfn8olFoOc3D';            
        }
        //Apurimac
        else if(id_map == "gd8c697dd557edd10") {          
          var myMapsId = '1mukI5WKanokYORNdTZcV094gNVk';            
        }
        //Madre de Dios
        else if(id_map == "gb139aa58cc52ba5f") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //Puno
        else if(id_map == "g5e862778c8cb94ba") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //MOQUEGUA
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //TACNA
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1-lwNC_RO-yFtVrMYbmEdQLeabcA';            
        }
        //CUSCO falta id_map
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1Aco4T8M65q9_TnPjW4JTxQ3SKiY';            
        }
        //CALLAO falta id_map
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '17JnIbytFjG5UwUg9tCP-qWpJHks';            
        }
        //ayacucho falta id_map
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '14Xhadf_l1RI1eGXeKqk3PbYdLFo';            
        } 
        //AREQUIPA falta id_map
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1kAeDxwpJqp_Zkb1RZAsiNdC2wGY';            
        }
        //ANCASH falta id_map
        else if(id_map == "g72cec4f4ad869f38") {          
          var myMapsId = '1H2ghoiJCaunVqOUQLZX3SqUpzkw';            
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
 		      zoom: 7,
 		      
 		    });
 		    loadKmlLayer(src, map);
 		  }
 		  
 		  function loadKmlLayer(src, map) {
        var home = '<a href="#" id="demo" onclick="initMap()"> >> Ir a Peru</a>';
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
          //LORETO
          if (id=="g77cc5f41b2dc63b1") {
            testimonial.innerHTML = home+alto_amazonas;
          }
          else if(id=="ga0960976e973c2be"){
            testimonial.innerHTML = home+loreto; 
          }
          else if(id=="ga313ebf6b6a0dbde"){
            testimonial.innerHTML = home+mrc; 
          }
          else if(id=="g508c47adca785ee1"){
            testimonial.innerHTML = home+requena; 
          }
          else if(id=="gd1f1d22e09bfcdca"){
            testimonial.innerHTML = home+dm; 
          }
          else if(id=="gee33f3263f146751"){
            testimonial.innerHTML = home+ucayali; 
          }
          else if(id=="g06734e4586c76367"){
            testimonial.innerHTML = home+putumayo; 
          }
          else if(id=="g153716fb92eaa572"){
            testimonial.innerHTML = home+maynas; 
          }
          //PIURA
          else if(id=="ge5d497991225f5e6"){
            testimonial.innerHTML = home+piura; 
          }
          else if(id=="g0b7ee1cc1b7559af"){
            testimonial.innerHTML = home+talara; 
          }
          else if(id=="g71699fdda9985799"){
            testimonial.innerHTML = home+paita; 
          }
          else if(id=="g17dc82871309ad74"){
            testimonial.innerHTML = home+sullana; 
          }
          else if(id=="gaa4b372132e9368f"){
            testimonial.innerHTML = home+sechura; 
          }
          else if(id=="g843852fb94e431a2"){
            testimonial.innerHTML = home+morropon; 
          }
          else if(id=="gebe9ee4dcd3981c4"){
            testimonial.innerHTML = home+huancabamba; 
          }
          else if(id=="gb25021d1343f6bf7"){
            testimonial.innerHTML = home+ayabaca; 
          }
          //AMAZONAS -R
          else if(id=="gb25021d1343f6bf7"){
            testimonial.innerHTML = home+chachapoyas; 
          }
          //APURIMAC           
          else if(id=="g584a364519f73e05"){
            testimonial.innerHTML = home+abancay; 
          }
          else if(id=="ge1686006c0a6e459"){
            testimonial.innerHTML = home+andahuaylas; 
          }
          //-R
          else if(id=="g16d727a7a81ea659"){
            testimonial.innerHTML = home+antabamba; 
          }
          else if(id=="g4288297a388b3268"){
            testimonial.innerHTML = home+aymaraes; 
          }
          else if(id=="g4c9912892fac6662"){
            testimonial.innerHTML = home+cotabambas; 
          }
          else if(id=="g999580255d28a750"){
            testimonial.innerHTML = home+chincheros; 
          }
          else if(id=="g814fdfd24a09ecd3"){
            testimonial.innerHTML = home+grau; 
          }

          //AREQUIPA -R
          else if(id=="gggggggggggg"){
            testimonial.innerHTML = home+grau; 
          }
          //AYACUCHO -R
          else if(id=="ggggggggg"){
            testimonial.innerHTML = home+grau; 
          }

          //CAJAMARCA 
          else if(id=="g2354fb82d00fcb92"){
            testimonial.innerHTML = home+cajamarca; 
          }
          else if(id=="g23d8533b37529c9b"){
            testimonial.innerHTML = home+cajabamba; 
          }
          else if(id=="g7fe51b3adaac4ec7"){
            testimonial.innerHTML = home+celendin; 
          }
          else if(id=="g931e51b1e4ea7c17"){
            testimonial.innerHTML = home+chota; 
          }
          else if(id=="g0c69346fe5fe43d2"){
            testimonial.innerHTML = home+contumaza; 
          }
          else if(id=="ga5447c901dad9565"){
            testimonial.innerHTML = home+cutervo; 
          }
          else if(id=="gc9ba3587c35e1c39"){
            testimonial.innerHTML = home+hualgayoc; 
          }
          else if(id=="g278f957c92a379b2"){
            testimonial.innerHTML = home+jaen; 
          }
          else if(id=="gd23667e1ee0e3dcf"){
            testimonial.innerHTML = home+san_ignacio; 
          }
          else if(id=="g788130bac004888a"){
            testimonial.innerHTML = home+san_marcos; 
          }
          else if(id=="g2ab8de497a134cba"){
            testimonial.innerHTML = home+san_miguel; 
          }
          else if(id=="gd324a75d3f0b07d0"){
            testimonial.innerHTML = home+san_pablo; 
          }
          else if(id=="ga757c0bd1117ba6d"){
            testimonial.innerHTML = home+santa_cruz; 
          }
          

          else{
 		       testimonial.innerHTML = home+content+" <a href='#' onclick='ir_mapa(\""+id+"\")'>Gobiernos Locales</a>";
          }
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
 		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZP6RL5Q7xcy8o9gO_V3AS3UblNfTRpV0&callback=initMap">
 		</script>
 	</div>
 </div>
@endsection



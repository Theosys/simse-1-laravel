     function ir_mapa(id_polig) {  
       
       //Huancavelica
       if(id_polig == "ID_00008") {          
         var src= src_dimse+"er_huancavelica.kml?ver=1.0";            
         var src1= src_dimse+"b_huancavelica.kml";            
       }
       //Apurimac
       else if(id_polig == "ID_00002") {                    
         var src= src_dimse+"er_apurimac.kml";            
         var src1= src_dimse+"b_apurimac.kml";             
       }       
       //Puno
       else if(id_polig == "ID_00027") {          
         var src= src_dimse+"er_puno.kml?ver=1.0";            
         var src1= src_dimse+"b_puno.kml";
       }              
       //CUSCO 
       else if(id_polig == "ID_00007") {          
         var src= src_dimse+"er_cusco.kml?ver=1.0";            
         var src1= src_dimse+"b_cusco.kml";        
       }       
       //ayacucho 
       else if(id_polig == "ID_00004") {          
         //var myMapsId = '1TUV48Gr3c_KAmp9HPHk3aSt3ZdI';
         var src= src_dimse+"er_ayacucho.kml?ver=1.0";            
         var src1= src_dimse+"b_ayacucho.kml";            
       } 
       //AREQUIPA 
       else if(id_polig == "ID_00003") {                                         
         var src= src_dimse+"er_arequipa.kml?ver=1.0";                        
         var src1= src_dimse+"b_arequipa.kml";                        
       }                      
       //var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;
       center()       
       loadKmlLayer(src_er_peru, map);
       loadKmlLayer_er(src, map);       
       loadKmlLayer(src1, map);
       
     }
     function center(){
       map = new google.maps.Map(document.getElementById('map'), {          
         center: {lat: -10.812013, lng: -75.967858},// el centro debe ser dinamico 
         zoom: 8          
       }); 
       // bounds  = new google.maps.LatLngBounds();
       // loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
       // bounds.extend(loc);
     }

     function getParameterByName() {
         // name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
         // var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
         // results = regex.exec(location.search);
         // return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
         query=window.location.search.substring(1);
         q=query.split("&");
         vars=[];
         for(i=0;i<q.length;i++){
             x=q[i].split("=");
             k=x[0];
             v=x[1];
             vars[k]=v;
         }
         return query;
     }

      //var map;

      //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';
     myMapsId = '1Esh3ixG7VX8MTyC79BeDl9oCBBQ';//peru   
     myMapsId1 = '1fckCTkw-AWmCFk_JfQRilyHkhdc';//er   
      //myMapsId = '1BWWHSEtI7nh8x7Y8Vb19oqMzbW8';//peru      
      //myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';//loreto
      //myMapsId = '1Y8A8Bx2PuqMPSfxM_Ugs7vS_Hb'; //campus
     src_dimse='http://dimse.cenepred.gob.pe/er/'+id_er+'/kml/';
     var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;
     //var src1 = 'https://www.google.com/maps/d/kml?mid=' + myMapsId1;
     //var id_er = vars['id_er'];
     //var id_er = getParameterByName();
     
     var src_er_peru = src_dimse+'er_dep.kml?ver=1.1';
     alert(src_er_peru);
     var src1 = src_dimse+'peru_departamentos.kml?ver=1.1';
     var home = '<a href="#" id="menu-home" onclick="initMap()"> <span class="glyphicon glyphicon-home"></span> Ir a Peru</a>';
      //var src = 'http://localhost/googlemaps/kml/westcampus_0.kml';

      /**
       * Initializes the map and calls the function that loads the KML layer.
       */
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          //center: new google.maps.LatLng(-19.257753, 146.823688),          
          //center: new google.maps.LatLng(37.4239, -122.09149),          
          center: {lat: -10.812013, lng: -75.967858},
          zoom: 5,
          
        });
        loadKmlLayer(src_er_peru, map);
        //loadKmlLayer(src1, map);
        //$("tbdist").html("")
        document.getElementById('tbdist').innerHTML = "";
      }
      function loadKmlLayer_er(src, map) {        
       var kmlLayer_1 = new google.maps.KmlLayer(src, {
         suppressInfoWindows: true,
         preserveViewport: false,
         map: map
       });
      }
      function loadKmlLayer(src, map) {
       var home = '<a href="#" id="menu-home" onclick="initMap()"> <span class="glyphicon glyphicon-home"></span> Ir a Peru</a>';
        var kmlLayer = new google.maps.KmlLayer(src, {
          suppressInfoWindows: true,
          preserveViewport: false,
          map: map
        });
       var center_pol = {lat: -10.812013, lng: -75.967858};               
       google.maps.event.addListener(kmlLayer, 'click', function(event) {
         var content = event.featureData.infoWindowHtml;
         var des = event.featureData.description;
         var id = event.featureData.id;
         var name = event.featureData.name;
         //var autor = event.featureData.author; //no funca
         var testimonial = document.getElementById('capture');
         var gob_locales=" <a href='#' onclick='ir_mapa(\""+id+"\")'>Provincias</a>";
                  
         //APURIMAC           
         if(id=="gdcf7010bd75c8af2")
         {
           testimonial.innerHTML = home+abancay; 
         }
         else if(id=="g5216efee5cb40fa4")
         {
           testimonial.innerHTML = home+andahuaylas; 
         }
         //
         else if(id=="gc02aedd7f7934a6f")
         {
           testimonial.innerHTML = home+antabamba; 
         }
         else if(id=="gc61e15719eb9d518")
         {
           testimonial.innerHTML = home+aymaraes; 
         }
         else if(id=="g7dc2a1605fefaead")
         {
           testimonial.innerHTML = home+cotabambas; 
         }
         else if(id=="gf0760ab92f7c3849")
         {
           testimonial.innerHTML = home+chincheros; 
         }
         else if(id=="g26f814a9ad4d7f17")
         {
           testimonial.innerHTML = home+grau; 
         }
         
         //HUANCAVELICA
         else if(id=="g826f7a58b31858bd"){            
           testimonial.innerHTML = home+huancavelica; 
         }
         else if(id=="g90626557a3b470b0"){            
           testimonial.innerHTML = home+tayacaja; 
         }
         else if(id=="g7cba1c7f37bb76b0"){            
           testimonial.innerHTML = home+castrovirreyna; 
         }
         else if(id=="g71d3dcdb9f8b5e64"){            
           testimonial.innerHTML = home+huaytara; 
         }
         else if(id=="g2dc72a1d6741d529"){            
           testimonial.innerHTML = home+angaraes; 
         }
         else if(id=="g85c7edd95e92b259"){            
           testimonial.innerHTML = home+acobamba; 
         }
         else if(id=="gde46569194d05613"){            
           testimonial.innerHTML = home+churcampa; 
         }         
         //puno 
         else if(id=="ge98e0e9c07119ba6"){
           testimonial.innerHTML = home+puno; 
         }else if(id=="g8528d84fdb60d6ae"){
           testimonial.innerHTML = home+azangaro; 
         }else if(id=="g8528d84fdb60d6ae"){
           testimonial.innerHTML = home+carabaya; 
         }else if(id=="g004e505393fc16a3"){
           testimonial.innerHTML = home+chucuito; 
         }else if(id=="g228e27ce8bf312e3"){
           testimonial.innerHTML = home+collao; 
         }else if(id=="gdd7259e73d9775f0"){
           testimonial.innerHTML = home+huancane; 
         }else if(id=="g7cc764485c3e4eb6"){
           testimonial.innerHTML = home+lampa; 
         }else if(id=="gbdc8b4c3f7eb886e"){
           testimonial.innerHTML = home+melgar; 
         }else if(id=="g96b6141b6a871597"){
           testimonial.innerHTML = home+moho; 
         }else if(id=="gd5a096fff0e90bab"){
           testimonial.innerHTML = home+putina; 
         }else if(id=="g7c3779c4b891512b"){
           testimonial.innerHTML = home+san_roman; 
         }else if(id=="gc8f1fd9ffbd52ab8"){
           testimonial.innerHTML = home+sandia; 
         }else if(id=="g3cb353b1d09cdefb"){
           testimonial.innerHTML = home+yunguyo; 
         }         
         //AREQUIPA
         else if(id=="gb149543c8a9fc27d"){
           testimonial.innerHTML = home+arequipa; 
         }else if(id=="g360515962ed2f07c"){
           testimonial.innerHTML = home+camana; 
         }else if(id=="gb10aa3412bfe7030"){
           testimonial.innerHTML = home+caraveli; 
         }else if(id=="g2af898ed81d583c5"){
           testimonial.innerHTML = home+castilla; 
         }else if(id=="gfd465450a0f2f86f"){
           testimonial.innerHTML = home+caylloma; 
         }else if(id=="g84dabd08603e40e4"){
           testimonial.innerHTML = home+condesuyos; 
         }else if(id=="gc1a262c6b9fea8a5"){
           testimonial.innerHTML = home+islay; 
         }else if(id=="g50ed83b471a69efd"){
           testimonial.innerHTML = home+la_union; 
         }
         //AYACUCHO
         else if(id=="g9e574563afe22ec1"){
           testimonial.innerHTML = home+huamanga; 
         }else if(id=="g488226fa0e5536ac"){
           testimonial.innerHTML = home+cangallo; 
         }else if(id=="gf476550219551c0a"){
           testimonial.innerHTML = home+huancasancos; 
         }else if(id=="g198e12b98ff53ff1"){
           testimonial.innerHTML = home+huanta; 
         }else if(id=="g9a490fe7a093d865"){            
           testimonial.innerHTML = home+la_mar; 
         }else if(id=="ga975f385da66a3f7"){
           testimonial.innerHTML = home+lucanas; 
         }else if(id=="g23ab18395bf64b42"){
           testimonial.innerHTML = home+parinacochas; 
         }else if(id=="g2cc270fb2265c713"){
           testimonial.innerHTML = home+paucar_sara_sara; 
         }else if(id=="ged2bbf10bf058e58"){
           testimonial.innerHTML = home+sucre; 
         }else if(id=="gc82586b45ae83efe"){
           testimonial.innerHTML = home+victor_fajardo; 
         }else if(id=="g79e8935d3e52b669"){
           testimonial.innerHTML = home+vilcashuaman; 
         }

         //cusco 
         else if(id=="g52708f549d88abd7")
         {
           testimonial.innerHTML = home+cusco; 
         }else if(id=="g5b7aadea9b6f3e93")
         {
           testimonial.innerHTML = home+acomayo; 
         }else if(id=="g75762bd0e03e17ed")
         {
           testimonial.innerHTML = home+anta; 
         }else if(id=="gcbd85a3fc53a8a9d")
         {
           testimonial.innerHTML = home+calca; 
         }else if(id=="g9ae737cb33bce00d")
         {
           testimonial.innerHTML = home+canas; 
         }else if(id=="g2f7de593b7b09843")
         {
           testimonial.innerHTML = home+canchis; 
         }else if(id=="g3ca20eefacb79ac0")
         {
           testimonial.innerHTML = home+chumbivilcas; 
         }else if(id=="g418aaefe663c9720")
         {
           testimonial.innerHTML = home+espinar; 
         }else if(id=="gc89002c43b5b048a")
         {          
           testimonial.innerHTML = home+la_convencion; 
         }else if(id=="g6aedb14c584be96f")
         {
           testimonial.innerHTML = home+paruro; 
         }else if(id=="gac41c14f7ecaec6d")
         {
           testimonial.innerHTML = home+paucartambo; 
         }else if(id=="gfccc74efd80f199c")
         {
           testimonial.innerHTML = home+quispicanchi; 
         }else if(id=="g649ed94459e9732b")
         {
           testimonial.innerHTML = home+urubamba; 
         }
         
         //GOBIERNOS REGIONALES
         else if(id=="ID_00002")
         {
           testimonial.innerHTML = home+gore_apurimac;
           ir_mapa(id)           
         }
         else if(id=="ID_00003")
         {
           testimonial.innerHTML = home+gore_arequipa;
           ir_mapa(id)           
         }
         else if(id=="ID_00004")
         {
           testimonial.innerHTML = home+gore_ayacucho;
           ir_mapa(id)           
         }         
         else if(id=="ID_00007")
         {
           testimonial.innerHTML = home+gore_cusco;
           ir_mapa(id)           
         }
         else if(id=="ID_00008")
         {
           testimonial.innerHTML = home+gore_huancavelica;
           ir_mapa(id); 
         }        
         else if(id=="ID_00027")
         {
           testimonial.innerHTML = home+gore_puno;
           ir_mapa(id);            
         }         
         //no id poligono (data-poligono)
         else{
           testimonial.innerHTML = home+content+" <a href='#' onclick='ir_mapa(\""+id+"\")'>Provincias</a>";
         }
         //var table1 = document.querySelectorAll("table");
         //alert(table1);
         if ($("#capture table.dis").length) {
             t1 = $("#capture table.dis").html();              
             $("#capture table.dis").remove();
             $("#tbdist").html("<h5>DISTRITOS</h5> <table>"+t1+"</table>");              
         }
         document.getElementById('id_m').innerHTML = id;          
         //addMarker(event.latLng); 
         //addMarker(center_pol);         
         //map.setCenter(marker.getPosition());
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

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
       loadKmlLayer(src, map);
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

      //var map;

      //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';
     myMapsId = '1Esh3ixG7VX8MTyC79BeDl9oCBBQ';//peru   
     myMapsId1 = '1fckCTkw-AWmCFk_JfQRilyHkhdc';//er   
      //myMapsId = '1BWWHSEtI7nh8x7Y8Vb19oqMzbW8';//peru      
      //myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';//loreto
      //myMapsId = '1Y8A8Bx2PuqMPSfxM_Ugs7vS_Hb'; //campus
     src_dimse='http://dimse.cenepred.gob.pe/kml/';
     var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;
     //var src1 = 'https://www.google.com/maps/d/kml?mid=' + myMapsId1;
     var src = src_dimse+'ER_17_02_17_DISTRITAL_small.kml?ver=1.1';
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
        loadKmlLayer(src, map);
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
         else if(id=="g9ea7756815843a1e"){
           testimonial.innerHTML = home+puno; 
         }else if(id=="gcecf016be0194621"){
           testimonial.innerHTML = home+azangaro; 
         }else if(id=="g506a9c1219923ed3"){
           testimonial.innerHTML = home+carabaya; 
         }else if(id=="gce251b2c7f30f440"){
           testimonial.innerHTML = home+chucuito; 
         }else if(id=="ge215f7baccdd024b"){
           testimonial.innerHTML = home+collao; 
         }else if(id=="g2ad9e1d6944e69f5"){
           testimonial.innerHTML = home+huancane; 
         }else if(id=="g45961d773398b32a"){
           testimonial.innerHTML = home+lampa; 
         }else if(id=="g69d3acc942ceb57f"){
           testimonial.innerHTML = home+melgar; 
         }else if(id=="g3e85a5a7d3f3a015"){
           testimonial.innerHTML = home+moho; 
         }else if(id=="g5326cf711d19082c"){
           testimonial.innerHTML = home+putina; 
         }else if(id=="g531e3d87f6ca0029"){
           testimonial.innerHTML = home+san_roman; 
         }else if(id=="g97018938d60c52bc"){
           testimonial.innerHTML = home+sandia; 
         }
         else if(id=="gcd432e0adb2317bb"){
           testimonial.innerHTML = home+yunguyo; 
         }         
         //AREQUIPA
         else if(id=="g8484dc25692cc8dc"){
           testimonial.innerHTML = home+arequipa; 
         }else if(id=="g73595977d08f2ff1"){
           testimonial.innerHTML = home+camana; 
         }else if(id=="gaa52d9f07b7df388"){
           testimonial.innerHTML = home+caraveli; 
         }else if(id=="g85718782fa611c10"){
           testimonial.innerHTML = home+castilla; 
         }else if(id=="gcaa24f5ac0c3bce2"){
           testimonial.innerHTML = home+caylloma; 
         }else if(id=="gcc2b39c8c023cd6d"){
           testimonial.innerHTML = home+condesuyos; 
         }else if(id=="g24388f71aabbc361"){
           testimonial.innerHTML = home+islay; 
         }else if(id=="g8ec85dcf7b62c11d"){
           testimonial.innerHTML = home+la_union; 
         }
         //AYACUCHO
         else if(id=="gbd1178bad4bf6c1c"){
           testimonial.innerHTML = home+huamanga; 
         }else if(id=="g478e8bf2b3c46445"){
           testimonial.innerHTML = home+cangallo; 
         }else if(id=="g3f6ec65111ff4e47"){
           testimonial.innerHTML = home+huancasancos; 
         }else if(id=="g5229dae39614a0b5"){
           testimonial.innerHTML = home+huanta; 
         }else if(id=="g7a224b821ecc9e3c"){            
           testimonial.innerHTML = home+la_mar; 
         }else if(id=="gbd9aa7efdc2b04d9"){
           testimonial.innerHTML = home+lucanas; 
         }else if(id=="g31ef11bfd3a4340b"){
           testimonial.innerHTML = home+parinacochas; 
         }else if(id=="g7729b84a94fa0af9"){
           testimonial.innerHTML = home+paucar_sara_sara; 
         }else if(id=="g0e4745f2adb14683"){
           testimonial.innerHTML = home+sucre; 
         }else if(id=="g0b62f5cbd8df0043"){
           testimonial.innerHTML = home+victor_fajardo; 
         }else if(id=="g076cc6403617cf83"){
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
           testimonial.innerHTML = home+gore_apurimac+gob_locales;
           var src= src_dimse+"er_apurimac.kml";            
           var src1= src_dimse+"b_apurimac.kml";
           loadKmlLayer_er(src, map);
           loadKmlLayer(src1, map);
         }
         else if(id=="ID_00003")
         {
           testimonial.innerHTML = home+gore_arequipa+gob_locales;
           var src= src_dimse+"er_arequipa.kml";            
           var src1= src_dimse+"b_arequipa.kml";
           loadKmlLayer(src, map); 
         }
         else if(id=="ID_00004")
         {
           testimonial.innerHTML = home+gore_ayacucho+gob_locales; 
         }
         
         else if(id=="ID_00007")
         {
           testimonial.innerHTML = home+gore_cusco+gob_locales; 
         }
         else if(id=="ID_00008")
         {
           testimonial.innerHTML = home+gore_huancavelica+gob_locales; 
         }        
         else if(id=="ID_00027")
         {
           testimonial.innerHTML = home+gore_puno+gob_locales; 
         }         
         //no id poligono
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

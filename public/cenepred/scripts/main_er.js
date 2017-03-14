     function ir_mapa(id_polig) {  
              
       //er_resul = buscar_er(id);
       // if (er_resul.length>0) {
       //    for(var arreglo in objeto) {
       //        if (arreglo==id_er) {
       //          //alert("hola mundo ")
       //        }
       //        alert(" arreglo2 = " + arreglo);
       //        for(var elemento in objeto[arreglo]){
       //          //alert(" elemento = " + objeto[arreglo][elemento]);
       //        }
       //    }
       //  }
       //Huancavelica
       if(id_polig == "ID_00008") {          
         var src= src_er+"er_huancavelica.kml?ver=1.0";            
         var src1= src_base+"b_huancavelica_prov.kml";            
       }
       //Apurimac
       else if(id_polig == "ID_00002") {                    
         var src= src_er+"er_apurimac.kml";         
         var src1= src_base+"b_apurimac_prov.kml";             
       }       
       //Puno
       else if(id_polig == "ID_00027") {          
         var src= src_er+"er_puno.kml?ver=1.0";            
         var src1= src_base+"b_puno_prov.kml";
       }              
       //CUSCO 
       else if(id_polig == "ID_00007") {          
         var src= src_er+"er_cusco.kml?ver=1.0";            
         var src1= src_base+"b_cusco_prov.kml";        
       }       
       //ayacucho 
       else if(id_polig == "ID_00004") {          
         //var myMapsId = '1TUV48Gr3c_KAmp9HPHk3aSt3ZdI';
         var src= src_er+"er_ayacucho.kml?ver=1.0";            
         var src1= src_base+"b_ayacucho_prov.kml";            
       } 
       //AREQUIPA 
       else if(id_polig == "ID_00003") {                                         
         var src= src_er+"er_arequipa.kml?ver=1.0";                        
         var src1= src_base+"b_arequipa_prov.kml";                        
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
     }
     function buscar_er(id_er){
      result= new array();
      for(var arreglo in er_dep) {
          if (arreglo==id_er) {
            resul=er_dep[arreglo];
          }
      }
      return result;
     }
     function buscar_dep(id_dep){
      result= new array();
      for(var arreglo in dep) {
          if (arreglo==id_dep) {
            resul=er_dep[arreglo];
          }
      }
      return result;

     }
     var er_dep={ 
        "1":["ID_00004","ID_00002","ID_00007","ID_00027","ID_00003"],
        "9":["ID_00004","ID_00002","ID_00007"],
        "10":["ID_00002","ID_00007","ID_00008"],
        "14":["ID_00027","ID_00003","ID_00004","ID_00007","ID_00009", "ID_00008","ID_00011","ID_00015","ID_00017","ID_00019","ID_00028","ID_00030","ID_00031"],
     };
     var dep ={
      "ID_00000":"AMAZONAS",
      "ID_00001":"ANCASH",
      "ID_00002":"APURIMAC",
      "ID_00003":"AREQUIPA",
      "ID_00004":"AYACUCHO",
      "ID_00005":"CAJAMARCA",
      "ID_00006":"CALLAO",
      "ID_00007":"CUSCO",
      "ID_00008":"HUANCAVELICA",
      "ID_00009":"HUANUCO",
      "ID_00010":"ICA",
      "ID_00011":"JUNIN",
      "ID_00012":"LA LIBERTAD",
      "ID_00013":"LAMBAYEQUE",
      "ID_00015":"LIMA",
      "ID_00016":"LORETO",
      "ID_00017":"MADRE DE DIOS",
      "ID_00018":"MOQUEGUA",
      "ID_00019":"PASCO",
      "ID_00020":"PIURA",
      "ID_00027":"PUNO",
      "ID_00028":"SAN MARTIN",
      "ID_00029":"TACNA",
      "ID_00030":"TUMBES",
      "ID_00031":"UCAYALI"
    } 

     
     myMapsId = '1Esh3ixG7VX8MTyC79BeDl9oCBBQ';//peru   
     myMapsId1 = '1fckCTkw-AWmCFk_JfQRilyHkhdc';//er         
     src_er='http://dimse.cenepred.gob.pe/er/'+id_er+'/kml/';
     src_base='http://dimse.cenepred.gob.pe/er/base/';
     var src = 'https://www.google.com/maps/d/kml?mid=' + myMapsId;
     //var src1 = 'https://www.google.com/maps/d/kml?mid=' + myMapsId1;
          
     var src_er_peru = src_er+'er_dep.kml?ver=1.1';     
     var src1 = src_er+'peru_departamentos.kml?ver=1.1';
     var home = '<a href="#" id="menu-home" onclick="initMap()"> <span class="glyphicon glyphicon-home"></span> Ir a Peru</a>';
     
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
         if(id=="g121fc267acd629d2")
         {
           testimonial.innerHTML = home+abancay; 
         }
         else if(id=="g2fb3c1201b77f96c")
         {
           testimonial.innerHTML = home+andahuaylas; 
         }
         //
         else if(id=="ga6060ea05675f612")
         {
           testimonial.innerHTML = home+antabamba; 
         }
         else if(id=="g64648304057ecce5")
         {
           testimonial.innerHTML = home+aymaraes; 
         }
         else if(id=="g4152c2168b55e15b")
         {
           testimonial.innerHTML = home+cotabambas; 
         }
         else if(id=="gdf54607ebc41ada9")
         {
           testimonial.innerHTML = home+chincheros; 
         }
         else if(id=="g1eca88eb16334d25")
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
         else if(id=="g63fab0c4b1cc4a55"){
           testimonial.innerHTML = home+puno; 
         }else if(id=="ge1eabfa26e762e43"){
           testimonial.innerHTML = home+azangaro; 
         }else if(id=="g04e02347c7665f29"){
           testimonial.innerHTML = home+carabaya; 
         }else if(id=="g3d7b60660e4df927"){
           testimonial.innerHTML = home+chucuito; 
         }else if(id=="g3fc5704a3b8ea398"){
           testimonial.innerHTML = home+collao; 
         }else if(id=="g199b508d02b536d9"){
           testimonial.innerHTML = home+huancane; 
         }else if(id=="g61087ab667bae6f3"){
           testimonial.innerHTML = home+lampa; 
         }else if(id=="g682557422517de36"){
           testimonial.innerHTML = home+melgar; 
         }else if(id=="g8854f8439b154ac0"){
           testimonial.innerHTML = home+moho; 
         }else if(id=="g86d578fda97668d1"){
           testimonial.innerHTML = home+putina; 
         }else if(id=="gab4601d006f959be"){
           testimonial.innerHTML = home+san_roman; 
         }else if(id=="gc161ee6b0f2a9e95"){
           testimonial.innerHTML = home+sandia; 
         }else if(id=="g7177c0f241a26ab6"){
           testimonial.innerHTML = home+yunguyo; 
         }         
         //AREQUIPA
         else if(id=="gbea0ed5330e542e3"){
           testimonial.innerHTML = home+arequipa; 
         }else if(id=="g23108fd2328b58fb"){
           testimonial.innerHTML = home+camana;
         }else if(id=="g97e299d2753e5084"){
           testimonial.innerHTML = home+caraveli; 
         }else if(id=="g75e7e7d27084c5c3"){
           testimonial.innerHTML = home+castilla; 
         }else if(id=="g6e7d0447f38e3634"){
           testimonial.innerHTML = home+caylloma;  
         }else if(id=="g4c9f7532c8a0aac9"){
           testimonial.innerHTML = home+condesuyos; 
         }else if(id=="g03cca1f1fc8df300"){
           testimonial.innerHTML = home+islay;  
         }else if(id=="gb7239ef7dec290d9"){
           testimonial.innerHTML = home+la_union; 
         }
         //AYACUCHO
         else if(id=="gebddca7a744a34cc"){
           testimonial.innerHTML = home+huamanga; 
         }else if(id=="gebddca7a744a34cc"){
           testimonial.innerHTML = home+cangallo; 
         }else if(id=="g0f924bc6deec2c47"){
           testimonial.innerHTML = home+huancasancos; 
         }else if(id=="g09e58d80674f88be"){
           testimonial.innerHTML = home+huanta; 
         }else if(id=="g1dca98ddb36fca10"){            
           testimonial.innerHTML = home+la_mar; 
         }else if(id=="g7647c6105c01c134"){
           testimonial.innerHTML = home+lucanas; 
         }else if(id=="g7091e4be731f2e8d"){
           testimonial.innerHTML = home+parinacochas; 
         }else if(id=="gdfd125b0d1849b2a"){
           testimonial.innerHTML = home+paucar_sara_sara; 
         }else if(id=="g59ca3dae2015ad94"){
           testimonial.innerHTML = home+sucre; 
         }else if(id=="g976612a714e52407"){
           testimonial.innerHTML = home+victor_fajardo; 
         }else if(id=="g2eae52e270bd08ec"){
           testimonial.innerHTML = home+vilcashuaman; 
         }

         //cusco 
         else if(id=="gdc74288a4e4bebc6")
         {
           testimonial.innerHTML = home+cusco; 
         }else if(id=="g1af563817bfb729c")
         {
           testimonial.innerHTML = home+acomayo; 
         }else if(id=="g3bd5d35282790f22")
         {
           testimonial.innerHTML = home+anta; 
         }else if(id=="g3093f94864c7d9c2")
         {
           testimonial.innerHTML = home+calca; 
         }else if(id=="ga53556530118f968")
         {
           testimonial.innerHTML = home+canas; 
         }else if(id=="g7d6e174080497765")
         {
           testimonial.innerHTML = home+canchis; 
         }else if(id=="gb37e61c7969c6721")
         {
           testimonial.innerHTML = home+chumbivilcas; 
         }else if(id=="g23deb07153d3ffad")
         {
           testimonial.innerHTML = home+espinar; 
         }else if(id=="gc969a478b9fbdfa1")
         {          
           testimonial.innerHTML = home+la_convencion;
         }else if(id=="g344bf2efbc459453")
         {
           testimonial.innerHTML = home+paruro; 
         }else if(id=="g612748cc10a51227")
         {
           testimonial.innerHTML = home+paucartambo; 
         }else if(id=="g3913eee3f510c8be")
         {
           testimonial.innerHTML = home+quispicanchi; 
         }else if(id=="g654be3be0b8af515")
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
           testimonial.innerHTML = home+content;
         }
         //var table1 = document.querySelectorAll("table");         
         if ($("#capture table.dis").length) {
             t1 = $("#capture table.dis").html();              
             $("#capture table.dis").remove();
             $("#tbdist").html("<h5>DISTRITOS</h5> <table>"+t1+"</table>");              
         }         
         //document.getElementById('id_m').innerHTML = id;
         addMarker(event.latLng, map);          
         //addMarker(event.latLng); 
         //addMarker(center_pol);         
         //map.setCenter(marker.getPosition());
        });
      }
      //Agregando punto
      var markers = [];
      function addMarker(position, map) {
          deleteMarkers();
          var marker = new google.maps.Marker({
             position: position,
             map: map
           });
          markers.push(marker);   
          //map.panTo(position);

          // if (marker == null)
          // {

          //    marker = new google.maps.Marker({
          //       position: location,
          //       map: map
          //   });
          //   markers.push(marker); 
          // } 
          // else 
          // {   
          //   marker.setPosition(location); 
          // }
      }
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
      function clearMarkers() {
        setMapOnAll(null);
      }
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }

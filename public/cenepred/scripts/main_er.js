     function ir_mapa(id_polig) {  
     // alert('aqui')      
     //   console.log(myvar);
       //var myMapsId = '1dCw0TDW10rTnrzFqC-PNf-oIPFw';        
       //LORETO        
       if (id_polig == "g0e86c1de902d44ad") {         
         var myMapsId = '14aDq7woBGiPdR1zDzjExhM3lyU4';                                                
       }           
       //cajamarca
       else if(id_polig == "g81dd8ca8596e7887") {        
         var myMapsId = '19W-fqi4g-EJuDmwTKN7bJkOZYsI';            
       }
       //Amazonas
       else if(id_polig == "g115e75929e0de7d8") {          
         var myMapsId = '1bGT00c6ZPpoy22BwJHJhM3SQnqc';            
       }
       // San Martin
       else if(id_polig == "gf918c1ebb373d589") {          
         var myMapsId = '1ptyQVfzKy59wcuTfJrYA51UlYNg';            
       }
       //Tumbes
       else if(id_polig == "g26a11d91ca3c0651") {          
         var myMapsId = '1YS8PoP13Pj7ZXUdPWmwsSMCdtsM';            
       }
       //Piura
       else if(id_polig == "g305b74520a0afa43") {          
         var myMapsId = '190HpYGFTBUkTMATLWzNhdC1ZWw0';            
       }
       //Lambayeque
       else if(id_polig == "g5c12be3fd7486e5b") {          
         var myMapsId = '1znFQyk-NR8is1oZTqprS9i4YODI';            
       }   
       //La Libertad
       else if(id_polig == "gda1306cb4e218021") {          
         var myMapsId = '19KR-Emnu5ywcnjocznV01h7QToE';            
       } 
       //Huanuco
       else if(id_polig == "g413940492a957708") {          
         var myMapsId = '1h9KZVXapnvaN63X7karNSP5DzWw';            
       }
       //Pasco
       else if(id_polig == "g4b9236c032bf1463") {          
         var myMapsId = '1Y-G4xmGTrX3650-_HmsbIrHVSgE';            
       }
       //Junin
       else if(id_polig == "g17778c583aabd425") {          
         var myMapsId = '1EXpXXhKaRkp4_yovlZPm3Nbcs7A';            
       }
       //Lima
       else if(id_polig == "g10df4f066941f623") {          
         var myMapsId = '127njjqzSsQUf7q9FxHuSpQI5tYM';            
       }
       //Ucayali
       else if(id_polig == "g9220ec223549d263") {          
         var myMapsId = '1c4BsXm1k9VJrsJNkRKfO6GYd5CA';            
       }
       //Ica
       else if(id_polig == "gece321411ec218fb") {          
         var myMapsId = '12yRkGQJl8xXEOmAobGS5K50UPnY';            
       }
       //Huancavelica
       else if(id_polig == "g91d76acf536b2acb") {          
         var myMapsId = '1H2Z7ngK-9a5IEMVZU8GNuHgV_sw';            
       }
       //Apurimac
       else if(id_polig == "ge647d7fe0584bc0a") {                    
         var src= src_dimse+"er_apurimac.kml";            
         var src1= src_dimse+"b_apurimac.kml";             
       }
       //Madre de Dios
       else if(id_polig == "g17e25eb04984a1a7") {          
         var myMapsId = '1rnM-pm5SbFEqubarmbL8dGKHeXA';            
       }
       //Puno
       else if(id_polig == "g9a8e5d233ad629cc") {          
         var src= src_dimse+"er_puno.kml";            
         var src1= src_dimse+"b_puno.kml";
       }
       //MOQUEGUA
       else if(id_polig == "gba5d42d5f88e0353") {          
         var myMapsId = '1q_GLdSaplhermRxVqNd4Coe7mKw';            
       }
       //TACNA
       else if(id_polig == "g24df5f81b77f20a3") {          
         var myMapsId = '1JMv8ISsN4_W06X2z8Cpte6hsICk';            
       }
       //CUSCO 
       else if(id_polig == "g17ff428dae69b7aa") {          
         var src= src_dimse+"er_cusco.kml";            
         var src1= src_dimse+"b_cusco.kml";        
       }
       //CALLAO  
       else if(id_polig == "ge3b295f8c41fcff0") {          
         var myMapsId = '116GTZZWv4MxPiUnx_q3Pd7qQ2_Q';           
       }
       //ayacucho 
       else if(id_polig == "gaf2b3c3afd5a1b35") {          
         //var myMapsId = '1TUV48Gr3c_KAmp9HPHk3aSt3ZdI';
         var src= src_dimse+"er_ayacucho.kml";            
         var src1= src_dimse+"b_ayacucho.kml";            
       } 
       //AREQUIPA 
       else if(id_polig == "ge64cd60fe8c348fe") {                                         
         var src= src_dimse+"er_arequipa.kml";                        
         var src1= src_dimse+"b_arequipa.kml";                        
       }
       //ANCASH 
       else if(id_polig == "gd88bfb75d7639cbf") {          
         var myMapsId = '1H2ghoiJCaunVqOUQLZX3SqUpzkw';            
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
     var src = src_dimse+'ER_17_02_17_DISTRITAL_small.kml';
      var src1 = src_dimse+'peru_departamentos.kml?ver=1.0';
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
        loadKmlLayer_er(src, map);
       loadKmlLayer(src1, map);
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
         //LORETO          
         if (id=="g77cc5f41b2dc63b1") {
           testimonial.innerHTML = home+alto_amazonas;
         }
         else if(id=="ga0960976e973c2be")
         {
           testimonial.innerHTML = home+loreto; 
         }
         else if(id=="ga313ebf6b6a0dbde")
         {
           testimonial.innerHTML = home+mrc; 
         }
         else if(id=="g508c47adca785ee1")
         {
           testimonial.innerHTML = home+requena; 
         }
         else if(id=="gd1f1d22e09bfcdca")
         {
           testimonial.innerHTML = home+dm; 
         }
         else if(id=="gee33f3263f146751")
         {
           testimonial.innerHTML = home+ucayali; 
         }
         else if(id=="g06734e4586c76367")
         {
           testimonial.innerHTML = home+putumayo; 
         }
         else if(id=="g153716fb92eaa572")
         {
           testimonial.innerHTML = home+maynas; 
         }
         //MADRE DE DIOS
         else if(id=="ga1fbaab42ac4347d")
         {
           testimonial.innerHTML = home+manu; 
         }
         else if(id=="gd9541aff63200d17")
         {
           testimonial.innerHTML = home+tambopata; 
         }
         else if(id=="g86e71aa325de149f")
         {
           testimonial.innerHTML = home+tahuamanu; 
         }

         //PIURA
         else if(id=="ge5d497991225f5e6")
         {
           testimonial.innerHTML = home+piura; 
         }
         else if(id=="g0b7ee1cc1b7559af")
         {
           testimonial.innerHTML = home+talara; 
         }
         else if(id=="g71699fdda9985799")
         {
           testimonial.innerHTML = home+paita; 
         }
         else if(id=="g17dc82871309ad74")
         {
           testimonial.innerHTML = home+sullana; 
         }
         else if(id=="gaa4b372132e9368f")
         {
           testimonial.innerHTML = home+sechura; 
         }
         else if(id=="g843852fb94e431a2")
         {
           testimonial.innerHTML = home+morropon; 
         }
         else if(id=="gebe9ee4dcd3981c4")
         {
           testimonial.innerHTML = home+huancabamba; 
         }
         else if(id=="gb25021d1343f6bf7")
         {
           testimonial.innerHTML = home+ayabaca; 
         }
         //AMAZONAS -R
         else if(id=="gc885b2a9d600d837")
         {
           testimonial.innerHTML = home+bagua; 
         }
         else if(id=="g4539cb913bfa47b7")
         {
           testimonial.innerHTML = home+bongara; 
         }
         else if(id=="gfd29a649b4e82e8d")
         {
           testimonial.innerHTML = home+condorcanqui; 
         }
         else if(id=="g2a08c7681f4c05e9")
         {
           testimonial.innerHTML = home+luya; 
         }
         else if(id=="g7aa9254be7f3a7f1")
         {
           testimonial.innerHTML = home+rodriguez_mendoza; 
         }
         else if(id=="g58b0699402599173")
         {
           testimonial.innerHTML = home+utcubamba; 
         }
         else if(id=="g7f99f81b38705e06")
         {
           testimonial.innerHTML = home+chachapoyas; 
         }
         //APURIMAC           
         else if(id=="gdcf7010bd75c8af2")
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

         //CALLAO
         else if(id=="gd5973002f82be582"){            
           testimonial.innerHTML = home+callao; 
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
         //HUANUCO
         else if(id=="gfba3469305bf3535"){            
           testimonial.innerHTML = home+huanuco; 
         }
         else if(id=="g91b7f60ceef6734a"){            
           testimonial.innerHTML = home+ambo; 
         }
         else if(id=="gf35b16c8d265f7b4"){            
           testimonial.innerHTML = home+dos_mayo; 
         }
         else if(id=="g316b7f167d4b622f"){            
           testimonial.innerHTML = home+huacaybamba; 
         }
         else if(id=="g85e8dfd8ba101081"){            
           testimonial.innerHTML = home+huamalies; 
         }
         else if(id=="gda320b52fdb19f62"){            
           testimonial.innerHTML = home+leoncio_prado; 
         }
         else if(id=="ga3e27c768d1723e7"){            
           testimonial.innerHTML = home+maranon; 
         }
         else if(id=="gb18cfcca92f9805e"){            
           testimonial.innerHTML = home+pachitea; 
         }
         else if(id=="gf2d6e6db7ca289e3"){            
           testimonial.innerHTML = home+puerto_inca; 
         }
         else if(id=="g1e15ea3fa7bdf6e6"){            
           testimonial.innerHTML = home+lauricocha; 
         }
         else if(id=="g1d2093d1898de816"){            
           testimonial.innerHTML = home+yarowilca; 
         }
         //ICA
         else if(id=="gb2be59f403b4ff2c"){           
           testimonial.innerHTML = home+chincha; 
         }
         else if(id=="g57c92435693062e1"){           
           testimonial.innerHTML = home+pisco; 
         }
         else if(id=="g1f8a2afaf427d96f"){           
           testimonial.innerHTML = home+ica; 
         }
         else if(id=="g8ac490cdc791328e"){           
           testimonial.innerHTML = home+palpa; 
         }
         else if(id=="geb3d4755227337c7"){           
           testimonial.innerHTML = home+nasca; 
         }
         //junin
         else if(id=="g3f8732c4ec9ec984"){           
           testimonial.innerHTML = home+yauli; 
         }
         else if(id=="gd5129399e4116f18"){           
           testimonial.innerHTML = home+junin; 
         }
         else if(id=="g9f30c6266f3e1a6a"){           
           testimonial.innerHTML = home+tarma; 
         }
         else if(id=="g96d040d365cbdedb"){           
           testimonial.innerHTML = home+jauja; 
         }
         else if(id=="gb7813c3c69cc7b66"){           
           testimonial.innerHTML = home+chanchamayo; 
         }
         else if(id=="g2fece1418875b37d"){           
           testimonial.innerHTML = home+concepcion; 
         }
         else if(id=="g4ea03bd13c16fc90"){           
           testimonial.innerHTML = home+chupaca; 
         }
         else if(id=="g87bb40e1e01b8f13"){           
           testimonial.innerHTML = home+huancayo; 
         }
         else if(id=="ged3ac8e6e7affe5f"){           
           testimonial.innerHTML = home+satipo; 
         }
         //Libertad
         else if(id=="g8008fc5f1f7ea050"){           
           testimonial.innerHTML = home+trujillo; 
         }
         else if(id=="ge373ca2d296a2ebb"){           
           testimonial.innerHTML = home+ascope; 
         }
         else if(id=="ga852362d36b6d902"){           
           testimonial.innerHTML = home+bolivar; 
         }
         else if(id=="g64154d36d4b9cd37"){           
           testimonial.innerHTML = home+chepen; 
         }
         else if(id=="g567da423b7b06717"){           
           testimonial.innerHTML = home+julcan; 
         }
         else if(id=="g72291a2e8b9f27bc"){           
           testimonial.innerHTML = home+otuzco; 
         }
         else if(id=="g8ae2688e35e84171"){           
           testimonial.innerHTML = home+pacasmayo; 
         }
         else if(id=="g86bc80865f533100"){           
           testimonial.innerHTML = home+pataz; 
         }
         else if(id=="ge20a867f223576d6"){           
           testimonial.innerHTML = home+sanchez_carrion; 
         }
         else if(id=="g2b7842ac632434bf"){           
           testimonial.innerHTML = home+santiago_chuco; 
         }
         else if(id=="g4487e7dd45936e94"){           
           testimonial.innerHTML = home+gran_chimu; 
         }
         else if(id=="g801b15c42a63f169"){           
           testimonial.innerHTML = home+viru; 
         }
         //LAMBAYEQUE 
         else if(id=="g672746d8bc60c4b7"){
           testimonial.innerHTML = home+chiclayo; 
         }else if(id=="gb4efad9bb7a60df7"){
           testimonial.innerHTML = home+ferrenafe; 
         }else if(id=="gf1cbb4e0f64cc78e"){
           testimonial.innerHTML = home+lambayeque; 
         }
         //lima 
         else if(id=="g824bbef7b61aa677"){
           testimonial.innerHTML = home+lima; 
         }
         else if(id=="g117641dc726679cf"){
           testimonial.innerHTML = home+barranca; 
         }
         else if(id=="gc97a649f3fb84fba"){
           testimonial.innerHTML = home+cajatambo; 
         }
         else if(id=="ge96d33554db96539"){
           testimonial.innerHTML = home+canta; 
         }
         else if(id=="g919e5060d7b0a349"){
           testimonial.innerHTML = home+canete; 
         }
         else if(id=="g698fa21e3d2a7755"){
           testimonial.innerHTML = home+huaral; 
         }
         else if(id=="gc034577f7fd64c2c"){
           testimonial.innerHTML = home+huarochiri; 
         }
         else if(id=="g7e0b458e7b8c0630"){
           testimonial.innerHTML = home+huaura; 
         }
         else if(id=="gec189d40eb48eae9"){
           testimonial.innerHTML = home+oyon; 
         }
         else if(id=="g3321f844fa87c75e"){
           testimonial.innerHTML = home+yauyos; 
         }
         //moquegua 
         else if(id=="g251588fc63cd8552"){
           testimonial.innerHTML = home+mariscal_nieto; 
         }else if(id=="g86857b540e7bff15"){
           testimonial.innerHTML = home+sanchez_cerro; 
         }else if(id=="gc4fdb850390e2884"){
           testimonial.innerHTML = home+ilo; 
         }
         //pasco 
         else if(id=="g498828f043ba3ea0"){
           testimonial.innerHTML = home+pasco; 
         }else if(id=="gfaebd0ce4c6c1f36"){
           testimonial.innerHTML = home+dac; 
         }
         
         else if(id=="gb30299649336b2a4"){
           //alert(oxa1);
           testimonial.innerHTML = home+oxapampa; 
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
         //san martin  
         else if(id=="g7c054942dea570ac"){
           testimonial.innerHTML = home+moyobamba; 
         }else if(id=="g460607b83cbe0175"){
           testimonial.innerHTML = home+bellavista; 
         }else if(id=="ga800a4e18a51910c"){
           testimonial.innerHTML = home+dorado; 
         }else if(id=="gfd2ec61e90e707fb"){
           testimonial.innerHTML = home+huallaga; 
         }else if(id=="gbe2d5b48900feccd"){
           testimonial.innerHTML = home+lamas; 
         }else if(id=="g2c2139b3b0eb1e18"){
           testimonial.innerHTML = home+mariscal_caceres; 
         }else if(id=="gc554cf22d96e5734"){
           testimonial.innerHTML = home+picota; 
         }else if(id=="g79931a58e5d39dd8"){
           testimonial.innerHTML = home+rioja; 
         }else if(id=="g958d389978231fc4"){
           testimonial.innerHTML = home+san_martin; 
         }else if(id=="g9f6f56d18fdb7f05"){
           testimonial.innerHTML = home+tocache; 
         }
         //TACNA 
         else if(id=="g719273a8a43d4ced"){
           testimonial.innerHTML = home+tacna; 
         }else if(id=="g6c8da13de7394ee9"){
           testimonial.innerHTML = home+candarave; 
         }else if(id=="g2ea9a0cfc63b530e"){
           testimonial.innerHTML = home+jorge_basadre; 
         }
         else if(id=="gf26d8c82557257a4"){
           testimonial.innerHTML = home+tarata; 
         }
         //TUMBES 
         else if(id=="g4e6b2e2c974f650e"){
           testimonial.innerHTML = home+tumbes; 
         }else if(id=="g53e17f2d623e50c2"){
           testimonial.innerHTML = home+contralmirante_villar; 
         }else if(id=="g8e3e669a2e1842ba"){
           testimonial.innerHTML = home+zarumilla; 
         }          
         //UCAYALI 
         else if(id=="g32d48ab7096cc68b"){
           testimonial.innerHTML = home+portillo; 
         }else if(id=="g40f2f0e04ff2ba25"){
           testimonial.innerHTML = home+atalaya; 
         }else if(id=="g1a2f29b9dfe76342"){
           testimonial.innerHTML = home+padre_abad; 
         }
         else if(id=="gc6df95f43efdf030"){
           testimonial.innerHTML = home+purus; 
         }
         //ANCASH 
         else if(id=="g96d6d1d37a34771d"){
           testimonial.innerHTML = home+huaraz; 
         }else if(id=="g484b922ff534e82d"){
           testimonial.innerHTML = home+aija; 
         }else if(id=="g54fbeadc990abca3"){
           testimonial.innerHTML = home+antonio_raymondi; 
         }else if(id=="g3364bb5ed6c0cbfa"){
           testimonial.innerHTML = home+asuncion; 
         }else if(id=="g064acf48a07affcd"){
           testimonial.innerHTML = home+bolognesi; 
         }else if(id=="g00606b5fd1865ebf"){
           testimonial.innerHTML = home+carhuaz; 
         }else if(id=="gcb06e5ed4f88faa1"){
           testimonial.innerHTML = home+cff; 
         }else if(id=="gbeaa862ba3074304"){
           testimonial.innerHTML = home+casma; 
         }else if(id=="g8aeed8975a4e3b89"){
           testimonial.innerHTML = home+corongo; 
         }else if(id=="g795926428e06312e"){
           testimonial.innerHTML = home+huari; 
         }else if(id=="g4559d03628ee4958"){
           testimonial.innerHTML = home+huarmey; 
         }
         else if(id=="ge814f2b6061a7561"){
           testimonial.innerHTML = home+caraz; 
         }
         else if(id=="g7955d42a3025b307"){
           testimonial.innerHTML = home+mariscal_luzuriaga; 
         }          
         else if(id=="gcbf26a6af63fd9b1"){
           testimonial.innerHTML = home+ocros; 
         }
         else if(id=="g192761cb5dc38a1b"){
           testimonial.innerHTML = home+pallasca; 
         }
         else if(id=="g3afcc6d1dfb186c7"){
           testimonial.innerHTML = home+pomabamba; 
         }
         else if(id=="g4dd9fc998c1ad3f4"){
           testimonial.innerHTML = home+recuay; 
         }
         else if(id=="g3235f4dada8a5441"){
           testimonial.innerHTML = home+santa; 
         }
         else if(id=="gc4f0a93106267387"){
           testimonial.innerHTML = home+sihuas; 
         }
         else if(id=="g4e3b569a323e4406"){
           testimonial.innerHTML = home+yungay; 
         }
         //AREQUIPA -R
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
         //AYACUCHO -R
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
         else if(id=="gf56a5ce73f8a7603")
         {
           testimonial.innerHTML = home+cusco; 
         }else if(id=="ga790c2e7b06fc8af")
         {
           testimonial.innerHTML = home+acomayo; 
         }else if(id=="g0e8db2c36485e20d")
         {
           testimonial.innerHTML = home+anta; 
         }else if(id=="ge66867fe829746e4")
         {
           testimonial.innerHTML = home+calca; 
         }else if(id=="ga7d07549d1659a76")
         {
           testimonial.innerHTML = home+canas; 
         }else if(id=="g95773869efeb32d6")
         {
           testimonial.innerHTML = home+canchis; 
         }else if(id=="g1ce727391bbb2eba")
         {
           testimonial.innerHTML = home+chumbivilcas; 
         }else if(id=="g274eab56978f7cb6")
         {
           testimonial.innerHTML = home+espinar; 
         }else if(id=="g9510739383866676")
         {
           testimonial.innerHTML = home+la_convencion; 
         }else if(id=="g1faaa71c920de0c0")
         {
           testimonial.innerHTML = home+paruro; 
         }else if(id=="g52431b564072798d")
         {
           testimonial.innerHTML = home+paucartambo; 
         }else if(id=="g1bdf959c3bfdcb82")
         {
           testimonial.innerHTML = home+quispicanchi; 
         }else if(id=="ged979eaa773a2664")
         {
           testimonial.innerHTML = home+urubamba; 
         }
         //CAJAMARCA 
         else if(id=="g2354fb82d00fcb92")
         {
           testimonial.innerHTML = home+cajamarca; 
         }
         else if(id=="g23d8533b37529c9b")
         {
           testimonial.innerHTML = home+cajabamba; 
         }
         else if(id=="g7fe51b3adaac4ec7")
         {
           testimonial.innerHTML = home+celendin; 
         }
         else if(id=="g931e51b1e4ea7c17")
         {
           testimonial.innerHTML = home+chota; 
         }
         else if(id=="g0c69346fe5fe43d2")
         {
           testimonial.innerHTML = home+contumaza; 
         }
         else if(id=="ga5447c901dad9565")
         {
           testimonial.innerHTML = home+cutervo; 
         }
         else if(id=="gc9ba3587c35e1c39")
         {
           testimonial.innerHTML = home+hualgayoc; 
         }
         else if(id=="g278f957c92a379b2")
         {
           testimonial.innerHTML = home+jaen; 
         }
         else if(id=="gd23667e1ee0e3dcf")
         {
           testimonial.innerHTML = home+san_ignacio; 
         }
         else if(id=="g788130bac004888a")
         {
           testimonial.innerHTML = home+san_marcos; 
         }
         else if(id=="g2ab8de497a134cba")
         {
           testimonial.innerHTML = home+san_miguel; 
         }
         else if(id=="gd324a75d3f0b07d0")
         {
           testimonial.innerHTML = home+san_pablo; 
         }
         else if(id=="ga757c0bd1117ba6d")
         {
           testimonial.innerHTML = home+santa_cruz; 
         }
         //GOBIERNOS REGIONALES          
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_amazonas+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_ancash+gob_locales; 
         }
         else if(id=="ge647d7fe0584bc0a")
         {
           testimonial.innerHTML = home+gore_apurimac+gob_locales; 
         }
         else if(id=="ge64cd60fe8c348fe")
         {
           testimonial.innerHTML = home+gore_arequipa+gob_locales; 
         }
         else if(id=="gaf2b3c3afd5a1b35")
         {
           testimonial.innerHTML = home+gore_ayacucho+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_cajamarca+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_callao+gob_locales; 
         }
         else if(id=="g17ff428dae69b7aa")
         {
           testimonial.innerHTML = home+gore_cusco+gob_locales; 
         }
         else if(id=="g7f60959b1c3dd310")
         {
           testimonial.innerHTML = home+gore_huancavelica+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_huanuco+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_ica+gob_locales; 
         }
         else if(id=="g5d67a12ba8f531df")
         {
           testimonial.innerHTML = home+gore_junin+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_la_libertad+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_lambayeque+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_lima+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_loreto+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_madre_de_dios+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_moquegua+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_pasco+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_piura+gob_locales; 
         }
         else if(id=="g9a8e5d233ad629cc")
         {
           testimonial.innerHTML = home+gore_puno+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_san_martin+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_tacna+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_tumbes+gob_locales; 
         }
         else if(id=="ggggg")
         {
           testimonial.innerHTML = home+gore_ucayali+gob_locales; 
         }
         

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

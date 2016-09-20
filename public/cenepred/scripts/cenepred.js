
  
  $(document).ready(function(){
  	//ayuda atributo title	
    if ($('.ayuda').length){
      $('.ayuda').tooltip();
    }
    //pestanas 
    if ($("#myTab").length) {
    	$("#myTab a").click(function(e){
	      	e.preventDefault();
	      	$(this).tab('show');
  		});	
    }

    //item menu activo (no funca)
    $( ".nav li" ).each(function() {
        $(this).click(function(){
          $('.nav li').removeClass('active');
          $(this).addClass('active');  
          //alert('hola');
        })      
    });

  });

// document.addEventListener("DOMContentLoaded", function(event) { 
//   menu = document.querySelector('#bs-example-navbar-collapse-1 ul li')  
//   menu.onclick=function(){
//     menu.classList.add('cenepred-');  
//   };  
// });
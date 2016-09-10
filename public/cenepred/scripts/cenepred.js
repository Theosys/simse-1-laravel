
  
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

  });

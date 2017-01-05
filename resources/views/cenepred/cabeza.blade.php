<div id="header">			
		    <div class="container-fluid">
			    <span id="logo"><img alt="logo-cenepred" src=" {{ url('/cenepred/images/logo.png') }}" width="120" title="logo-cenepred" /></span>
			    <span id="title-main"><h1> <span class="title-abrev">SIMSE</span> Sistema de Información de Monitoreo,<br> Seguimiento y Evaluación </h1></span>
		    </div>
		    <div class="social_media">
		    		<ul>
		    			<li><a id="tw" target="_blank" href="https://twitter.com/CENEPRED">Twitter</a></li>
		    			<li><a id="fb" target="_blank" href="https://www.facebook.com/cenepred/timeline/">Facebook</a></li>
		    			<li><a id="yt" target="_blank" href="https://www.youtube.com/channel/UCw9I7jPR0NLMqT2DmDGgMeQ">Youtube</a></li>
		    			<li><a id="ml" target="_blank" href="mailto:webmaster@cenepred.gob.pe">Mail</a></li>
		    		</ul>
		    </div>		     
		    <div>
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>		                  
		    </div>
		    <nav class="navbar navbar-default" >
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="">
            		<ul class="nav navbar-nav" style="">		        	
			        	<li class="active"><a href="{{ url('/') }}">Inicio</a></li>
			        	<li><a href="{{ url('/glosario') }}">Glosario</a></li>
			        	<li><a href="{{ url('/normativas') }}">Documentos Técnicos</a></li>
			        	<li><a href="{{ url('/contacto') }}">Sugerencias</a></li>
			        	<li><a href="{{ url('/directorio') }}">Contacto</a></li>
			        	<li><a href="{{ url('/directorio_mapas') }}">Directorio GRD</a></li>
			        	@if(Auth::user())
			        	<li><a href="{{ url('/admin') }}">Administrador</a></li>			        				        	
			        	@else
			        	<li><a target="_blank" href="http://dimse.cenepred.gob.pe/encuestas">Encuestas</a></li>			        				        	
			        	@endif
		        	</ul>
		        </div>
		    </nav>
</div>

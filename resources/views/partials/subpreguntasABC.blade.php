<?php
$subpreguntas = $pregunta->subpregunta($alternativa->i_codpreg,$alternativa->v_grupo,$alternativa->i_opcion);
?>
@if(is_array($subpreguntas) && !empty($subpreguntas))
	@foreach($subpreguntas as $subpregunta)
		&nbsp;&nbsp;&nbsp;<label>{{$subpregunta->v_despreg}}</label><br>
		@php($alternativas = $pregunta->subalternativa($subpregunta->i_codpreg))	
		@foreach($alternativas as $alternativa)
			&nbsp;&nbsp;&nbsp;@include('partials.tipo_campo_'.$subpregunta->i_codtipo)
			&nbsp;&nbsp;&nbsp;@include('partials.subpreguntasABC')
		@endforeach
	@endforeach
@endif



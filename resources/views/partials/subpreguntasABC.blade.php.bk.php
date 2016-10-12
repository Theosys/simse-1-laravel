<?php
$subpreguntas = $pregunta->subpregunta($alternativa->i_codpreg,$alternativa->v_grupo,$alternativa->i_opcion);
?>
@if(is_array($subpreguntas) && !empty($subpreguntas))
<div class="row">
	@php($last_i_codtipo = 0)
	@foreach($subpreguntas as $subpregunta)
		<div class="form-group">
		<!--ocultar-->
		@php($alternativas = $pregunta->subalternativa($subpregunta->i_codpreg))	
		@if($subpregunta->i_codtipo == 4)
			@php($var_band_group = 1)
			@if($last_i_codtipo != 4)
				<table border="1">	
					<tr>
						<td>&nbsp;</td>
					@foreach($alternativas as $alternativa)
						<td>{{$alternativa->v_desalt}}</td>
					@endforeach
					</tr>
			@endif
		@else	
			@php($var_band_group = 0)
		@endif

		@if($var_band_group==1)
			<tr>
				<td>{{$subpregunta->v_despreg}}</td>
		@else
			<label class="control-label">{{$subpregunta->v_despreg}}</label>
		@endif

		@foreach($alternativas as $alternativa)
			@include('partials.tipo_campo_'.$subpregunta->i_codtipo)
			@include('partials.subpreguntasABC')
		@endforeach
		
		@if($var_band_group==1)
			</tr>
		@endif

		@if($var_band_group==0 && $last_i_codtipo==4)
			</table>
		@endif

		@php($last_i_codtipo = $subpregunta->i_codtipo)
		</div>
	@endforeach
</div>	
@endif
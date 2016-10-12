<?php
$subpreguntas = $pregunta->subpregunta($alternativa->i_codpreg,$alternativa->v_grupo,$alternativa->i_opcion);
?>

@if(is_array($subpreguntas) && !empty($subpreguntas))
<div class="form-group">
	@php($last_parent = 0)
	@php($look_out = 0)
	@foreach($subpreguntas as $subpregunta)
		i_parent:{{$subpregunta->i_parent}}<br>
		@php($alternativas = $pregunta->subalternativa($subpregunta->i_codpreg))
		@if($look_out == 2 && $subpregunta->i_parent!=$last_parent)
			</table>
			@php($look_out = 3)
		@endif
		@if($subpregunta->i_codtipo==4)
			@if($subpregunta->i_parent!=$last_parent)
				@php($look_out = 1)
				<table border="1">
				<tr><td>&nbsp;</td>
				@foreach($alternativas as $alternativa)
					<td>{{$alternativa->v_desalt}}</td>
				@endforeach
				</tr>
			@endif
			@php($look_out = 2)
		@else
			&nbsp;<label>{{$subpregunta->v_despreg}}</label>
		@endif
		
		@if($look_out==2)
			<tr><td>{{$subpregunta->i_codpreg}}| {{$subpregunta->v_despreg}} </td>
		@endif

		@foreach($alternativas as $alternativa)
			@include('partials.tipo_campo_'.$subpregunta->i_codtipo)
		@endforeach
		
		@if($look_out==2)
			</tr>
		@endif
		
		@foreach($alternativas as $alternativa)
			@include('partials.subpreguntasABC')
		@endforeach

		@php($last_parent = $subpregunta->i_parent)

		
	@endforeach

	@if($look_out == 2)
		</table>
	@endif
</div>	
@endif
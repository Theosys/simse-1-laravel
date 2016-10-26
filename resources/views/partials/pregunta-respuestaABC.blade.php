@if($pregunta->i_codtipo==4)
	@php($matriz_alternativas = $pregunta->subalternativa($pregunta->i_codpreg))

	@if($pregunta->i_grupo!=$parent_last_grupo)
		<!-- ABRIR DIB Y TABLA con {{$parent_look_out}}-->
		@php($parent_look_out = 1)
		<div class="form-group">		
		<table class="table table-striped">
			<thead><tr>
				<th>&nbsp;</th>
				@foreach($matriz_alternativas as $alternativa)
				<th>{{$alternativa->v_desalt}}</th>
				@endforeach
			</tr></thead>
	@endif
	@php($parent_look_out = 2)

	@if($parent_look_out==2)
		<tr><td>{{$pregunta->v_despreg}} </td>
	@endif
	@foreach($matriz_alternativas as $alternativa)
		@include('partials.tipo_campo_'.$pregunta->i_codtipo)
	@endforeach						
	@if($parent_look_out==2)
		</tr>
	@endif
	<?php /*
	<!--<span>{{$pregunta->v_resumen}}</span>-->
	@foreach($matriz_alternativas as $alternativa)
		@include('partials.subpreguntasABC')
	@endforeach
	*/?>
@else
	@if($parent_last_codtipo == 4 && $pregunta->i_grupo!=$parent_last_grupo && $pregunta->i_grupo!=0)
        </table>
        </div> <!-- CERRANDO TABLA Y DIV-->
    @endif
	<div class="form-group">
	    i_codpreg:{{$pregunta->i_codpreg}}<br>
	    <label>{!! $pregunta->v_despreg !!}</label>
	    @include('partials.opcionesABC')
	</div>
@endif


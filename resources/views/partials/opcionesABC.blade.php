@foreach($pregunta->alternativas as $alternativa)
    @include('partials.tipo_campo_'.$pregunta->i_codtipo)
@endforeach
@if($pregunta->v_resumen!="")
	<span class="glyphicon glyphicon-info-sign"></span><span> {{$pregunta->v_resumen}}</span>
@endif
<!--traer subpreguntas para cada pregunta-->
@foreach($pregunta->alternativas as $alternativa)
    @include('partials.subpreguntasABC')
@endforeach
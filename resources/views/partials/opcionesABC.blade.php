@foreach($pregunta->alternativas as $alternativa)
    @include('partials.tipo_campo_'.$pregunta->i_codtipo)
@endforeach

@foreach($pregunta->alternativas as $alternativa)
    @include('partials.subpreguntasABC')
@endforeach
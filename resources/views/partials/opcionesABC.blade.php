@foreach($pregunta->alternativas as $alternativa)
    @include('partials.tipo_campo_'.$pregunta->i_codtipo)
    --<br>
    @include('partials.subpreguntasABC')
@endforeach
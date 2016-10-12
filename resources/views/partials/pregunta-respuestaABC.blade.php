<div class="form-group">
    @foreach($pregunta->alternativas as $alternativa)
        @php($texto = "")
        @if(isset($respuestas))
            @foreach($respuestas as $respuesta)
                @if($respuesta->i_codpreg == $pregunta->i_codpreg)
                    @php($texto = $respuesta->v_desreptex)
                    @break
                @endif
            @endforeach
        @endif
    @endforeach
    i_codpreg:{{$pregunta->i_codpreg}}<br>
    <label>{!! $pregunta->v_despreg !!}</label>
    @include('partials.opcionesABC')
</div>
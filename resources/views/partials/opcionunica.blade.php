<div class="form-group">
    <label>{!! $pregunta->v_despreg !!}</label>
    <br>
    @foreach($pregunta->alternativas as $alternativa)
        @php($seleccionado = "")
        @if(isset($respuestas))
            @foreach($respuestas as $respuesta)
                @if($respuesta->i_codpreg == $pregunta->i_codpreg && $respuesta->i_codalt == $alternativa->i_codalt)
                    @php($seleccionado = "checked")
                    @break
                @endif
            @endforeach
        @endif
        <input class="answer" id="{{$alternativa->i_codpreg}}-{{$alternativa->v_answer}}" type="radio" name="preg[{{$pregunta->i_codpreg}}][alt][]" value="{{$alternativa->i_codalt}}" {{$seleccionado}}>
        <label for="{{'preg['.$pregunta->i_codpreg.']'}}">{!! $alternativa->v_desalt !!}</label>
        <br>
    @endforeach
</div>
<div class="form-group">
    <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg.'-(id '.$pregunta->i_codpreg.')' }}</label>
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
        <input type="checkbox" name="{{'preg['.$pregunta->i_codpreg.']'}}[alt][]" id="" value="{{$alternativa->i_codalt}}" {{$seleccionado}}>
        <label for="{{'preg['.$pregunta->i_codpreg.']'}}">{{$alternativa->v_desalt.'-(id '.$alternativa->i_codalt.')'}}</label>
        <br>
    @endforeach
</div>
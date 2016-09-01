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
    <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg.'-(id '.$pregunta->i_codpreg.')' }}</label>
    <input type="text" name="preg[{{$pregunta->i_codpreg}}][ab][{{$alternativa->i_codalt}}]" id="" size="25" value="{{$texto}}">
    <br>
</div>
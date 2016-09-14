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
    <label>{!! $pregunta->v_despreg !!}</label>
    <!-- <input type="text" name="preg[{{$pregunta->i_codpreg}}][ab][{{$alternativa->i_codalt}}]" id="" size="25" value="{{$texto}}"> -->
    <textarea name="preg[{{$pregunta->i_codpreg}}][ab][{{$alternativa->i_codalt}}]" id="" rows="2" cols="40" >{{$texto}}> </textarea>
    <br>
</div>
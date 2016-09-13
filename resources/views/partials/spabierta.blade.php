<div class="form-group ocultar sub-answer-{{$subpregunta->i_codpreg}}-{{$subpregunta->v_answer}}">
    @foreach($subpregunta->alternativas as $alternativa)
        @php($texto = "")
        @if(isset($subrespuestas))
            @foreach($subrespuestas as $subrespuesta)
                @if($subrespuesta->i_codsubpreg == $subpregunta->i_codsubpreg)
                    @php($texto = $subrespuesta->v_desreptex)
                    @break
                @endif
            @endforeach
        @endif
    @endforeach
    <div class="form-group">
    <label class="control-label">{!! $subpregunta->v_dessubpreg !!}</label>
    <!-- <input type="text" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" id="" size="25" value="{{$texto}}"> -->
    <textarea class="form-control" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" id="" rows="2" cols="40" >{{$texto}} </textarea>
    </div>

</div>

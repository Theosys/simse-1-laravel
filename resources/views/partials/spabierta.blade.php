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
    

    <label>{!! $subpregunta->v_dessubpreg !!}</label>
    
    @if($subpregunta->i_verifica==1)
        <input type="file" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" >
        <input type="button" value="Subir">
    @else
        <input type="text" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" id="" size="25" value="{{$texto}}">
    @endif
    <br>
    @endforeach
</div>


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
    {{$subpregunta->parent_subpreg}}
    @if (isset($subpregunta->parent_subpreg))    
        @php($id_question = $subpregunta->parent_subpreg)
        @if ($subpregunta->parent_subpreg!=0)
            @php($id_question = $subpregunta->i_codpreg)
        @endif
    @endif
    <div class="form-group ocultar sub-answer-{{$subpregunta->parent_subpreg}}-{{$subpregunta->v_answer}}">
        <label>{!! $subpregunta->v_dessubpreg !!}</label>
        
        @if($subpregunta->i_verifica==1)
            <input type="file" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" >
            <input type="button" value="Subir">
        @else
            <input type="text" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" id="" size="25" value="{{$texto}}">
        @endif
        <br>
    </div>
    @endforeach


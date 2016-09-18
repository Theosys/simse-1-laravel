<div class="form-group">
    <label>{!! $pregunta->v_despreg !!}</label>
    <br>
    <table class="table table-bordered">
    @foreach($pregunta->alternativas as $alternativa)
    	<tr>
            <td>{{$alternativa->v_desalt}} - {{$alternativa->v_answer}}</td>
            @foreach($pregunta->subpreguntas as $subpregunta)
                @if($subpregunta->v_grupo == $alternativa->v_grupo)
                    <td>
                    <input class="answer-matriz" id="{{$subpregunta->i_codpreg}}-{{$subpregunta->i_codsubpreg}}-{{$subpregunta->v_answer}}" type="radio"  name="preg[{{$alternativa->i_codalt}}][alt][]" value="{{$alternativa->i_codalt}}">
                        {{$subpregunta->i_codsubpreg}}-{{$subpregunta->v_answer}}, {{$subpregunta->v_dessubpreg}} </td>
                    
                @endif
            @endforeach
		</tr>
    @endforeach
    </table>



    @foreach($pregunta->subpreguntas as $subpregunta)
    <div class="form-group ocultar sub-answer-matriz-{{$subpregunta->i_codpreg}} sub-answer-matriz-{{$subpregunta->i_codsubpreg}}-{{$subpregunta->v_answer}}">    
        <label for="">{{$subpregunta->i_codsubpreg}}-{{$subpregunta->v_answer}}  ,{{$subpregunta->v_dessubpreg}}</label>
        <input type="text">
    </div>
    @endforeach
    
</div>
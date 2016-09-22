<div class="form-group ocultar sub-answer-{{$subpregunta->i_codpreg}}-{{$subpregunta->v_answer}}">
    <label>{!! $subpregunta->v_dessubpreg !!}</label>
    <br>
    @foreach($subpregunta->alternativas as $alternativa)
        @php($seleccionado = "")
        @if(isset($respuestas))
            @foreach($subrespuestas as $subrespuesta)
                @if($subrespuesta->i_codsubpreg == $subpregunta->i_codsubpreg && $subrespuesta->i_codsubalt == $alternativa->i_codsubalt)
                    @php($seleccionado = "checked")
                    @break
                @endif
            @endforeach
        @endif
        <input type="radio" class="answer" name="preg[{{$pregunta->i_codpreg}}][subpreg][{{$subpregunta->i_codsubpreg}}][]" id="{{$alternativa->i_codsubpreg}}-{{$alternativa->v_answer}}" value="{{$alternativa->i_codsubalt}}" {{$seleccionado}}>
        <label for="">{!! $alternativa->v_dessubalt !!}</label>
        <br>
    @endforeach
</div>
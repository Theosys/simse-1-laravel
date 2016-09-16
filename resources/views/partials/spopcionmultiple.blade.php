<div class="form-group ocultar sub-answer-{{$subpregunta->i_codpreg}}-{{$subpregunta->v_answer}}">
    <label>{{ $subpregunta->v_dessubpreg.'-(id '.$subpregunta->i_codsubpreg.')' }}</label>
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
        <input type="checkbox" name="preg[{{$pregunta->i_codpreg}}][subpreg][{{$subpregunta->i_codsubpreg}}][]" id="" value="{{$alternativa->i_codsubalt}}" {{$seleccionado}}>
        <label for="">{!! $alternativa->v_dessubalt !!}</label>
        <br>
    @endforeach
</div>
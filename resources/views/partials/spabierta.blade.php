<div class="form-group">
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
    <label>{{ $subpregunta->v_dessubpreg.'(id '.$subpregunta->i_codsubpreg.')' }}</label>
    <input type="text" name="preg[{{$pregunta->i_codpreg}}][subpregab][{{$subpregunta->i_codsubpreg}}][{{$alternativa->i_codsubalt}}]" id="" size="25" value="{{$texto}}">
    <br>
</div>
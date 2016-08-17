<div class="form-group">
    @if(isset($pregunta->i_numpreg))
        <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg }}</label>
    @else
        <label>{{ $pregunta->v_dessubpreg }}</label>
    @endif
    <br>
    @foreach($pregunta->alternativas as $alternativa)
        <input type="checkbox" name="{{isset($pregunta->i_codsubpreg)?'preg['.$pregunta->i_codpreg.']subpreg['.$pregunta->i_codsubpreg.']':'preg['.$pregunta->i_codpreg.']'}}[]" id="{{isset($alternativa->i_codalt)?$alternativa->i_codalt:$alternativa->i_codsubalt}}" value="{{isset($alternativa->i_codalt)?$alternativa->i_codalt:$alternativa->i_codsubalt}}">
        <label for="preg[{{isset($pregunta->i_codpreg)?$pregunta->i_codpreg:$pregunta->i_codsubpreg}}][]">{{isset($alternativa->v_desalt)?$alternativa->v_desalt:$alternativa->v_dessubalt}}</label>
        <br>
    @endforeach
</div>
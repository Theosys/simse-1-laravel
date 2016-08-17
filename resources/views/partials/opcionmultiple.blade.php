<div class="form-group">
    <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg }}</label>
    <br>
    @foreach($pregunta->alternativas as $alternativa)
        <input type="checkbox" name="{{'preg['.$pregunta->i_codpreg.']'}}[alt][]" id="" value="{{$alternativa->i_codalt}}">
        <label for="{{'preg['.$pregunta->i_codpreg.']'}}">{{$alternativa->v_desalt}}</label>
        <br>
    @endforeach
</div>
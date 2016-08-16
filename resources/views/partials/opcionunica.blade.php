<div class="form-group">
    <label for="i_codpreg">{{ $pregunta->i_numpreg." ".$pregunta->v_despreg }}</label>
    <br>
    @foreach($pregunta->alternativas as $alternativa)
        <input type="radio" name="{{$pregunta->i_codpreg}}" id="{{$alternativa->i_codalt}}" value="{{$alternativa->i_codalt}}">
        <label for="{{$alternativa->i_codalt}}">{{$alternativa->v_desalt }}</label>
        <br>
    @endforeach
</div>
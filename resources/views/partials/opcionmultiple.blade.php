<div class="form-group">
	<h1>opcion multiple</h1>
    <label for="i_codpreg">{{ $pregunta->i_numpreg." ".$pregunta->v_despreg }}</label>
    @foreach($pregunta->alternativas as $alternativa)
        <input type="checkbox" name="{{$pregunta->i_codpreg}}" id="{{$alternativa->i_codalt}}" value="{{$alternativa->i_codalt}}">
        <label for="{{$alternativa->i_codalt}}">{{$alternativa->v_desalt }}</label>
        <br>
    @endforeach
</div>
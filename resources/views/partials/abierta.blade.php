<div class="form-group">
    @if(isset($pregunta->i_numpreg))
        <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg }}</label>
    @else
        <label>{{ $pregunta->v_dessubpreg }}</label>
    @endif
    <input type="text" name="{{isset($pregunta->i_codpreg)?$pregunta->i_codpreg:$pregunta->i_codsubpreg}}" id="" size="25" value="">
    <br>
</div>
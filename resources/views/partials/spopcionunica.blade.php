<div class="form-group">
    <label>{{ $subpregunta->v_dessubpreg }}</label>
    <br>
    @foreach($subpregunta->alternativas as $alternativa)
        <input type="radio" name="preg[{{$pregunta->i_codpreg}}][subpreg][{{$subpregunta->i_codsubpreg}}][]" id="" value="{{$alternativa->i_codsubalt}}">
        <label for="">{{$alternativa->v_dessubalt}}</label>
        <br>
    @endforeach
</div>
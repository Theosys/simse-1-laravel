<div class="form-group">
    @if(isset($pregunta->i_numpreg))
        <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg }}</label>
    @else
        <label>{{ $pregunta->v_dessubpreg }}</label>
    @endif
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <?php $ncol=0;?>
                @foreach($pregunta->alternativas as $alternativa)
                    @if($alternativa->v_orienta == 'TIT')
                        <th>{{isset($alternativa->v_desalt)?$alternativa->v_desalt:$alternativa->v_dessubalt}}</th>
                    @elseif($alternativa->v_orienta == 'COL')
                        <th>{{isset($alternativa->v_desalt)?$alternativa->v_desalt:$alternativa->v_dessubalt}}</th>
                            <?php $ncol++;?>
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($pregunta->alternativas as $alternativa)
                @if($alternativa->v_orienta == 'FIL')
                    <tr>
                        <td>{{isset($alternativa->v_desalt)?$alternativa->v_desalt:$alternativa->v_dessubalt}}</td>
                        @for($i=1;$i<=$ncol;$i++)
                            <td>
                                <input type="checkbox" name="" id="" value="">
                            </td>
                        @endfor
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
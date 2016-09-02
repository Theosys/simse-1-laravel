<div class="form-group">
    <label>{{ $pregunta->i_numpreg.". ".$pregunta->v_despreg }}</label>
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <?php $ncol=0;?>
                @foreach($pregunta->alternativas as $alternativa)
                    @if($alternativa->v_orienta == 'TIT')
                        <th>{{$alternativa->v_desalt}}</th>
                    @elseif($alternativa->v_orienta == 'COL')
                        <th>{{$alternativa->v_desalt}}</th>
                            <?php $ncol++;?>
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($pregunta->alternativas as $alternativa)
                @if($alternativa->v_orienta == 'FIL')
                    <tr>
                        <td>{{$alternativa->v_desalt}}</td>
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
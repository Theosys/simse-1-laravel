<div class="form-group">
    <label>{{ $subpregunta->v_dessubpreg }}</label>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <?php $ncol=0;?>
            @foreach($subpregunta->alternativas as $alternativa)
                @if($alternativa->v_orienta == 'TIT')
                    <th>{{$alternativa->v_dessubalt}}</th>
                @elseif($alternativa->v_orienta == 'COL')
                    <th>{{$alternativa->v_dessubalt}}</th>
                    <?php $ncol++;?>
                @endif
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($subpregunta->alternativas as $alternativa)
            @if($alternativa->v_orienta == 'FIL')
                <tr>
                    <td>{{$alternativa->v_dessubalt}}</td>
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
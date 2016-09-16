<div class="form-group">
    <label>{!! $pregunta->v_despreg !!}</label>
    <br>
    <table class="table table-bordered">
    @foreach($pregunta->alternativas as $alternativa)
    	<tr>
        @php($seleccionado = "")
        @if(isset($respuestas))
            @foreach($respuestas as $respuesta)
                @if($respuesta->i_codpreg == $pregunta->i_codpreg && $respuesta->i_codalt == $alternativa->i_codalt)
                    @php($seleccionado = "checked")
                    @break
                @endif
            @endforeach
        @endif        
        <td>{!! $alternativa->v_desalt !!}</td>
        @foreach($pregunta->subsubpreguntas(84) as $subpregunta)
        	<!--pendiente creaar la subpregunta de cada uno, solo se ha creado para uno-->
            <td><input type="radio"></td>
        @endforeach
		</tr>
    @endforeach
	</table>
</div>

<div class="form-group ocultar sub-answer-{{$subpregunta->i_codpreg}}-{{$subpregunta->v_answer}}">
    <label>4444444444444{!! $pregunta->v_despreg !!}</label>
    <br>



    <table class="table table-bordered">
        <thead>
            <tr>
                @php($ncol=0)
                @foreach($pregunta->alternativas as $alternativa)
                    @if($alternativa->v_orienta == 'TIT')
                        <th>{{$alternativa->v_desalt}}</th>
                    @elseif($alternativa->v_orienta == 'COL')
                        <th>{{$alternativa->v_desalt}}</th>
                        @php($ncol++)
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
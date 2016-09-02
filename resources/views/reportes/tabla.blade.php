<table class="table table-striped table-hover ">		  
	<tbody>
		<tr>
			<td rowspan="3" valign="middle">RESULTADOS ENCUESTA</td>
			<td align="left">Universo</td>
			<td colspan="1">18</td>
			<td colspan="1">25</td>
			<td colspan="1">196</td>
			<td colspan="1">1646</td>
			<td colspan="1">1885</td>			 
		</tr>
		<tr>
			<td align="left">Muestra</td>
			<td colspan="1" >18</td>
			<td colspan="1" >25</td>
			<td colspan="1" >106</td>
			<td colspan="1" >253</td>
			<td >402</td>		
		</tr>
		<tr>
			<td align="left">%</td>
			<td colspan="1">100</td>
			<td colspan="1">100</td>
			<td colspan="1">54.08</td>
			<td colspan="1">15.37</td>
			<td>21.33</td>		
		</tr>

		@foreach ($indicadores as $ind)			
	    <tr>
			<td colspan="2" valign="middle"><b>{{$ind->i_numind}}. Indicador clave: {{$ind->v_resumen}}</b></td>
			<td><b>Ministerio</b></td>
			<td><b>Gobierno Regional</b></td>
			<td><b>Municipalidad Provincial</b></td>
			<td><b>Municipalidad Distrital</b></td>
			<td><b>TOTAL</b></td>
	    </tr>
	    	@php($cont = 1)
	    	@foreach ($preguntas as $index => $preg)
	    	    @if ($preg->pivot->i_codind == $ind->pivot->i_codind)	    	    
		    <tr>
				<td colspan="2"> <span>{{$ind->i_numind.".".$cont}}</span> {{$preg->v_resumen}} </td>	    
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>   
		    </tr>
		    		@foreach($preg->alternativas as $alternativa)
		    <tr>
		    		<td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  {{$alternativa->v_resumen}} </td>
		    		<td>total_col</td>
		    </tr>
		    		@endforeach		    	
		    	@php($cont += 1)
				@endif
				
			@endforeach			

		@endforeach
	</tbody>
</table> 
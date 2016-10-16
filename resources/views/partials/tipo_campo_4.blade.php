@if($alternativa->i_parent==0)
	@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@else
	@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@endif
<input type="hidden" name="ALTERNATIVA-{{$name_campo}}-{{$alternativa->i_opcion}}" value="{{$alternativa->i_codalt}}">
<td width="32"><input type="radio" class="answer" id="{{$alternativa->i_codpreg}}-{{$alternativa->i_opcion}}-{{$alternativa->i_codalt}}" value="{{$alternativa->i_opcion}}" name="ENCUESTA-{{$name_campo}}"></td>
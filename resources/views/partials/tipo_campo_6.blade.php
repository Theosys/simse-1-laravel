@if($alternativa->i_parent==0)
	@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@else
	@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@endif
<br>
<a href="{{$alternativa->v_resumen}}" id="{{$alternativa->i_codpreg}}-{{$alternativa->i_opcion}}-{{$alternativa->i_codalt}}" title="{{$alternativa->v_desalt}}" target="_blank" name="ENCUESTA-{{$name_campo}}">{{$alternativa->v_desalt}}</a>
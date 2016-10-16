@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@php($checked = "")
@if(array_key_exists($alternativa->i_codalt,$respuestas))
	@php($checked = "checked")
	{{$respuestas[$alternativa->i_codalt]}}
@endif
<br>
<a href="{{$alternativa->v_resumen}}" id="{{$alternativa->i_codpreg}}-{{$alternativa->i_opcion}}-{{$alternativa->i_codalt}}" title="{{$alternativa->v_desalt}}" target="_blank" name="ENCUESTA-{{$name_campo}}">{{$alternativa->v_desalt}}</a>
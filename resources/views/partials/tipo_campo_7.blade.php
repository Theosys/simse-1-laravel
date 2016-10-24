@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
@php($checked = "")
@if(array_key_exists($alternativa->i_codalt,$respuestas))
	@php($checked =$respuestas[$alternativa->i_codalt])
@endif
<input type="hidden" name="ALTERNATIVA-{{$name_campo}}-{{$alternativa->i_opcion}}" value="{{$alternativa->i_codalt}}">
<input type="text" class="form-control answer" name="ENCUESTA-{{$name_campo}}" value="{{$checked}}">
@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
<input type="hidden" name="ALTERNATIVA-{{$name_campo}}-{{$alternativa->i_opcion}}" value="{{$alternativa->i_codalt}}">
<input type="hidden" name="ENCUESTA-{{$name_campo}}" value="{{$alternativa->i_opcion}}">
<!-- USAR CUANDO NO SE DESEA INCLUIR ALTERNATIVA ALGUNA-->
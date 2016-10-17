@php($name_campo = $alternativa->i_parent."-".$alternativa->i_codpreg)
<input type="hidden" name="ALTERNATIVA-{{$name_campo}}-{{$alternativa->i_opcion}}" value="{{$alternativa->i_codalt}}">
<div class="input-group image-preview">
    <input type="text" class="form-control image-preview-filename" disabled="disabled">
    <span class="input-group-btn">
	<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
		<span class="glyphicon glyphicon-remove"></span> Limpiar
	</button>

    <div class="btn btn-default image-preview-input">
        <span class="glyphicon glyphicon-folder-open"></span>
        <span class="image-preview-input-title">Examinar</span>
        <input type="file" class="answer" id="{{$alternativa->i_codpreg}}-{{$alternativa->i_opcion}}-{{$alternativa->i_codalt}}"" name="ENCUESTA-{{$name_campo}}">
        </div>
    </span>
</div>
@php($filename = "")
@if(array_key_exists($alternativa->i_codalt,$respuestas))
	@php($filename =$respuestas[$alternativa->i_codalt])
	@if($exists = Storage::disk('archivos_encuesta')->exists($filename))
		archivo subido : <a href="{{url('showfile/'.$filename)}}" target="_blank">{{$filename}}</a>   
		<br>
		
	@endif
@endif

<br> 




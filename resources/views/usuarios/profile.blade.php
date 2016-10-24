@extends('usuarios.create')
@section('htmlheader_title')
  editar usuario
@endsection

@section('contentheader_title')
  Usuarios
@endsection

@section('contentheader_description')
  Editar
@endsection

@section('label_btn')
  Actualizar
@endsection

@section('puesto_usuario')
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Puesto</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="control-label">&Aacute;rea : 
                    @if(isset($row_persona) && $row_persona->i_codarea!=0)
                  		{{$row_persona->area->v_desarea}}
					@endif
                    </label>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                  	<label class="control-label">Cargo : 
                  	@if(isset($row_persona) && $row_persona->i_codcargo!=0)
                  		{{$row_persona->cargo->v_descargo}}
					@endif
                  	</label>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                  	<label class="control-label">Rol : 
                  	@if(isset($row_user) && $row_user->i_codrol!=0)
                  		{{$row_user->rol->v_desrol}}
					@endif
                  	</label>
                  </div>
                </div>
</div>                
@endsection

@section('estado_usuario')
@endsection

@section('solicitud_usuario')
@endsection

@extends('layouts.app')

@section('htmlheader_title')
	Editar datos personales
@endsection

@section('contentheader_title')
	Datos Personales
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar persona {{$persona->i_codpersona}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('personas.update', $persona->i_codpersona), 'method' => 'put')) !!}
              <div class="form-group">
                {{ Form::label('v_numdni', 'Numero de DNI', ['class' => 'control-label']) }}
                {{ Form::text('v_numdni', $persona->v_numdni, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_apepat', 'Apellido Paterno', ['class' => 'control-label']) }}
                {{ Form::text('v_apepat', $persona->v_apepat, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_apemat', 'Apellido Materno', ['class' => 'control-label']) }}
                {{ Form::text('v_apemat', $persona->v_apemat,array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_nombre', 'Nombres', ['class' => 'control-label']) }}
                {{ Form::text('v_nombre', $persona->v_nombre, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">              
                {{ Form::label('i_codarea', 'Area', ['class' => 'control-label'])}}
                {{ Form::select('i_codarea', $areas, $persona->i_codarea, ['class' => 'form-control']) }}
              </div>
              <div class="form-group">              
                {{ Form::label('i_codcargo', 'Cargo', ['class' => 'control-label'])}}
                {{ Form::select('i_codcargo', $cargos, $persona->i_codcargo, ['class' => 'form-control']) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_numtel', 'Teléfono de contacto', ['class' => 'control-label']) }}
                {{ Form::text('v_numtel', $persona->v_numtel, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_email', 'Correo Eléctronico', ['class' => 'control-label']) }}
                {{ Form::text('v_email', $persona->v_email, array_merge(['class' => 'form-control'])) }}
              </div>                
              <div class="form-group">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <button type="reset" class="btn btn-warning">Cancelar</button>
            </div>
          {!! Form::close() !!}
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
@endsection

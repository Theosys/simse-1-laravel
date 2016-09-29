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
	    <h3 class="panel-title">Editar persona {{$persona->i_codsubpreg}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('personas.update', $persona->i_codsubpreg), 'method' => 'put')) !!}
              <div class="form-group">
                {{ Form::label('v_numdni', 'Numero de DNI', ['class' => 'control-label']) }}
                {{ Form::text('v_numdni', null, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_apepat', 'Apellido Paterno', ['class' => 'control-label']) }}
                {{ Form::text('v_apepat', null, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_apemat', 'Apellido Materno', ['class' => 'control-label']) }}
                {{ Form::text('v_apemat', null,array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_nombre', 'Nombres', ['class' => 'control-label']) }}
                {{ Form::text('v_nombre', null, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">              
                {{ Form::label('i_codarea', 'Area', ['class' => 'control-label'])}}
                {{ Form::select('i_codarea', $areas, null, ['class' => 'form-control']) }}
              </div>
              <div class="form-group">              
                {{ Form::label('i_codcargo', 'Cargo', ['class' => 'control-label'])}}
                {{ Form::select('i_codcargo', $cargos, null, ['class' => 'form-control']) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_numtel', 'Teléfono de contacto', ['class' => 'control-label']) }}
                {{ Form::text('v_numtel', null, array_merge(['class' => 'form-control'])) }}
              </div>
              <div class="form-group">
                {{ Form::label('v_email', 'Correo Eléctronico', ['class' => 'control-label']) }}
                {{ Form::text('v_email', null, array_merge(['class' => 'form-control'])) }}
              </div>
                {{ Form::hidden('i_estreg', 1) }}
                {{ Form::hidden('i_codopera', $operador->i_codopera) }}
                {{ Form::hidden('accion', $accion) }}
          {!! Form::close() !!}
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
<script src="{{asset('/plugins/ckeditor/ckeditor.js')}}"></script>
@endsection

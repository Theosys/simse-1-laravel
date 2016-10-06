@extends('layouts.app')

@section('htmlheader_title')
	Agregar representante principal
@endsection

@section('contentheader_title')
	Operador :
@endsection

@section('contentheader_description')	
	<h3>{{ $operador->v_desoperador }}</h3>
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	   @if($accion=='P')
	   		<h3 class="panel-title">Agregar representante principal (alcalde, gobernador, ministro u otro que haga de ello)</h3>
	   @else
	   		<h3 class="panel-title">Agregar personas de contactos en GRD</h3>
	   @endif
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  		{{ Form::open(array('route' => array('personas.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}
	  			
            {{csrf_field()}}
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
                    <div class="form-group">
				      <button type="submit" class="btn btn-success">Registrar</button>
				      <button type="reset" class="btn btn-warning">Cancelar</button>
				    </div>				    				 
				{{ Form::close() }}
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
@include('personas.lista')
@endsection

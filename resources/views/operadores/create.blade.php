@extends('layouts.app')

@section('htmlheader_title')
	Agregar Operador
@endsection

@section('contentheader_title')
	Operador:
@endsection

@section('contentheader_description')	
	Agregar
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nuevo Operador</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('operadores.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    
				    <div class="form-group">              
				      {{ Form::label('v_numruc', 'Numero de RUC:', ['class' => 'control-label'])}}
				      {{ Form::text('v_numruc', '', array_merge(['class' => 'form-control', 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_desrazon', 'Razón Social:', ['class' => 'control-label'])}}
				      {{ Form::text('v_desrazon', '', array_merge(['class' => 'form-control', 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_desoperador', 'Descripción Operador:', ['class' => 'control-label'])}}
				      {{ Form::text('v_desoperador', '', array_merge(['class' => 'form-control', 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_sigla', 'Sigla:', ['class' => 'control-label'])}}
				      {{ Form::text('v_sigla', '', array_merge(['class' => 'form-control', 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>				    
				    <div class="form-group">
				    	<button type="submit" class="btn btn-success">Registrar</button>
				      <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>				
				{{ Form::close() }}
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>

@endsection
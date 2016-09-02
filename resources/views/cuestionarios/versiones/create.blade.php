@extends('layouts.app')

@section('htmlheader_title')
	Cuestionario: 
@endsection

@section('contentheader_title')
	Versiones:
@endsection

@section('contentheader_description')	
	Estrategico
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar una nueva version</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('versiones.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    				    
				      {{ Form::hidden('i_codcuest', '1', array_merge(['class' => 'form-control',])) }}				    				      
				    <div class="form-group">              
				      {{ Form::label('v_desver', 'Descripción Versión:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desver', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('d_fecvig', 'Inicio de vigencia:', ['class' => 'control-label'])}}
				      {{ Form::text('d_fecvig', '', array_merge(['class' => 'form-control'])) }}
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

@include('cuestionarios.versiones.lista')

@endsection

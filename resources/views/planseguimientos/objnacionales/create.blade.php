@extends('layouts.app')

@section('htmlheader_title')
	Agregar Objetivo Nacional
@endsection

@section('contentheader_title')
	Objetivo:
@endsection

@section('contentheader_description')	
	Nacional
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nuevo Objetivo Nacional</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('objetivosnacionales.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    
				    <div class="form-group">              
				      {{ Form::label('v_desobjnac', 'Descripción objetivo nacional:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desobjnac', '', array_merge(['class' => 'form-control ckeditor','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
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

@include('planseguimientos.objnacionales.lista')
<!-- <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> -->
@endsection

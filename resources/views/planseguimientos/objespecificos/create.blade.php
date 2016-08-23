@extends('layouts.app')

@section('htmlheader_title')
	Agregar Objetivo Especifico
@endsection

@section('contentheader_title')
	Objetivo:
@endsection

@section('contentheader_description')	
	Especifico
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nuevo Objetivo Especifico</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('objetivosespecificos.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    
				    <div class="form-group">              
				      {{ Form::label('v_desobjesp', 'Descripción objetivo Especifico:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desobjesp', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Objetivo Estrategico</label>
				      <select name="i_codobjest" class="form-control">
				      	@foreach($objestrategicos as $item)
				      		<option value="{{$item->i_codobjest}}">{{$item->v_desobjest}}</option>
				      	@endforeach
				      </select>
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

@include('planseguimientos.objespecificos.lista')

@endsection

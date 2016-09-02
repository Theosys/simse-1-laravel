@extends('layouts.app')

@section('htmlheader_title')
	Agregar Objetivo Estrategico
@endsection

@section('contentheader_title')
	Objetivo:
@endsection

@section('contentheader_description')	
	Estrategico
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nuevo Objetivo Estrategico</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('objetivosestrategicos.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    
				    <div class="form-group">              
				      {{ Form::label('v_desobjest', 'Descripción objetivo Estrategico:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desobjest', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Objetivo Nacional</label>
				      <select name="i_codobjnac" class="form-control">
				      	@foreach($objnacionales as $item)
				      		<option value="{{$item->i_codobjnac}}">{{$item->v_desobjnac}}</option>
				      	@endforeach
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Responsable de Monitoreo</label>
				      <select name="i_codinst" class="form-control">
				      	@foreach($instituciones as $item)
				      		<option value="{{$item->i_codinst}}">{{$item->v_desinst}}</option>
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

@include('planseguimientos.objestrategicos.lista')

@endsection

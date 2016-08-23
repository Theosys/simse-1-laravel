@extends('layouts.app')

@section('htmlheader_title')
	Agregar Accion
@endsection

@section('contentheader_title')
	Accion:
@endsection

@section('contentheader_description')	
	
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Agregar un nueva Acción</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('acciones.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}	  			
            	{{csrf_field()}}				    
				    <div class="form-group">              
				      {{ Form::label('v_desaccion', 'Nombre de Acción:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_desaccion', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la acción aqui'])) }}
				    </div>
				    <div class="form-group">              
				      {{ Form::label('v_descripcion', 'Descripción de Acción:', ['class' => 'control-label'])}}
				      {{ Form::textarea('v_descripcion', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese la descripción aqui'])) }}
				    </div>
				    <div class="form-group">
					    <div class="col-md-4">
					      <label for="i_codres" class="control-label">Responsables: </label>
					      <select name="i_codres" multiple="multiple" class="form-control">
					      	@foreach($responsables as $item)
					      		<option value="{{$item->i_codres}}">{{$item->v_desres}}</option>
					      	@endforeach
					      </select>
					      <p class="text-muted"><small>Presione "Crtl+click" si desea seleccionar mas de una opción</small></p>
					    </div>
					    <div class="col-md-8">
					      <label for="i_codact" class="control-label">Actores: </label>
					      <select name="i_codact" multiple="multiple" class="form-control">
					      	@foreach($actores as $item)
					      		<option value="{{$item->i_codact}}">{{$item->v_desact}}</option>
					      	@endforeach
					      </select>
					      <p class="text-muted"><small>Presione "Crtl+click" si desea seleccionar mas de una opción</small></p>
					    </div>	
				    </div>
				    <div class="form-group">
				    	<div class="col-md-6">
					      <label for="i_codtipo" class="control-label">Tipo: </label>
					      <select name="i_codtipo" class="form-control">
					      	<option value="">--- Seleccione ---</option>						 
							<option value="1">Accion Estrategica</option>
							<option value="2">Accion Transversal</option>	
					      </select>					      
					    </div>
					    <div class="col-md-6">
					      <label for="i_codplazo" class="control-label">Plazo: </label>
					      <select name="i_codplazo" class="form-control">
					      	<option value="">--- Seleccione ---</option>						 
							<option value="1">Corto</option>
							<option value="2">Mediano</option>	
							<option value="3">Largo</option>	
					      </select>
					    </div>
					</div>
					<div class="form-group">
					      <label for="i_codobjest" class="control-label">Objetivo Estratégico : </label>
					      <select name="i_codobjest" class="form-control">
					      	@foreach($objestrategicos as $item)
					      		<option value="{{$item->i_codobjest}}">{{$item->v_desobjest}}</option>
					      	@endforeach
					      </select>
					</div>
					<div class="form-group">
					      <label for="i_codobjesp" class="control-label">Objetivo Específico (--falta--): </label>
					      <select name="i_codobjesp" class="form-control">
					      	@foreach($responsables as $item)
					      		<option value="{{$item->i_codres}}">{{$item->v_desres}}</option>
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

@include('planseguimientos.acciones.lista')

@endsection

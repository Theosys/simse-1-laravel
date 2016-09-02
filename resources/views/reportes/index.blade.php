@extends('layouts.app')

@section('htmlheader_title')
	Reporte resumen global 
@endsection

@section('contentheader_title')
	Reportes:
@endsection

@section('contentheader_description')	
	Resumen Global
@endsection

@section('main-content')

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">	  
	    <h3 class="panel-title">Cuadro resumen global de encuesta </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">	  		
	  		<div class="col-md-12">  
	  			{{ Form::open(array('route' => array('reportes.store'), 'method' => 'post', 'files' => true, 'class' => 'form-horizontal')) }}		
					<div class="span3">
						<span>Periodo de encuesta</span><br>
						<select class="input-large">
							<option>Seleccione</option>							  		
							@foreach ($encuestas as $encuesta)							  			
							  	<option value="{{$encuesta->i_codenc}}">{{$encuesta->v_periodo}} {{$encuesta->frecuencia->v_desunidad}} {{$encuesta->v_year}}</option>
							@endforeach
						</select>
					</div>
					<div  class="span3">
						<span>Unidad de Medida: </span><br>	  		
						<select name="cmbunidad">
							<option value="">--- Seleccione ---</option>
							<option value="1" selected="selected">Numerico (N)</option>
							<option value="2">Porcentaje (%)</option>
						</select>
					</div>
					<div  class="span3">						  		
						{{ Form::label('i_coddep', 'Departamento :', ['class' => 'control-label'])}}
				      	{{ Form::select('i_coddep', $departamentos, null, ['class' => 'form-control', 'required']) }}
					</div>
					<div  class="span3">
						<span>Provincia</span><br>					       
						<select name="prv" id="prv"> 
							<option value="NN">Elija uno</option>   												    						
						</select>
					</div>
					<div class="none">
						<span>Distrito</span><br>					       
						<select name="dis" id="dis"> 
							<option value="NN">Elija uno</option>   						 
						</select>
					</div>			    
			    {{ Form::close() }}

			    @include('reportes.tabla')
				
	  		</div>	  		
	  	</div>
	  </div>
	</div>
</div>

@endsection

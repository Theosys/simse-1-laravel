@extends('layouts.app')

@section('htmlheader_title')
	Agregar escenario de riesgos
@endsection

@section('contentheader_title')
	Escenario de Riesgos
@endsection

@section('contentheader_description')
	Agregar
@endsection

@section('main-content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un escenario</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			{{ Form::open(array('route' => array('escenarios.store'), 'method' => 'post', 'files'=>true, 'class' => 'form-horizontal')) }}  			
	  			        {{csrf_field()}}	  			                    		
	  				<div class="form-group">              
	  					{{ Form::label('id', 'Escenario de Riesgos Nro:', ['class' => 'control-label'])}}
	  					{{$escenario->id}}
	  				</div>
	  				<div class="form-group">              
	  					{{ Form::label('titulo', 'Titulo de Escenario:', ['class' => 'control-label'])}}
	  					{{ Form::textarea('titulo', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese título de escenario aqui'])) }}
	  				</div>
	  				<div class="form-group">              
	  					{{ Form::label('fx_ini', 'Fecha de Inicio:', ['class' => 'control-label'])}}
	  					{{ Form::date('fx_ini', '', array_merge(['id' => 'datepicker', 'class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese título de escenario aqui'])) }}
	  					{!! Form::date('start_date', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Date']); !!}
	  				</div>
	  				<div class="form-group">              
	  					{{ Form::label('fx_fin', 'Fecha de culminación:', ['class' => 'control-label'])}}
	  					{{ Form::date('fx_fin', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese título de escenario aqui'])) }}
	  				</div>
	  				<div class="form-group">              
	  					{{ Form::label('v_resumen', 'Archivo cvs:', ['class' => 'control-label'])}}
	  					{{ Form::file('v_resumen', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Suba el datos en archivo csv'])) }}
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
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
@endsection

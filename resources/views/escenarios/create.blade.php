@extends('layouts.app')

@section('htmlheader_title')
	Agregar escenario
@endsection

@section('contentheader_title')
	Escenario
@endsection

@section('contentheader_description')
	Agregar
@endsection

@section('main-content')

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
	  			        { Form::hidden('i_codpreg', $pregunta->i_codpreg) }}            		
	  				<div class="form-group">              
	  					{{ Form::label('titulo', 'Titulo de Escenario:', ['class' => 'control-label'])}}
	  					{{ Form::textarea('titulo', '', array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40, 'placeholder'=>'Ingrese título de escenario aqui'])) }}
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
	  			{!!Form::model($Id,[
	  				'route'=>[$RouteName,0],
	  				'method'=>$RouteMethod, 
	  				'files'=>true,
	  				'class'=>'ui form',
	  				'id'=>'form-import-csv'])!!}
	  				<input type="file" name="somedata">
	  				<hr>
	  				titulo:<textarea name="titulo" rows="5"></textarea>
	  				<hr>
	  				detalle:<textarea name="detalle" rows="5"></textarea>
	  				<hr>
	  				<input type="submit" value="Subir">
	  			{!!Form::Close()!!}
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
<script src="{{asset('/plugins/ckeditor/ckeditor.js')}}"></script>

@endsection

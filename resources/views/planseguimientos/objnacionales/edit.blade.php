@extends('layouts.app')

@section('htmlheader_title')
	Editar objetivo nacional
@endsection

@section('contentheader_title')
	Objetivo nacional {{$objnacional->i_codobjnac}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar objnacional {{$objnacional->i_codobjnac}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('objetivosnacionales.update', $objnacional->i_codobjnac), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_desobjnac', 'Descripción Objetivo Nacional:', ['class' => 'control-label']) }}
              {{ Form::textarea('v_desobjnac', $objnacional->v_desobjnac, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
            </div>                        
            <div class="form-group">
              {!! Form::submit('Editar', ['class' => 'btn btn-success']) !!}
              {!! Form::button('Borrar', ['class' => 'btn btn-warning', 'type' => 'reset']) !!}
            </div>
          {!! Form::close() !!}
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
@endsection

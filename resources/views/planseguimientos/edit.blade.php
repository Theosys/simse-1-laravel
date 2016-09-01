@extends('layouts.app')

@section('htmlheader_title')
	Editar Plan de Seguimiento
@endsection

@section('contentheader_title')
	planseg {{$planseg->i_codplan}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Plan de Seguimiento {{$planseg->i_codplan}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('planseguimientos.update', $planseg->i_codplan), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_desplan', 'Descripción Plan:', ['class' => 'control-label']) }}
              {{ Form::text('v_desplan', $planseg->v_desplan, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
              {{ Form::label('v_sigla', 'Sigla:', ['class' => 'control-label'])}}
              {{ Form::text('v_sigla', $planseg->v_sigla, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
              {{ Form::label('d_fecini', 'Fecha de Inicio:', ['class' => 'control-label'])}}
              {{ Form::text('d_fecini', $planseg->d_fecini, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
              {{ Form::label('d_fecfin', 'Fecha de Finalización:', ['class' => 'control-label'])}}
              {{ Form::text('d_fecfin', $planseg->d_fecfin, array_merge(['class' => 'form-control'])) }}
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

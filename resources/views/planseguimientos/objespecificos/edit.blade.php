@extends('layouts.app')

@section('htmlheader_title')
	Editar objetivo específico
@endsection

@section('contentheader_title')
	Objetivo específico {{$objespecifico->i_codobjesp}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar objetivo específico {{$objespecifico->i_codobjesp}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('objetivosespecificos.update', $objespecifico->i_codobjesp), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_desobjesp', 'Descripción Objetivo específico:', ['class' => 'control-label']) }}
              {{ Form::textarea('v_desobjesp', $objespecifico->v_desobjesp, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
            </div>
            <div class="form-group">
              <label class="control-label">Objetivo Estrategico:</label>
              <select name="i_codobjest" class="form-control">
                @foreach($objestrategicos as $objestrategico)
                  @if ($objestrategico->i_codobjest == $objespecifico->i_codobjest)
                    <option value="{{$objestrategico->i_codobjest}}"  selected>{{$objestrategico->v_desobjest}}</option>
                  @else
                    <option value="{{$objestrategico->i_codobjest}}">{{$objestrategico->v_desobjest}}</option>
                  @endif
                @endforeach
              </select>
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

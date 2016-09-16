@extends('layouts.app')

@section('htmlheader_title')
	Editar cuestionario
@endsection

@section('contentheader_title')
	Cuestionario {{$cuestionario->i_codcuest}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar cuestionario {{$cuestionario->i_codcuest}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('cuestionarios.update', $cuestionario->i_codcuest), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_descuest', 'Descripción cuestionario:', ['class' => 'control-label']) }}
              {{ Form::textarea('v_descuest', $cuestionario->v_descuest, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
            </div>
            <div class="form-group">
              <label class="control-label">Plan de seguimiento:</label>
				      <select name="i_codplan" class="form-control">
                @foreach($planes as $plan)
                  @if ($plan->i_codplan == $cuestionario->i_codplan)
                    <option value="{{$plan->i_codplan}}"  selected>{{$plan->v_desplan}}</option>
                  @else
                    <option value="{{$plan->i_codplan}}">{{$plan->v_desplan}}</option>
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

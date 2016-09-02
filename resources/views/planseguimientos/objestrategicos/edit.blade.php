@extends('layouts.app')

@section('htmlheader_title')
	Editar objetivo estrategico
@endsection

@section('contentheader_title')
	Objetivo estrategico {{$objestrategico->i_codobjest}}
@endsection

@section('contentheader_description')
	Editar
@endsection

@section('main-content')
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar objetivo estrategico {{$objestrategico->i_codobjest}}</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
          {!! Form::open(array('route' => array('objetivosestrategicos.update', $objestrategico->i_codobjest), 'method' => 'put')) !!}
            <div class="form-group">
              {{ Form::label('v_desobjest', 'Descripción Objetivo estratégico:', ['class' => 'control-label']) }}
              {{ Form::textarea('v_desobjest', $objestrategico->v_desobjest, array_merge(['class' => 'form-control','rows' => 2, 'cols' => 40])) }}
            </div>
            <div class="form-group">
              <label class="control-label">Objetivo Nacional:</label>
              <select name="i_codobjnac" class="form-control">
                @foreach($objnacionales as $objnacional)
                  @if ($objnacional->i_codobjnac == $objestrategico->i_codobjnac)
                    <option value="{{$objnacional->i_codobjnac}}"  selected>{{$objnacional->v_desobjnac}}</option>
                  @else
                    <option value="{{$objnacional->i_codobjnac}}">{{$objnacional->v_desobjnac}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Responsable de Monitoreo:</label>
              <select name="i_codinst" class="form-control">
                @foreach($instituciones as $institucion)
                  @if ($institucion->i_codinst == $objestrategico->i_codinst)
                    <option value="{{$institucion->i_codinst}}"  selected>{{$institucion->v_desinst}}</option>
                  @else
                    <option value="{{$institucion->i_codinst}}">{{$institucion->v_desinst}}</option>
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

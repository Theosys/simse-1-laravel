@extends('layouts.app')

@section('htmlheader_title')
  Lista de Encuestas
@endsection

@section('main-content')

  <div class="box-principal">
    <h3 class="titulo">Listado de Encuestas<hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Listado de Encuestas</h3>
      </div>
      <div class="panel-body">
      <div class="box-body">
          <a class="btn btn-app" href="{{url('/encuestaes/create')}}">
              <i class=" glyphicon glyphicon-plus"></i>Nueva Encuesta
          </a>                      
      </div>
        <table class="table table-striped table-hover datatable">
        <thead>
          <tr>
            <th>Nro</th>
            <th>Encuesta</th>
            <th>Periodo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Cuestionario</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach($encuestas as $encuesta)
            <tr>
              <td>{{$encuesta->i_codopera}}</td>
              <td>{{$encuesta->v_desenc}}</td>
              <td>{{$encuesta->v_year}} - {{$encuesta->v_periodo}}</td>
              <td>{{$encuesta->d_fecini}}</td>
              <td>{{$encuesta->d_fecfin}}</td>              
              <td>PLANAGERD {{$encuesta->version->v_desver}}</td>                            
              <td> 
              	@if ($encuesta->i_estreg==3)
              		Abierto
              	@elseif ($encuesta->i_estreg==2)
              		Cerrado
              	@else
              		Aperturado
              	@endif              		
              </td>                            
              <td>
                <a class="btn btn-default" href="{{ url('/encuestes1/'.$encuesta->i_codoper.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                {!! Form::open(array('route' => array('encuestaes.destroy', $encuesta->i_codoper), 'method' => 'delete')) !!}
                  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash text-danger"></span></button>
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>
    </div>
  </div>

@include('cenepred.datatable')

@endsection

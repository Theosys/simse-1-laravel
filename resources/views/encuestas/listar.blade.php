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
          <a class="btn btn-app" href="{{url('/encuestas/create')}}">
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
            <th>Indicadores</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach($encuestas as $index  => $encuesta)
            <tr>
              <td>{{$index+1}}</td>
              <td>{{$encuesta->v_desenc}}</td>
              <td>{{$encuesta->v_year}} - {{$encuesta->v_periodo}}</td>
              <td>{{$encuesta->d_fecini}}</td>
              <td>{{$encuesta->d_fecfin}}</td>              
              <td>PLANAGERD {{$encuesta->version->v_desver}}</td>                            
              <td>{{$encuesta->indicadores->unique('i_codind')->sortBy('i_numind')->count()}}</td>                            
              <td> 
              	@if ($encuesta->i_estreg==2)
              		<b>Aperturado</b>
              	@elseif ($encuesta->i_estreg==3)
                  Cerrado
                @elseif ($encuesta->i_estreg==1)
              		Activo
              	@else
              		Inactivo
              	@endif              		
              </td>                            
              <td>
                <a class="btn btn-default" href="{{ url('/enc/'.$encuesta->i_codenc.'/indpreg') }}"> <small><span class="glyphicon glyphicon-plus"></span></small></a>
                <a class="btn btn-default" href="{{ url('/enc/'.$encuesta->i_codenc.'/editar') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                {!! Form::open(array('route' => array('encuestas.destroy', $encuesta->i_codoper), 'method' => 'delete')) !!}
                  <button onclick="return confirm('¿Desea eliminar esta encuesta?')" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash text-danger"></span></button>
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

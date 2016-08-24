@extends('layouts.app')

@section('htmlheader_title')
  
@endsection

@section('contentheader_title')
  Plan de seguimiento Contenidos
@endsection

@section('main-content')

<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Proceda a gestionar el contenido del Plan </h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th rowspan="2" class="txt-center">Nº</th>
          <th rowspan="2">Contenido</th>
          <th colspan="2">Cantidad</th>
          <th rowspan="2">Acción</th>
        </tr>
        <tr>          
          <th>CENEPRED</th>
          <th>INDECI</th>                            
        </tr>
      </thead>
      <tbody>

        @foreach($plansegcontenidos as $planconte)
          <tr>
            <td>
              {{$planconte->i_codcont}}
            </td>
            <td>
              {{$planconte->v_descont}}
            </td>
            <td>
              1
            </td>
            <td>
              2
            </td>
            <td>
            @if ($planconte->i_codcont == 1)
                <a class="btn btn-default" href="{{ url('/planseg/'.$planconte->i_codcont.'') }}"><span class="glyphicon glyphicon-pencil"></span></a>              
            @elseif ($planconte->i_codcont == 2)
                <a class="btn btn-default" href="{{ url('/objetivosnacionales') }}"><span class="glyphicon glyphicon-pencil"></span></a>              
            @elseif ($planconte->i_codcont == 3)
                <a class="btn btn-default" href="{{ url('/objetivosestrategicos') }}"><span class="glyphicon glyphicon-pencil"></span></a>
            @elseif ($planconte->i_codcont == 4)
                <a class="btn btn-default" href="{{ url('/objetivosespecificos') }}"><span class="glyphicon glyphicon-pencil"></span></a>
            @elseif ($planconte->i_codcont == 5)
                <a class="btn btn-default" href="{{ url('/acciones') }}"><span class="glyphicon glyphicon-pencil"></span></a>
            @elseif ($planconte->i_codcont == 6)
                <a class="btn btn-default" href="{{ url('/indicadores') }}"><span class="glyphicon glyphicon-pencil"></span></a>            
            @endif
              
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    </div>
  </div>
</div>
@endsection

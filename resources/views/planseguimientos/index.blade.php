@extends('layouts.app')

@section('htmlheader_title')
  PlanSeguimiento
@endsection

@section('contentheader_title')
  PlanSeguimiento
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')

<div class="box-principal">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Listado de PlanSeguimiento</h3>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Código</th>
          <th>Plan Seguimiento</th>
          <th>Sigla</th>
          <th>Inicio</th>
          <th>Fin</th>
          <th>Contenido</th>
          <th>Documento</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>

        @foreach($planseguimientos as $plansegui)
          <tr>
            <td>
              {{$plansegui->i_codplan}}
            </td>
            <td>
              {{$plansegui->v_desplan}}
            </td>
            <td>
              {{$plansegui->v_sigla}}
            </td>
            <td>
              {{$plansegui->d_fecini}}
            </td>
            <td>
              {{$plansegui->d_fecfin}}
            </td>
            <td><a href="{{ url('/planseg/contenidos') }}"><span class="glyphicon glyphicon-plus-sign"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-file"></span></a></td>
            <td>
              <a class="btn btn-default" href="{{ url('/planseguimientos/'.$plansegui->i_codplan.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
              {!! Form::open(array('route' => array('planseguimientos.destroy', $plansegui->i_codplan), 'method' => 'delete')) !!}
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
@endsection

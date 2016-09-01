@extends('layouts.app')

@section('htmlheader_title')
  operadores
@endsection

@section('main-content')

  <div class="box-principal">
    <h3 class="titulo">Listado de Operadores<hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Listado de operadores</h3>
      </div>
      <div class="panel-body">
      <div class="box-body">
          <a class="btn btn-app" href="{{url('/operadores/create')}}">
              <i class=" glyphicon glyphicon-plus"></i>Nuevo Operador
          </a>                      
      </div>
        <table class="table table-striped table-hover datatable">
        <thead>
          <tr>
            <th>Nro</th>
            <th>Sigla</th>
            <th>Operador</th>
            <th>Departamento</th>
            <th>Provincia</th>
            <th>Distrito</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach($operadores as $operador)
            <tr>
              <td> <a href="{{ url('/preguntas/show/'.$operador->i_codoper) }}">{{$operador->i_codopera}}</a></td>
              <td>{{$operador->v_sigla}}</td>
              <td>{{$operador->v_desoperador}}</td>
              <td>{{$operador->departamento->v_desdep}}</td>
              <td>{{$operador->provincia()->v_despro}}</td>              
              <td>{{$operador->distrito()->v_desdis}}</td>                            
              <td>
                <a class="btn btn-default" href="{{ url('/operadores/'.$operador->i_codoper.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                {!! Form::open(array('route' => array('operadores.destroy', $operador->i_codoper), 'method' => 'delete')) !!}
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

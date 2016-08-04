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
        <table class="table table-striped table-hover ">
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
              <td>{{$operador->v_coddep}}</td>
              <td>{{$operador->v_codpro}}</td>              
              <td>{{$operador->v_coddis}}</td>                            
              <td>
                <a class="btn btn-warning" href="{{ url('/operadores/'.$operador->i_codoper.'/edit') }}">Editar</a>
                {!! Form::open(array('route' => array('operadores.destroy', $operador->i_codoper), 'method' => 'delete')) !!}
                  <button type="submit" class="btn btn-danger">Eliminar</button>
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

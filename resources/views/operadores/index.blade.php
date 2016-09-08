@extends('layouts.app')

@section('htmlheader_title')
  operadores
@endsection

@section('main-content')
<script type="text/javascript">
function deleteOperador(obj,a){
    var token  = "{{ csrf_token()}}";
    $.ajax({
      url:"{{url('/operadores')}}",
      headers:  {"X-CSRF-TOKEN":token},
      type:"DELETE",
      data:{"i_codopera":a}

    }).done(function() {
      $(obj).parent().parent().remove();
    })
    .fail(function(result) {
      alert('Ud. no está autorizado para realizar esta acción')
    })
    .always(function() {
      
    });
   
  }
</script>
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
        {!! Form::open(['route'=>'operadores.index','method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
          
          <div class="input-group">
            {!! Form::text('des',null,['class'=>'form-control','placeholder'=>'Buscar','aria-describedby'=>'search']) !!}
            <span class="input-group-addon" id="search">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </span>
          </div>

        {!! Form::close() !!}
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
              <td> <a href="{{ url('/preguntas/show/'.$operador->i_codopera) }}">{{$operador->i_codopera}}</a></td>
              <td>{{$operador->v_sigla}}</td>
              <td>{{$operador->v_desoperador}}</td>
              <td>{!!($operador->departamento!=null)?$operador->departamento->v_desdep:''!!}</td>
              <td>{!!($operador->provincia()->st==true)?$operador->provincia()->v_despro:''!!}</td>              
              <td>{!!($operador->distrito()->st==true)?$operador->distrito()->v_desdis:''!!}</td>
              <td>
                <a class="btn btn-default" href="{{ url('/operadores/'.$operador->i_codopera.'/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                <a class="btn btn-default" onclick="deleteOperador(this,'{{$operador->i_codopera}}')"><span class="glyphicon glyphicon-trash text-danger"></span></a>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {!! $operadores->render() !!}
      </div>
    </div>
  </div>
@endsection
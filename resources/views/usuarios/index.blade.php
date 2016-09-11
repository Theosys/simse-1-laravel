@extends('layouts.app')

@section('htmlheader_title')
  Usuarios
@endsection

@section('contentheader_title')
  Usuarios
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Usuarios</h3>
        </div>
        <div class="box-body">
          <div class="box-body">
              <a class="btn btn-app" href="{{url('/usuarios/create')}}">
                  <i class=" glyphicon glyphicon-plus"></i>Nuevo Usuario
              </a>                      
          </div>
          <table class="table table-striped table-hover datatable">
            <thead>
              <th>N°</th>
              <th>Usuario</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Nombres</th>
              <th>Operador</th>
              <th>Departamento</th>
              <th>Provincia</th>
              <th>Distrito</th>
              <th>Fecha Registro</th>
              <th>Estado</th>
              <th>Acciones</th>
            </thead>
            <tbody>
              <?php if(isset($usuarios) && !empty($usuarios)):?>
              @foreach($usuarios as $usuario)
                <tr>
                  <td>
                    <a href="{{ url('/usuarios/show/'.$usuario->id) }}">{{$usuario->id}}</a>
                  </td>
                  <td>{{$usuario->name}}</td>
                  <td>{{(isset($usuario->persona->v_apepat)?$usuario->persona->v_apepat:'')}}</td>

                  <td>{{(isset($usuario->persona->v_apemat)?$usuario->persona->v_apemat:'')}}</td>
                  <td>{{(isset($usuario->persona->v_nombre)?$usuario->persona->v_nombre:'')}}</td>
                  <td>
                    @if($usuario->persona->operadores!=null)
                      @foreach ($usuario->persona->operadores as $operador)
                        {{ $operador->v_desoperador }}
                      @endforeach
                    @endif
                  </td>
                  
                  
                  <td>{!!($usuario->persona->departamento!=null)?$usuario->persona->departamento->v_desdep:''!!}</td>
                  <td>{!!($usuario->persona->provincia()->st==true)?$usuario->persona->provincia()->v_despro:''!!}</td>              
                  <td>{!!($usuario->persona->distrito()->st==true)?$usuario->persona->distrito()->v_desdis:''!!}</td>
                  
                  <td>{{$usuario->created_at}}</td>
                  <td>{{($usuario->i_estreg==1)?'Activo':'Inactivo'}}</td>
                  <td>                    
                    <a class="btn btn-default" href="{{ url('/usuarios/'.$usuario->id.'/edit') }}" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-default" onclick="deleteUser(this,'{{$usuario->id}}','{{$usuario->persona->i_codpersona}}')"><span class="glyphicon glyphicon-trash text-danger"></span></a>
                  </td>

                </tr>
              @endforeach
              <?php endif;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@include('cenepred.datatable')


@endsection
@section('scripts')
<script>
function deleteUser(obj,a,b){
    var token  = "{{ csrf_token()}}";
    $.ajax({
      url:"{{url('/usuarios')}}",
      headers:  {"X-CSRF-TOKEN":token},
      type:"DELETE",
      data:{"i_codusu":a,"i_codpersona":b}

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
@endsection
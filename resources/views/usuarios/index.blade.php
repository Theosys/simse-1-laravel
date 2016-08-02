@extends('layouts.app')

@section('content')
<table>
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
    @foreach ($usuarios as $usuario)
      <tr>
        <th>
          <a href="{{ url('/usuarios/show/'.$usuario->id) }}">{{$usuario->id}}</a>
        </th>
        <th>{{$usuario->name}}</th>
        <th>{{$usuario->persona->v_apepat}}</th>
        <th>{{$usuario->persona->v_apemat}}</th>
        <th>{{$usuario->persona->v_nombre}}</th>
        <th></th>
        <th>{{$usuario->persona->departamento->v_desdep}}</th>
        <th>{{$usuario->persona->provincia()->v_despro}}</th>
        <th>{{$usuario->persona->distrito()->v_desdis}}</th>
        <th>{{$usuario->created_at}}</th>
        <th>{{$usuario->i_estreg}}</th>
        <th>
          <a href="#">Permisos</a>
          <a href="#">Editar</a>
          <a href="#">Eliminar</a>
        </th>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

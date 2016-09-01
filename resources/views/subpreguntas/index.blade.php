@extends('layouts.app')

@section('htmlheader_title')
  Subpreguntas
@endsection

@section('contentheader_title')
  Subpreguntas
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')
  
  @include('subpreguntas.lista')
  
@endsection

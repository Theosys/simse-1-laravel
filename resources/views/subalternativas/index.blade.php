@extends('layouts.app')

@section('htmlheader_title')
  Alternativas
@endsection

@section('contentheader_title')
  Alternativas
@endsection

@section('contentheader_description')
  Listado
@endsection

@section('main-content')
  
  @include('subalternativas.lista')
  
@endsection

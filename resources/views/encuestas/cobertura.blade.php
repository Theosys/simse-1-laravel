@extends('layouts.app')

@section('htmlheader_title')
  encuestas
@endsection

@section('main-content')
  <style type="text/css"></style>
  <link href="{{ asset('/admin_cenepred/css/admin-colors.css') }}" rel="stylesheet">
  <div class="box-principal side-body ">
    <h3 class="pagetitle">Cobertura de encuestas</h3>
    <div class="panel panel-success">
      
      <div class="panel-body">
        <table class="table table-striped datatable">
        <thead>
          <tr>
            <th> </th>
            @foreach ($tiporganismos as $tiporg)
            <th>{{$tiporg->v_destiporg}}</th>
            @endforeach
            <th>TOTAL promedio</th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Universo</td>
            @foreach ($tiporganismos as $tiporg)
              <td>{{$tiporg->totalorganismo->i_total}}</td>
            @endforeach
            <td>1937</td>        
          </tr>
          <tr>
            <td>2013</td>            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2014</td>            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2015</td>            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2016</td>            
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>          

        </tbody>
      </table>      
      
      </div>
    </div>
  </div>

<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- page script -->

@endsection

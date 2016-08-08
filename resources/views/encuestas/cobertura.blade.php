@extends('layouts.app')

@section('htmlheader_title')
  encuestas
@endsection

@section('main-content')

  <div class="box-principal">
    <h3 class="titulo">Cobertura de encuestas<hr></h3>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Cobertura de encuestas</h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover datatable">
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
            <td>18</td>
            <td>25</td>
            <td>196</td>
            <td>1646</td>
            <td>52</td>
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

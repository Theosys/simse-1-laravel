@extends('layouts.app')

@section('htmlheader_title')
    Encuesta
@endsection

@section('contentheader_title')
    Encuesta
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$encuesta->v_desenc}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{ Form::open(array('url' => url('upd'), 'method' => 'put', 'files' => true)) }}
                    {{csrf_field()}}
                    <input type="hidden" name="operador" value="{{$operador}}">
                    <input type="hidden" name="encuesta" value="{{$encuesta->i_codenc}}">
                    <div class="panel">
                        <button type="submit" class="btn btn-app bg-green color-palette"><i class="fa fa-save"></i>Actualizar</button>
                    </div>
                    @include('partials.indicadores')
                    {{ Form::close() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script type="text/javascript">

</script>
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
            {{ Form::open(array('route' => array('encuestas.store'), 'method' => 'post', 'files' => true)) }}
            {{csrf_field()}}
                <input type="hidden" name="operador" value="{{$operador}}">
                <input type="hidden" name="encuesta" value="{{$encuesta->i_codenc}}">
                <div class="panel">
                    <button type="submit" class="btn btn-app bg-green color-palette"><i class="fa fa-save"></i>Registrar</button>
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
@section('scripts')
<script>
$(document).ready(function(){
    function anyask(id){
        var ids=(id).split("-");
        $(".sub-answer-"+ids[0]+"-1").removeClass('mostrar');
        $(".sub-answer-"+ids[0]+"-0").removeClass('mostrar');
        $(".sub-answer-"+ids[0]+"-1").addClass('ocultar');
        $(".sub-answer-"+ids[0]+"-0").addClass('ocultar');
        if(ids[1]=='1'){
          $(".sub-answer-"+ids[0]+"-1").addClass('mostrar');
        }
        if(ids[1]=='0'){
          $(".sub-answer-"+ids[0]+"-0").addClass('mostrar');
        }
        
    }

    $('.answer').on("click",function(){
        anyask($(this).attr('id'));        
    });
});
</script>
@endsection

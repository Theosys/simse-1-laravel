@extends('layouts.app')

@section('htmlheader_title')
    Encuesta
@endsection

@section('contentheader_title')
    Encuesta
@endsection


@section('main-content')
<link href="http://test.igp.gob.pe/documentos/include/assets/css/uploadfile.css" type="text/css" hrel="stylesheet"/>
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


<!--
este cod comentado ya funciona...

                    <div class="form-groups">
                        <label>1. examina el archivo<b>2. clic en subir archivo</label>
                        <div class="capa-file">
                            <input type="file" name="survey_file[]" id="survey_file">
                        </div>
                        <br>    
                        <a href="javascript:void(0);"  class="subir_file">Subir archivo</a>
                    </div>
-->

                    @include('partials.indicadoresABC')
                    {{ Form::close() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('scripts')
<script src="http://test.igp.gob.pe/documentos/include/assets/js/jquery.uploadfile.min.js"></script>
<script type="text/javascript">
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
    function anyaskmatriz(id){
        var ids=(id).split("-");
        console.log(ids)
        $(".sub-answer-matriz-"+ids[0]).removeClass('mostrar');
        $(".sub-answer-matriz-"+ids[0]).removeClass('ocultar');
        $(".sub-answer-matriz-"+ids[0]).addClass('ocultar');
        $(".sub-answer-matriz-"+ids[1]+"-"+ids[2]).addClass('mostrar');
    }

    if (jQuery('.ayuda').length){
        jQuery('.ayuda').tooltip();
    }
    $('.answer').each(function(i,key){
        if($(this).is(':checked')){
            anyask($(this).attr('id'));
        }
    });

    
    $('.answer').on("click",function(){
        anyask($(this).attr('id'));        
    });

    $('.answer-matriz').each(function(i,key){
        if($(this).is(':checked')){
            anyaskmatriz($(this).attr('id'));
        }
    });
    
    $('.answer-matriz').on("click",function(){
        anyaskmatriz($(this).attr('id'));        
    });


    $(".subir_file").on('click',function(){
            var data = new FormData();
            jQuery.each(jQuery('#survey_file')[0].files, function(i, file) {
                data.append('survey_file', file);
                data.append('PreguntaId',88);
            });
            
            $.ajax({
                url:"{{url('/api/encuestafile')}}",
                headers: {"X-CSRF-TOKEN":"{!!csrf_token()!!}"},
                method: "POST",
                data: data,
                cache: false,
                processData: false,
                contentType:false,
                success: function(result){
                    d = new Date();
                    console.log(result)
                    
                }
            });
        });

    
});
</script>


@endsection


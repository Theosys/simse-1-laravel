@extends('layouts.app')

@section('htmlheader_title')
    Encuesta
@endsection

@section('contentheader_title')
    Encuesta
@endsection
<style>
.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>
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
                    <span class="progress-type">Porcentaje de avance 

                    @php($avance = round($operador_encuesta->i_codind_posicionar*100/count($indicadores)))
                    @if($avance>100)
                        100%
                    @else
                        {{$avance}}%
                    @endif
                    </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: @if($avance>100) 100% @else {{$avance}}% @endif" id="progressinner">
                        <span class="sr-only">Loading...</span>
                      </div>
                    </div>
                    

                    @include('partials.indicadoresABC')

                    <button type="submit" class="btn bg-green color-palette"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                        
                        <button type="button" onclick="anterior_pagina()" class="btn btn-primary" id="btn_anterior"><span class="glyphicon glyphicon-arrow-left"></span>Anterior</button>
                        
                        <button type="button" onclick="siguiente_pagina()" class="btn btn-primary" id="btn_siguiente"><span class="glyphicon glyphicon-arrow-right"></span> Siguiente</button>

                    
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
    @if($operador_encuesta->i_codind_posicionar==0)
        $("#btn_anterior").prop('disabled',true)
    @else
        $("#btn_anterior").prop('disabled',false)
    @endif

    function anyask(id){
        var ids=(id).split("-");
        $("[class*='answer-"+ids[0]+"']").removeClass('ocultar');
        $("[class*='answer-"+ids[0]+"']").removeClass('mostrar');
        $("[class*='answer-"+ids[0]+"']").addClass('ocultar');


        $(".answer-"+ids[0]+"-"+ids[1]).removeClass('ocultar');
        $(".answer-"+ids[0]+"-"+ids[1]).addClass('mostrar');
        console.log(ids[0])
        $("[class*='ocultar']").find("input[name*='"+ids[0]+"-']").each(function(i,k){
            $(this).prop('disabled',true);
        });
        $("[class*='mostrar']").find("input[name*='"+ids[0]+"-']").each(function(i,k){
            $(this).prop('disabled',false);
        });
        /*
*/
    }
    function anyaskmatriz(id){
        var ids=(id).split("-");
        
        $(".sub-answer-matriz-"+ids[0]).removeClass('ocultar');
        $(".sub-answer-matriz-"+ids[0]).removeClass('mostrar');
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

<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Vista Previa</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Examinar"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            
            $(".image-preview-input-title").text("Cambiar");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>

@endsection


<style>
.ocultar{
    /*background-color: gray;*/
    display: none;
}
.mostrar{
    /*background-color: skyblue;*/
    display: block;
}
</style>
<script>
    var variable_que_no_sirve_pa_nada=0;
    function siguiente_pagina(){
        var last_position = parseInt($('#last_position').val());
        var end_position = parseInt($('#end_position').val());
        if((last_position + 1)<=end_position){
            $(".panel_encuesta_indicador").each(function(){
                var panel_id =$(this).attr('id')
                $("#"+panel_id).removeClass('ocultar');
                $("#"+panel_id).removeClass('mostrar');
                $("#"+panel_id).addClass('ocultar');

                if(panel_id=='panel-'+(last_position + 1)){
                    $("#"+panel_id).removeClass('ocultar');
                    $("#"+panel_id).addClass('mostrar');
                }

            });
        }
        
        if((last_position + 1)>=1 && (last_position + 1)<end_position){
            variable_que_no_sirve_pa_nada=1;
            @section('band_visibility_btn_anterior','active')
            $("#btn_anterior").prop('disabled',false)
            $("#btn_siguiente").prop('disabled',false)
            alert('enabled 1')
        }else{
            variable_que_no_sirve_pa_nada=1;
            @section('band_visibility_btn_anterior','disabled')
            $("#btn_anterior").prop('disabled',false)
            $("#btn_siguiente").prop('disabled',true)
            alert('disabled 1')

        }
        $('#last_position').val(last_position + 1);
    }

    function anterior_pagina(){
        var last_position = parseInt($('#last_position').val());
        var end_position = parseInt($('#end_position').val());
        if((last_position - 1)>=0 && (last_position - 1)<=end_position){
            $(".panel_encuesta_indicador").each(function(){
                var panel_id =$(this).attr('id')
                $("#"+panel_id).removeClass('ocultar');
                $("#"+panel_id).removeClass('mostrar');
                $("#"+panel_id).addClass('ocultar');

                if(panel_id=='panel-'+(last_position - 1)){
                    $("#"+panel_id).removeClass('ocultar');
                    $("#"+panel_id).addClass('mostrar');
                }

            });
        }
        if((last_position + 1)>=1 && (last_position + 1)<=end_position){
            variable_que_no_sirve_pa_nada=1;
            @section('band_visibility_btn_anterior','active')
            $("#btn_anterior").prop('disabled',true)
            $("#btn_siguiente").prop('disabled',false)
            alert('enabled 2')
        }else{
            variable_que_no_sirve_pa_nada=1;
            @section('band_visibility_btn_anterior','disabled')
            $("#btn_anterior").prop('disabled',false)
            $("#btn_siguiente").prop('disabled',false)
            alert('disabled')
            
        }
        $('#last_position').val(last_position - 1);
    }
</script>
<div class="box-group" id="accordion">
    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
    @php($i=0)
    @foreach ($indicadores as $indicador)
        @php($visibility = ($i==$operador_encuesta->i_codind_posicionar)?'mostrar':'ocultar')
        <div class="panel box box-primary {{$visibility}} panel_encuesta_indicador" id="panel-{{$i}}">
            <div class="box-header with-border">
                <h4 class="box-title">
                    <b>INDICADOR {{ $indicador->i_numind }}: </b> {{ $indicador->v_tituloind }}
                </h4>
            </div>
            <div id="{{ $indicador->i_codind }}">
                <div class="box-body">
                    @foreach ($preguntas as $pregunta)
                        @if ($pregunta->pivot->i_codind == $indicador->pivot->i_codind)
                        i_codind: {{$indicador->pivot->i_codind}} <!---->
                            @include('partials.pregunta-respuestaABC')
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @php($i = $i+1)
    @endforeach
    <input type="text" value="{{$operador_encuesta->i_codind_posicionar}}" id="last_position">
    <input type="text" value="{{$i-1}}" id="end_position">

</div>


<!-- 
<div class="panel box box-primary">
    <div class="box-header with-border">
        <ul class="nav nav-tabs" id="myTab">
            @foreach ($indicadores as $index => $indicador)
            @if ($index==0)
                <li class="active"><a href="#ind{{ $indicador->i_codind }}">INDICADOR {{ $indicador->i_numind }} </a></li>
            @endif            
                <li><a href="#ind{{ $indicador->i_codind }}">INDICADOR {{ $indicador->i_numind }}</a></li>
            @endforeach        
        </ul>
                
    </div>
    @foreach ($indicadores as $index => $indicador)
    <div class="tab-content">
        <div id="#ind{{ $indicador->i_codind }}" class="tab-pane fade in active">
            <h3>INDICADOR {{ $indicador->i_numind }}</h3>
            
        </div>                
    </div>
    @endforeach
</div>
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('cenepred/scripts/cenepred.js')}}"></script> -->
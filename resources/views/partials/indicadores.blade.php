<style>
.ocultar{
    display: none;
}
.mostrar{
    display: block;
}
</style>

<div class="box-group" id="accordion">
    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

    @foreach ($indicadores as $indicador)


        <div class="panel box box-primary">
            <div class="box-header with-border">
                <h4 class="box-title">
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#{{ $indicador->i_codind }}" aria-expanded="false" class="collapsed">--}}
                    <b>INDICADOR {{ $indicador->i_numind }}: </b> {{ $indicador->v_tituloind }}
                    {{--</a>--}}
                </h4>
            </div>
            <div id="{{ $indicador->i_codind }}">
                {{--<div id="{{ $indicador->i_codind }}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">    --}}
                <div class="box-body">
                    @foreach ($preguntas as $pregunta)
                        <!-- pregunta principal,i_codind: {{$indicador->pivot->i_codind}} -->
                        @if ($pregunta->pivot->i_codind == $indicador->pivot->i_codind)
                            @if ($pregunta->i_codtipo == 5)<!--textarea-->
                                @include('partials.abierta')
                                @foreach ($pregunta->subpreguntas as $subpregunta)
                                    @if ($subpregunta->i_codtipo == 5)
                                        @include('partials.spabierta')
                                    @elseif ($subpregunta->i_codtipo == 2)
                                        @include('partials.spopcionmultiple')
                                    @elseif ($subpregunta->i_codtipo == 3)
                                        @include('partials.spopcionunica')
                                    @elseif ($subpregunta->i_codtipo == 6)
                                        @include('partials.spopcionmatricial')
                                    @endif
                                @endforeach
                            @elseif ($pregunta->i_codtipo == 2)<!--checkbox-->
                                @include('partials.opcionmultiple')
                                @foreach ($pregunta->subpreguntas as $subpregunta)
                                    @if ($subpregunta->i_codtipo == 1)
                                        @include('partials.spabierta')
                                    @elseif ($subpregunta->i_codtipo == 2)
                                        @include('partials.spopcionmultiple')
                                    @elseif ($subpregunta->i_codtipo == 3)
                                        @include('partials.spopcionunica')
                                    @elseif ($subpregunta->i_codtipo == 6)
                                        @include('partials.spopcionmatricial')
                                    @endif
                                @endforeach
                            @elseif ($pregunta->i_codtipo == 3)<!--radio buttom-->
                                @include('partials.opcionunica')
                                
                                @foreach ($pregunta->subpreguntas as $subpregunta)
                                    @if ($subpregunta->i_codtipo == 1)
                                        @include('partials.spabierta')
                                    @elseif ($subpregunta->i_codtipo == 2)
                                        @include('partials.spopcionmultiple')
                                    @elseif ($subpregunta->i_codtipo == 3)
                                        @include('partials.spopcionunica')
                                    @elseif ($subpregunta->i_codtipo == 6)
                                        @include('partials.spopcionmatricial')
                                    @endif
                                @endforeach
                            @elseif ($pregunta->i_codtipo == 6)
                                @include('partials.opcionmatricial')
                                @foreach ($pregunta->subpreguntas as $subpregunta)
                                    @if ($subpregunta->i_codtipo == 5)
                                        @include('partials.spabierta')
                                    @elseif ($subpregunta->i_codtipo == 2)
                                        @include('partials.spopcionmultiple')
                                    @elseif ($subpregunta->i_codtipo == 3)
                                        @include('partials.spopcionunica')
                                    @elseif ($subpregunta->i_codtipo == 6)
                                        @include('partials.spopcionmatricial')
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
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
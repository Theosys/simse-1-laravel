@extends ('cenepred.base')
@section('contenido')
<h3>Directorio de Contacto</h3>

<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('img/avatar5.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <span><b>Ing. Jose Zavala Aguirre</b> </span></br>
        <span class="glyphicon glyphicon-envelope text-muted c-info"></span>  jzavala@cenepred.gob.pe</br>
        <span class="glyphicon glyphicon-earphone text-muted c-info"></span> 999777555<br>
    </div>
</div>

<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <span> <b> Econ. Elmer Juarez Martinez</b></span></br>
        <span class="glyphicon glyphicon-envelope text-muted c-info"></span> ejuarez@cenepred.gob.pe</br>
        <span class="glyphicon glyphicon-earphone text-muted c-info"></span> 999777555<br>
    </div>
</div>
<div style="clear: both;"></div>
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('img/avatar2.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <span> <b> CPC Yaqueline Cordova</b></span></br>
        <span class="glyphicon glyphicon-envelope text-muted c-info"></span> ycordova@cenepred.gob.pe</br>
        <span class="glyphicon glyphicon-earphone text-muted c-info"></span> 999777555<br>
    </div>
</div>

<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('img/avatar04.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <span> <b> Ing Ronald Loyola Pulido</b></span> </br>
        <span class="glyphicon glyphicon-envelope text-muted c-info"></span> rloyola@cenepred.gob.pe</br>
        <span class="glyphicon glyphicon-earphone text-muted c-info"></span> 980785896<br>
    </div>
</div> 

@endsection
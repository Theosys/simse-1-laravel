@extends('cenepred.er_base')
@section('contenido')    
    <script type="text/javascript">
        var id_er = '{{$id}}' ;
        //alert(id_er)
    </script>    
    <script type="text/javascript" src="{{asset('cenepred/data/escenario_riesgos.js?ver=1.5&id_er='.$id.'')}}"></script>
    <script type="text/javascript" src="{{asset('cenepred/scripts/main_er.js?ver=1.5&id_er='.$id.'')}}"></script>
@endsection

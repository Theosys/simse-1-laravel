@extends('cenepred.base')

@section('contenido')

<link title="timeline-styles" rel="stylesheet" href="{{ asset('/plugins/timeline/css/timeline.css') }}">
<script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.18.1/vis.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.18.1/vis.min.js"></script> -->
<h5 class="btn er">Escenario de Riesgos Ante la Temporada de Lluvias 2016 - 2017</h5>

<div id="visualization"></div>
<div id='timeline-embed' style="width: 100%; height: 600px"></div>

<script type="text/javascript">  
  var options = {
    hash_bookmark: false,    
    start_at_end : true,//empezar en el ultimo 
    language: 'es',
    hash_bookmark: true
  }

  timeline = new TL.Timeline('timeline-embed',
        'https://docs.google.com/spreadsheets/d/1pcVvu9BduarvxyXbb-2b2QTEDc4vATK0ZFmhUokjJRk/pubhtml',options);
</script>
@endsection
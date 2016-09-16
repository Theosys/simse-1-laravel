@extends ('cenepred.base')
@section('contenido')
<h1>Sugerencias</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contacto.guardar', 'class' => 'form', 'method'=>'post')) !!}

<div class="form-group">
    {!! Form::label('Nombres') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Ingrese su nombre')) !!}
</div>

<div class="form-group">
    {!! Form::label('Correo electrónico') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Ingrese su correo electrónico')) !!}
</div>

<div class="form-group">
    {!! Form::label('Mensaje') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Ingrese su mensaje')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
<p class="text-muted">Tambien puede escribirnos a <a href="mailto:dimse@cenepred.gob.pe"><b>dimse@cenepred.gob.pe</b></a> </p>

@endsection
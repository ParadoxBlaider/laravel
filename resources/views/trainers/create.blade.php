@extends('layouts.app')



@section('title','Trainers Create')

@section('content')
{!! Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']) !!}
<div class="form-group">
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('avatar','Avatar')!!}
    {!!Form::file('avatar')!!}
</div>

<div class="form-group">
    {!!Form::label('description','Descripción')!!}
    {!!Form::textarea('description',null,['class'=>'col-md form-control','style' => 'resize:none','rows' => 2])!!}
</div>

<div class="form-group">
    {!!Form::label('slug','Slug')!!}
    {!!Form::text('slug',null,['class'=>'form-control'])!!}
</div>
{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection

{{-- <html>

<head>
    <title></title>
    
</head>

<body>
    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</body>

</html> --}}
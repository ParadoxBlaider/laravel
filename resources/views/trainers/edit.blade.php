@extends('layouts.app')



@section('title','Trainers Edit')

@section('content')

{!! Form::model($trainer,['route'=>['trainers.update',$trainer],'method'=>'PUT','files'=>true]) !!}

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
{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
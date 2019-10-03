@extends('layouts.app')



@section('title','Trainers')

@section('content')
<div class="row">
    @foreach($trainers as $trainer)

    <div class="col-sm">
        <div class="card text-center">
            <img class="card-img-top img-fluid rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
            <div class="card-body ">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text ">{{$trainer->description}}</p>
                <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
                {{ Form::open(array('url' => 'trainers/' . $trainer->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
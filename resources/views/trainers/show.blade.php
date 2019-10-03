@extends('layouts.app')



@section('title','Trainer')

@section('content')
<img class="pokemons card-img-top img-fluid rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
<div class="text-center">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p class="card-text ">{{$trainer->description}}</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
</div>
@endsection
@extends('layout')

@section('title' , 'about')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="Quién soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quién soy</h1>
            <p class="lead text-secondary">Este es mi proyecto Full-Stack con el Framework de Laravel.
                Miguel Angel Alarcon Razo
            </p>
            <a class="btn btn-lg  btn-block btn-primary" href="{{ route('contact')}}">Contactame</a>
            <a class="btn btn-lg  btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portafolio</a>
        </div>

    </div>
</div>

@endsection
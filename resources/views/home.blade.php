@extends('layout')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Back-End Developer</h1>
            <p class="lead text-secondary">Este es mi proyecto Full-Stack con el Framework de Laravel.
                Miguel Angel Alarcon Razo
            </p>
            <a class="btn btn-lg  btn-block btn-primary" href="{{ route('contact')}}">Contactame</a>
            <a class="btn btn-lg  btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
</div>
@endsection
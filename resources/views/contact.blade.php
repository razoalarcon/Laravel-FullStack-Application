@extends('layout')

@section('title' , 'contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">


            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store')}}">
                @csrf
                <h1 class="display-4">@lang('Contact')</h1>
                <!--Laravel nosproteje con tokens agregarla siempre en  los forms-->
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                        id="name" name="name" placeholder="Escribe aqui tu nombre..." value="{{old('name')}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Correo electronico</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                        type="text" name="email" placeholder="Escribe aqui tu e-mai..." value="{{old('email')}}">
                    @error('email')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                        id="subject" name="subject" placeholder="Escribe aqui el asunto de tu mensaje..."
                        value="{{old('subject')}}">
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea
                        class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                        id="content" name="content"
                        placeholder="Escribe aqui el contenido de tu mensaje...">{{old('content')}}</textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
            </form>
        </div>
    </div>
</div>

@endsection
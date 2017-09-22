@extends('layouts.app')

@section('content')

    @include('layouts.partials.header', [
        'title'      => 'Restablecer Contraseña',
        'subtitle'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'background' => asset('images/header.jpg')
    ])

    <div class="container content content-single">
        <div class="row">
            <h2>Ingresa tu nueva contraseña</h2>
            <form action="{{ route('password.post.reset') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div><!-- .form-group -->
                <div class="form-group">
                    <label for="password">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div><!-- .form-group -->
                <div class="form-group">
                    <label for="confirmation">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmation" name="password_confirmation">
                </div><!-- .form-group -->
                <button class="btn btn-black loading-text">Enviar <i class="fa fa-send"></i></button>
            </form>
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

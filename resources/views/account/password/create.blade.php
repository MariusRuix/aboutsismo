@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 insert-password">
            <h4 class="text-uppercase">Por favor ingresa tu nueva contraseña</h4>
            <form action="{{ route('password.set.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" id="password" placeholder="NUEVA CONTRASEÑA" required>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="CONFIRMAR CONTRASEÑA" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="small text-muted"><i class="fa fa-info-circle"></i> Todos los campos son obligatorios</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-primary" data-loading-text="Un momento por favor...">CAMBIAR CONTRASEÑA  <i class="fa fa-key"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 suggestion-password">
            <h4 class="text-uppercase">Sugerencias para una contraseña segura</h4>
            <h5 class="text-uppercase">Una contraseña segura:</h5>
            <ul>
                <li>Debe tener 6 caracteres como mínimo</li>
                <li>Puede contener letras mayúsculas y minúsculas</li>
                <li>Puede contener números</li>
                <li>Puede contener símbolos</li>
            </ul>
        </div>
    </div>

@endsection

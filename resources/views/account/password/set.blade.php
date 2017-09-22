@extends('layouts.app')

@section('content')

    <div class="container box-height">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h1>Actualizar contraseña</h1>
                <p class="lead">Por seguridad de tu cuenta es necesario que cambies tu contraseña</p>

                <div class="row">
                    <div class="col-sm-6">
                        <h4>Por favor ingresa tu nueva contraseña</h4>

                        <form action="{{ route('password.set.store') }}" method="POST" >

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Nueva contraseña" required />
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" required />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary">
                                    <i class="fa fa-btn fa-key"></i> Cambiar contraseña
                                </button>
                            </div>
                        </form>
                    </div><!-- .col-sm-6 -->

                    <div class="col-sm-6">
                        <h4>Sugerencias para una contraseña segura</h4>
                        <h5>Una contraseña segura:</h5>
                        <ul>
                            <li>Debe tener 6 caracteres como mínimo</li>
                            <li>Puede contener letras mayúsculas y minúsculas</li>
                            <li>Puede contener números</li>
                            <li>Puede contener símbolos</li>
                        </ul>
                    </div><!-- .col-sm-6 -->
                </div><!-- .row -->



            </div><!-- .col-md-6 -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection

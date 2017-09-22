<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Nombre del usuario'] ) !!}
        </div><!-- .form-group -->

        <div class="form-group">
            {!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label lead pull-left']) !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico'] ) !!}
        </div><!-- .form-group -->

        @unless( Request::is('*/create') )
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Información</h3>
                    </div><!-- .panel-heading -->

                    <div class="panel-body">
                        <table class="table table-hover text-left">
                            <thead>
                                <tr>
                                    <th>&nbsp</th>
                                    <th>Evento</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-calendar"></i></td>
                                    <td>Usuario fue creado</td>
                                    <td>{{ $user->present()->created_at }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-calendar"></i></td>
                                    <td>Primer acceso</td>
                                    <td>{{ $user->present()->first_login }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-calendar"></i></td>
                                    <td>Último acceso</td>
                                    <td>{{ $user->present()->last_login }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-trash"></i></td>
                                    <td>Borrado por usuario:</td>
                                    <td>{{ $user->present()->deleted_by }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-calendar"></i></td>
                                    <td>Fecha Baja</td>
                                    <td>{{ $user->present()->deleted_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- .panel-body -->

                </div><!-- .panel panel-default -->
            </div><!-- .col-md-12 -->
        @endunless

    </div><!-- col-md-8 -->

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Actualizar</h3>
            </div><!-- .panel-heading -->
            <div class="panel-body" id="published_at__container">
                <input id="published_at__button--submit" class="btn btn-primary btn-block" type="submit" value="{{ $btn or 'Crear' }}">
            </div><!-- .panel-body -->
        </div><!-- .panel -->

    </div><!-- .col-md-4 -->
</div><!-- .row -->

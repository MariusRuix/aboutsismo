@extends('layouts.dashboard')

@section('content')

    @include('dashboard::users.partials._header', ['subtitle' => 'Editar'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($user, ['route' => ['dashboard.users.update', $user->id], 'method' => 'PATCH']) !!}

                @include('dashboard::users.partials._form', ['btn' => 'Actualizar'])

            {!! Form::close() !!}

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

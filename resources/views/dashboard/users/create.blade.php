@extends('layouts.dashboard')

@section('content')

    @include('dashboard::users.partials._header', ['subtitle' => 'Nuevo'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            {!! Form::open(['route' => ['dashboard.users.store'], 'method' => 'POST', 'files' => true]) !!}

                @include('dashboard::users.partials._form')

            {!! Form::close() !!}

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

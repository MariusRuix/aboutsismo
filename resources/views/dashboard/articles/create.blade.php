@extends('layouts.dashboard')

@section('content')

    @include('dashboard::articles.partials._header', ['subtitle' => 'Nuevo'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            {!! Form::open(['route' => ['dashboard.videos.store'], 'method' => 'POST', 'files' => true]) !!}

                @include('dashboard::articles.partials._form')

            {!! Form::close() !!}

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

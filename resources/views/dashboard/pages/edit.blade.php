@extends('layouts.dashboard')

@section('content')

    @include('dashboard::pages.partials._header', ['subtitle' => 'Actualizar'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($page, ['route' => ['dashboard.pages.update', $page->slug], 'method' => 'PATCH']) !!}

                @include('dashboard::pages.partials._form', ['btn' => 'Actualizar'])

            {!! Form::close() !!}

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

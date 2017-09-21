@extends('layouts.dashboard')

@section('content')

    @include('dashboard::articles.partials._header', ['subtitle' => 'Editar'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($article, ['route' => ['dashboard.videos.update', $article->id], 'method' => 'PATCH']) !!}

                @include('dashboard::articles.partials._form', ['btn' => 'Actualizar'])

            {!! Form::close() !!}

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

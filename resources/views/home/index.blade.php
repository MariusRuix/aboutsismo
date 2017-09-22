@extends('layouts.app')

@section('content')

    <div class="home box-height">
        <div class="container">
            <div class="row">
                <div class="locations box-space box-grid">
                    <div class="col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1_-V97lbdgLFHpx-CtqhLWlJAnYY" width="100%" height="600"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="information box-space box-grid text-center">
                    <div class="col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
                        {!! isset($info->content) ? $info->content : '' !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sources box-space box-grid">
                    <div class="col-xs-12">

                        @foreach($articles->chunk(3) as $trheearticles)
                            <div class="row">
                                @foreach($trheearticles as $article)
                                    <div class="col-sm-4">
                                        <a href="#modal-source-{{ $article->id }}" data-toggle="modal" class="link--source">
                                            <img src="{{ $article->present()->featured_image }}" class="image--source" alt="Video poster">
                                            <h1 class="sources__title">{{ $article->title }}</h1>
                                            <p class="m-b">{{ $article->present()->excerpt() }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        <div class="pagination-container pull-right">
                            <nav>{!! $articles->render() !!}</nav>
                        </div><!-- .pagination-container -->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="help box-space box-grid">
                    <h2>Cómo ayudar</h2>
                    <div class="col-xs-12">
                        {!! isset($help->content) ? $help->content : '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($articles as $article)
        @include('layouts._modals', ['article' => $article])
    @endforeach

@endsection

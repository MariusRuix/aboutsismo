@extends('layouts.app')

@section('content')

    <ul>
        @foreach($articles as $article)
            <li>
                <p>{{ $article->title }}</p>
                <p><a href="{{ route('categories.index', $article->category->slug) }}">{{ $article->category->name }}</a></p>
                <p>{!! $article->body !!}</p>
            </li>
        @endforeach
    </ul>

@endsection

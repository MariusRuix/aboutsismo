@extends('layouts.app')

@section('content')
    <h2>{!! isset($page->content) ? $page->title : '' !!}</h2>

    <div>
        {!! isset($page->content) ? $page->content : '' !!}
    </div>
@endsection

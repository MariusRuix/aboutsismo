@extends('layouts.app')

@section('content')
    <h2>{!! isset($page->content) ? $page->title : '' !!}</h2>

    <div>
        {!! isset($page->content) ? $page->content : '' !!}

        <iframe src="https://www.google.com/maps/d/embed?mid=13B_gbt3e5RWk_6xQoQ15xxhGOFs" width="640" height="480"></iframe>

    </div>
@endsection

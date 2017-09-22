@extends('layouts.dashboard')


@section('content')

    @include('dashboard::users.partials._header', ['subtitle' => 'Eliminados'])

    @include('dashboard::_messages')

    <div class="row">
        <div class="col-lg-12">

            <div class="list-group">

                @forelse($users as $user)
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">{{ $user->name }}</h4>
                        <div class="list-group-item-text">
                            <ul class="list-inline">
                                <li class="pull-right text-muted">{{ $user->updated_at }}</li>
                                <li>
                                    <form action="{{ route('dashboard.users.restore', $user->id) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-link restore-entity">Restablecer</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .list-group-item -->
                @empty
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">No se encontro ningun registro.</h4>
                    </div>
                @endforelse

                <div class="pagination-container">
                    <nav>{!! $users->render() !!}</nav>
                </div><!-- .pagination-container -->

            </div><!-- .list-group-->

        </div><!-- .col-lg-12 -->
    </div><!-- .row -->

@endsection

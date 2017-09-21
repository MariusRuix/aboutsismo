@extends('layouts.app')

@section('content')

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="map box-space box-grid">
                    <div class="col-xs-12">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1_-V97lbdgLFHpx-CtqhLWlJAnYY" width="100%" height="600"></iframe>
                    </div>
                </div>
                <div class="timeline box-space box-grid text-center">
                    <div class="col-xs-12">
                        <a class="twitter-timeline" data-width="500" data-height="1200" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a>
                        <a class="twitter-timeline" data-width="500" data-height="1200" href="https://twitter.com/Twitter">Tweets by TwitterDev</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

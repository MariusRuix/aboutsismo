<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Dashboard » about sismo</title>
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>

    <div id="wrapper">

        @include('dashboard._navigation')

        <div id="page-wrapper">

            @yield('content')

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>

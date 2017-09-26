<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="content-language" content="es-MX">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InfórmateMX</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="icon" type="image/png" href="/images/favicon.png">

        <!-- styles -->
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
        <div id="app">

            @include('layouts._navbar')

            @yield('content')

            @include('layouts._footer')

        </div><!-- #app -->

        <script src="/js/app.js"></script>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-107091327-1', 'auto');
              ga('send', 'pageview');
        </script>

    </body>
</html>

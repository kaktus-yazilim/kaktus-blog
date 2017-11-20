<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') | Taze Mürekkep</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/theme.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kaktus.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tooltip.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}"/>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!--<script>
        var message = "Geri dön | Taze Mürekkep";
        var original;
        $(window).focus(function () {
            if (original) {
                document.title = original;
            }
        }).blur(function () {
            var title = $('title').text();
            if (title != message) {
                original = title;
            }
            document.title = message;
        });
    </script>-->
    <script src="{{asset('dist/theme.min.js')}}"></script>
</head>
<body @yield('bodyClass')>
@yield('content')
@include('modals.feedbackModal')
<!--<div id="search">
    <button type="button" class="close">×</button>
    <form class="form-horizontal" method="POST" action="">
        <h3>Get Set...</h3>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-success">Go for Search</button>
    </form>
</div>
-->
</body>
</html>








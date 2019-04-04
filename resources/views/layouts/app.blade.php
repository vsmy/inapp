<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name ="title" content="Intobi App - Limited Liability Company Intobi International">
    <meta name ="description" content="Partner of Intobi. Product Development Company">
    <meta property="og:url" content="https://intobi.app">
    <meta property="og:site_name" content="Intobi App">
    <meta property="og:image" content="https://intobi.app/images/og_logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="2560">
    <meta property="og:image:height" content="982">


    <title>Intobi App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="icon" href="images/icons/favico.png" >


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<main class="py-4">
    @yield('content')
</main>
@include('layouts.footer')
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js" ></script>


<script>
    $(function() {

        $(window).scroll(function() {

            if($(this).scrollTop() != 0) {

                $('#toTop').fadeIn();

            } else {

                $('#toTop').fadeOut();

            }

        });

        $('#toTop').click(function() {

            $('body,html').animate({scrollTop:0},100);

        });

    });
</script>


{{--<div id="toTop">--}}
    {{--<div class="cirle"></div>--}}
{{--</div>--}}

</html>

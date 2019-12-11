<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }} ">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
         


    </head>
    <body>
        @include('sweetalert::alert')
        
        @include('partials.nav')

        @yield('content')
        
        @include('partials.footer')

        <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        
        @yield('script')
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EqualDesign | Home') }}</title>

        <!-- START: Cascading Style Sheets (CSS) -->
        <!-- Bootstrap -->
        <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/vendor/fontawesome-6.5.1/css/all.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/build/css/styles.css')}}" rel="stylesheet">
        <!-- END: Cascading Style Sheets (CSS) -->


        <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/build/js/color-modes.js')}}"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </body>
</html>

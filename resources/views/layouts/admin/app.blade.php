<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EqualDesign | Home') }}</title>

        <!-- START: Cascading Style Sheets (CSS) -->
            <!-- BEGIN: Vendor CSS-->
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/vendors/css/vendors.min.css')}}">
            <!-- END: Vendor CSS-->

            <!-- BEGIN: Theme CSS-->
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/bootstrap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/bootstrap-extended.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/colors.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/components.css')}}">
            <!-- END: Theme CSS-->

            <!-- BEGIN: Page CSS-->
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/core/menu/menu-types/vertical-compact-menu.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/core/colors/palette-gradient.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/fonts/mobiriseicons/24px/mobirise/style.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/vendors/css/charts/morris.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/fonts/simple-line-icons/style.css')}}">
            <link rel="stylesheet" type="text/css" href="{{url('app-assets/css/core/colors/palette-gradient.css')}}">
            <!-- END: Page CSS-->

            
            <!-- fontawesome -->
            <link href="{{url('assets/vendor/fontawesome-6.5.1/css/all.min.css')}}" rel="stylesheet">
        <!-- END: Cascading Style Sheets (CSS) -->
    </head>
    <body class="vertical-layout vertical-compact-menu 2-columns fixed-navbar" data-open="click"
    data-menu="vertical-compact-menu" data-col="2-columns">
        @include('partial.admin.navigation')
        @include('partial.admin.header')
        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
            {{ $slot }}

        @include('partial.admin.scripts')
    </body>
</html>

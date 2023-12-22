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
    <body>
      <main class="vh-100 col-lg-8 mx-auto p-4 py-md-5 d-flex flex-column justify-content-center align-items-center gap-4">
        <!-- Hero -->
        <div class="bg-dark rounded-pill d-flex justify-content-center align-items-center px-4 py-2">
          <a class="d-flex flex-row text-decoration-none" href="">
            <p class="me-4 text-gray-400">Explore the main source</p>
            <span class="d-flex align-items-center">
              <p class="border-start">
                  <i class="fa-brands fa-github fa-bounce fa-lg ps-4 text-gray-400"></i>
                  <span class="ps-2 text-gray-400">Github</span>
              </p>
            </span>
          </a>
        </div>
        <h1 class="display-1 fw-bold lh-1">EqualityCube</h1>
        <h5 class="lh-1">Designed for you to get concept equality, simple & fast.</h5>
        <div class="d-flex justify-content-between flex-row gap-3">
          <a class="btn btn-outline-dark rounded-pill" href="{{ route('login') }}">User Interface</a>
          <a class="btn btn-outline-dark rounded-pill" href="{{ route('admin') }}">Admin Interface</a>
        </div>
        <!-- End Hero -->
      </main>
    </body>
</html>

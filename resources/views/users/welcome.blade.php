<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Online Passport') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">


{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>
<body>
         @include('partials.header')

        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5">
                    @yield('content')
                </main>
            </div>
        </div>



          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    {{-- <script src="{{ asset('js/main.js') }}" ></script> --}}

</body>


</html>

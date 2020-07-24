<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OnLine Passport application</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{asset('storage/images/favicon.ico')}}" />


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }



            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid cust-con ">



            <!-- Navigation-->
         @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <a href="{{ url('/') }}" class="text-white">Home</a>
                       <a href="{{ url('/users') }}" class="text-white">Dashboard</a>

                    @else
                        <a href="{{ route('login') }}" class="text-white">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <!-- Masthead-->
        <header class="masthead">
            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">GET YOUR PASSPORT AND ID NUMBER IN THE COMFORT OF YOUR OWN HOME</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5 text-white">Thanks to our innovative engineers at the University of Zimbabwe who have provided us with convinience and now we can apply passports in the comfort of our own homes</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">Getting Started</a>
                    </div>
                </div>
            </div>
        </header>
        </div>
    </body>
</html>

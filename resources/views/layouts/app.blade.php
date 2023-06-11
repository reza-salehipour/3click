<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro-6.4.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

</head>
<body style="background: #f5f7f9; overflow-x: hidden">
<nav class="collapse navbar-collapse d-none position-fixed vh-100 d-flex flex-column bg-white z-1 d-md-none"
     id="navbarSupportedContent">
    <div class="d-flex flex-column w-100 nav-items">
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Airplane Ticket
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Hotel
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Packages
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Services
        </span>
        </a>
    </div>
</nav>
<div class="vw-100 position-relative d-flex flex-column">
    <header class="position-relative bg-white">
        <div class="container h-100">
            <nav class="navbar navbar-expand-lg navbar-light h-100">
                <div class="d-flex d-lg-none justify-content-between w-100 mobile-nav">
                    <button class="navbar-toggler border-2" type="button" data-bs-toggle="collapse"
                            href="#navbarSupportedContent">
                        <i class="fa-solid fa-bars-sort fa-flip-vertical"></i>
                    </button>

                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" style="max-height: 24px;">
                    </a>

                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <i class="fa-light fa-user"></i>
                    </button>
                </div>
                <nav class="d-none justify-content-between d-lg-flex w-100 desktop-navbar">
                    <div class="d-lg-flex py-lg-2">
                        <div class="text-center justify-content-center">
                            <a class="" href="#">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" style="max-height: 24px;">
                            </a>
                            <a class="" href="#">
                                Airplane Ticket
                            </a>
                            <a class="" href="#">
                                Hotel
                            </a>
                            <a class="" href="#">
                                Tour
                            </a>
                            <a class="" href="#">
                                Package
                            </a>
                            <a class="" href="#">
                                Services
                            </a>
                            <a class="" href="#">
                                Magazine
                            </a>
                        </div>
                    </div>
                    <div class="d-flex text-center">
                        <button class="bg-white">
                            <span>Login/Register</span>
                        </button>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
</div>
<div class="main vh-100 mx-3 overflow-x-hidden">
    @yield('content')
</div>
<script src={{asset('assets/js/font-awesome-pro-6.4.0.min.js')}}></script>

</body>
</html>

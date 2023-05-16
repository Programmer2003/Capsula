<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/jquery.nstSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    @stack('styles')
</head>

<body>
    @include('layouts.preloader')
    
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        <div class="tm-product-quickview" id="tm-product-quickview">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-12">
                        <div class="tm-product-quickview-inner">
                            @include('product.view', [
                                'product' => \App\Models\Product::all()->random(),
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>
    </div>

    <!-- JS FILES HERE -->
    <!-- inject:js -->
    <script src="{{ asset('js/vendors/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/vendors/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/vendors/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendors/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendors/instafeed.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.nstslider.min.js') }}"></script>
    <script src="{{ asset('js/vendors/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/share-buttons.jquery.js') }}"></script>
    <!-- endinject -->
    @stack('scripts')

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
</body>

</html>

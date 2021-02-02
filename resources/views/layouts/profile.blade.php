<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/mycss/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/themify-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/mycss/style.css') }}" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/myjs/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery-ui.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery.countdown.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery.nice-select.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery.zoom.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery.dd.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/jquery.slicknav.js') }}" defer></script>
        <script src="{{ asset('js/myjs/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('js/myjs/main.js') }}" defer></script>
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="ht-right">
                            @csrf
                            <a
                                href="{{ route('logout') }}"
                                class="login-panel"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>

                            <a href="{{ route('personal.personal') }}" class="login-panel"><i class="fa fa-user"></i>Profile</a>
                        </form>
                    @else
                        <div class="ht-right">
                            <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="login-panel">Register</a>
                            @endif
                        </div>
                    @endauth
                </div>
            </div>
            <div class="nav-item">
                <div class="container">
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <x-nav-li :href="route('personal.profile')" :active="request()->routeIs('personal.profile')">
                                <a href="{{ route('personal.profile') }}">Profile</a>
                            </x-nav-li>
                            @role('administrator')
                                <x-nav-li :href="route('personal.admin')" :active="request()->routeIs('personal.admin')">
                                    <a href="{{ route('personal.admin') }}">Admin</a>
                                </x-nav-li>
                            @endrole
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="{{ route('main') }}"><img src="/img/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

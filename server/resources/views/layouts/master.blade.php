<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ ( isset( $title ) ) ? $title . ' - Wizum' : 'Wizum' }}</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}">
</head>
<body>
    <!-- Top Bar -->
    <header class="header-app">
        <!-- Start Top Bar -->
        <div class="row align-middle align-justify">
            <div class="logo"><img src="{{ asset('img/logo.png') }}" alt=""></div>
            <div class="login">
                @if( Auth::check() )
                    <div class="name-user">{{ Auth::user()->name }}</div>
                    <div class="logout-user"><a href="{{ route('auth-logout') }}">Desconectar</a> </div>
                @else
                    <a href="{{ route('auth-redirect') }}" class="button">Entrar con Facebook</a>
                @endif
            </div>
        </div>
    </header>
    <!-- End Top Bar -->

    @yield('content')

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script> $(document).foundation();</script>   
</body>
</html>
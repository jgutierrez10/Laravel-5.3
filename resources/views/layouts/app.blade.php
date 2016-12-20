<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jQuery-2.1.4.min.js') }}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="{{ url('/') }}" class="brand-logo">&nbsp;{{ config('app.name', 'Laravel') }}</a>
                    <!-- Authentication Links -->
                    <ul class="right hide-on-med-and-down">
                    
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif

                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-content">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>

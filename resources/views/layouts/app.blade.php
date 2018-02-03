<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gsdk.css') }}" rel="stylesheet">

</head>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top ">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <b  style="font-size: x-large;">f<span class="dwa_zera">00</span>dstr 2.0</b>
                    @guest
                    </br>
                    <p class='stan_zalogowania' style="font-size:80%">Not logged in</p>
                    @else
                    <p class='stan_zalogowania' style="font-size:80%">user <span style='color:#BADA55'>{{ Auth::user()-> name }}</span> logged in</p>
                    
                    @endguest
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-cutlery" ></span>Point <span class="caret"></span>

                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <a href="{{ url('point/create') }}">
                                    <li class="li_w_poincie">
                                        <span class="glyphicon glyphicon-plus gly_i"></span>Add Point
                                    </li>
                                </a>
                                <a href="{{ url('point') }}">
                                    <li class="li_w_poincie">
                                        <span style="display: inline-block;" class="glyphicon glyphicon-th-list  gly_i"></span>
                                        <span style="display: inline-block;">Index Point</span>
                                        <span class="okragly_licznik" style="margin-bottom:3px;float:right; display: inline-block;"><span style="margin-left: 6px">{{App\Point::count()}}</span></span>
                                    </li>
                                </a>

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" ></span> <span class="napis">User</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="{{ Active::check('register') }}" href="{{ route('register') }}">
                                        <span class="glyphicon glyphicon-plus" ></span> Register
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ Active::check('user') }}" href="{{ url('user') }}">
                                        <span class="glyphicon glyphicon-th-list" ></span>  Index User
                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown">
                            <a href="{{ url('rating/create') }}" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-star" ></span><span class="napis">Rating</span>
                            </a>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in" ></span>Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <body>
        @yield('content')
    </body>
    <footer>
        @yield('footer')
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jq.js') }}"></script>
    <navy>
</html>
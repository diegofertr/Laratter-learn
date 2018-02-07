<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laratter by YeyO')</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--  <style>
        .card {
            height: 450px;
        }
    </style>  -->
</head>
<body>
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper light-blue darken-2 lighten-2">
                    <a href="/" class="brand-logo">Laratter</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class='dropdown-button light-blue' data-activates='dropdown1'>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>
                            
                            <ul id="dropdown1" class="dropdown-content black-text">
                                <li class="divider"></li>
                                <li class="black-text">
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">backspace</i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/createMessage">
                                <i class="large material-icons">add</i>
                            </a>
                        </li>
                    @endguest
                    
                </ul>
            </div>
        </nav>
        <div class="container" id="app">
            @yield('content')
        </div>
    </div> 

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src={{asset('js/app.js')}}></script>
    {{--  <script>
        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });
    </script>  --}}
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laratter by YeyO')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="row">
                <div class="col s12">
                    <nav>
                        <div class="nav-wrapper light-blue darken-2 lighten-2">
                            <a href="#" class="brand-logo">Laratter</a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="/">Home</a></li>
                            </ul>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li>
                                    <a href="/createMessage">
                                        <i class="large material-icons">add</i>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container" id="app">
                        @yield('content')
                    </div>
                </div> 
              </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src={{asset('js/app.js')}}></script>
        <script>
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
        </script>
    </body>
</html>

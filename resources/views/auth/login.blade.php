@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card lightgrey darken-1">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="card-content blue-text">
                        <span class="card-title center">Login</span>
                        <hr>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email">Email</label>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" class="validate" name="password" required autofocus>
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <p class="blue-text">
                            <input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="test5">Recuérdame</label>
                        </p>
                    </div>
                    <div class="card-action center">
                        <button type="submit" class="btn blue darken-1">
                                Iniciar Sesión
                        </button>    
                        <a class="btn blue darken-1" href="{{ route('password.request') }}">
                            Olvidate tu contraseña?
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

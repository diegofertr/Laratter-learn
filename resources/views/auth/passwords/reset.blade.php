@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card lightgrey darken-1">
            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <div class="card-content blue-text">
                    <span class="card-title center">Reset Password</span>
                    <hr>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row">
                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>
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
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Password</label>    
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <i class="material-icons prefix">refresh</i>
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm"></label>    
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <div class="card-action center">
                    <button type="submit" class="btn blue darken-1">
                        Reset Password
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card lightgrey darken-1">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="card-content blue-text">
                        <span class="card-title center">Register</span>
                        <hr>
                        <div class="row">
                            <div class="input-field col s12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input placeholder="Jhon Doe" id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="jhon.doe@example.com" id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
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
                                <input placeholder="******" id="password" type="password" class="validate" name="password" required>
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button type="submit" class="btn blue darken-1">
                            Registrar
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

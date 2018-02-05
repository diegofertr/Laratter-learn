@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card lightgrey darken-1">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="card-content blue-text">
                    <span class="card-title center">Reset Password</span>
                    <hr>
                    <div class="row">
                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-action center">
                    <button type="submit" class="btn blue darken-1">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

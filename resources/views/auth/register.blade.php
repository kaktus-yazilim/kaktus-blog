@extends('layouts.app')

@section('content')
    <body class="signup-page">
    <div class="wrapper">
        <div class="header">
            <a href="index.html" class="logo">
                <img src="images/logo-alt-b.png"/>
            </a>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-field{{ $errors->has('user_name') ? ' has-error' : '' }}">
                <input id="user_name" type="text" class="form-control" name="user_name"
                       value="{{ old('user_name') }}" placeholder="User Name" required autofocus>

                @if ($errors->has('user_name'))
                    <span class="help-block">
                         <strong>{{ $errors->first('user_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-field{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}" placeholder="E-mail" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-field{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                       required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-field">
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div class="form-field">
                <label class="terms custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    I've read & agree with the <a href="#">Terms</a>.
                </label>
            </div>
            <div class="form-action">
                <input type="submit" class="btn-shadow btn-shadow-primary" value="Sign Up">
            </div>
            <div class="form-bottom">
                Already have an account?
                <a href="{{route('login')}}">Sign in</a>
            </div>
        </form>
    </div>
    </div>
@endsection

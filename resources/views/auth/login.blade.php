@extends('layouts.app')

@section('content')
    <body class="signin-page">
    <div class="wrapper">
        <div class="header">
            <a href="index.html" class="logo">
                <img src="images/logo-alt-b.png"/>
            </a>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-field{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}" placeholder="E-Mail" required autofocus>

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
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input"
                           name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="custom-control-indicator"></span>
                    Remember Me
                </label>
            </div>
            <div class="form-action">
                <input type="submit" class="btn-shadow btn-shadow-primary" value="Log in">
            </div>
            <div class="form-bottom">
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            </div>
            <div class="form-bottom">
                Don't have an account yet?
                <a href="{{route('register')}}">Sign up</a>
            </div>
        </form>
    </div>
    </body>
@endsection

@extends('layouts.app')

@section('content')
    <body class="signin-page">
    <div class="wrapper">
        <div class="header">
            <a href="index.html" class="logo">
                <img src="{{asset('images/logo-alt-b.png')}}"/>
            </a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-field{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}" placeholder="Your Email" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-action">
                <input type="submit" class="btn-shadow btn-shadow-primary" value="Send Password Reset Link">
            </div>
            <div class="form-bottom">
                <a href="{{route('login')}}">Back to Log in</a>
            </div>
        </form>
    </div>
    </body>
@endsection

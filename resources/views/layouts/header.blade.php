<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" role="navigation">
    <div class="container no-override">
        <a class="navbar-brand" href="{{ route('blog') }}">
            <img src="{{asset('images/logo-alt-w.png')}}" class="d-none d-lg-inline mr-2 w-25"/>
            Taze Mürekkep @yield('pageName')
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
            <ul class="navbar-nav">
                @yield('type')

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link--rounded dropdown-toggle"
                               data-toggle="dropdown">
                                <span class="ion-person"></span>
                                {{ Auth::user()->first_name ? Auth::user()->first_name . ' ' . Auth::user()->last_name :  Auth::user()->user_name }}
                                <i class="ion-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ url('/home') }}">
                                    <span class="ion-person"></span>
                                    @lang('messages.my_account')
                                </a>
                                <a class="dropdown-item" href="{{ url('/home') }}">
                                    <span class="ion-person"></span>
                                    @lang('messages.my_account')
                                </a>
                            </div>
                        </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav-link--rounded"
                                   href="{{ route('login') }}">@lang('messages.login')</a>
                            <li class="nav-item">
                                <a class="nav-link nav-link--rounded"
                                   href="{{ route('register') }}">@lang('messages.register')</a>
                            </li>
                            @endauth
                        @endif
            </ul>
        </div>
    </div>
</nav>

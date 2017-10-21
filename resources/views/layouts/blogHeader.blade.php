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
                <li class="nav-item dropdown dropdown-extend">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Components
                        <i class="ion-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-extend-menu" role="menu">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="dropdown-item" href="docs/alerts.html"><i class="ion-alert-circled"></i>
                                    Alerts</a>
                            </div>
                            <div class="col-md-3">
                                <a class="dropdown-item" href="docs/carousel.html"><i
                                            class="ion-android-arrow-dropright-circle"></i> Carousel</a>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Shop
                        <i class="ion-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="ecommerce/index.html">Home page</a>
                    </div>
                </li>
                @if (Route::currentRouteName() != 'blog')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}"><i class="fa fa-book"></i>Blog</a>
                </li>
                @endif
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link--rounded dropdown-toggle"
                               data-toggle="dropdown">
                                <span class="fa fa-user"></span>
                                {{ Auth::user()->first_name ? Auth::user()->first_name . ' ' . Auth::user()->last_name :  Auth::user()->user_name }}
                                <i class="ion-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ url('/home') }}">
                                    <span class="fa fa-user"></span>
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

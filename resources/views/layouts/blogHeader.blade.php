@extends('layouts.header')
@section('type')
    <li class="nav-item dropdown dropdown-extend">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            @lang('messages.categories')
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
                                class="ion-android-arrow-dropright-circle"></i> @lang('messages.categories')
                    </a>
                </div>

            </div>
        </div>
    </li>
@endsection
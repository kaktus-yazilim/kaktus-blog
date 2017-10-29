@extends('layouts.header')
@section('type')
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            Shop
            <i class="ion-chevron-down"></i>
        </a>
        <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="ecommerce/index.html">Home page</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
    </li>
@endsection
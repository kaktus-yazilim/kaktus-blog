@extends('layouts.app')

@section('content')
    @section('pageName') Blog @endsection
    @include('layouts.blogHeader')
    @yield('contentBlog')
    @include('layouts.blogFooter')
@endsection

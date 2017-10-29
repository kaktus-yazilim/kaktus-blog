@extends('blog.main')
@section('contentBlog')
    <div class="blog-grid-slider">
        <div id="spacial-slider" class="slider-component fxStickIt">
            <ul class="itemwrap">
                @foreach($posts['headerPostList'] as $post)
                    <li class="current">
                        <div class="post">
                            <div class="container">
                                <h1>
                                    <a href="{{ $post['postLink'] }}">
                                        {{ $post['title'] }}
                                    </a>
                                </h1>
                                <div class="bottom">
                                    <img src="{{ asset($post['authorImage']) }}" class="avatar"/>
                                    <span class="category">
                                        {{ $post['authorFullName'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pic"
                             style="background-image: url({{ $post['headerImageUrl'] }});">
                        </div>
                    </li>
                @endforeach
            </ul>
            <nav>
                <a class="prev" href="#">
                    <span class="icon-wrap"></span>
                </a>
                <a class="next" href="#">
                    <span class="icon-wrap"></span>
                </a>
            </nav>
        </div>
    </div>

    <div class="blog-sidebar-header">
        <div class="container">
            <div class="categories">
                <a href="">
                    <span data-animate="fadeIn">Kültür</span>
                </a>
                <a href="">
                    <span data-animate="fadeIn" data-animate-delay=".2">Bilim</span>
                </a>
                <a href="">
                    <span data-animate="fadeIn" data-animate-delay=".4">Eğlence</span>
                </a>
                <a href="">
                    <span data-animate="fadeIn" data-animate-delay=".6">Yaşam</span>
                </a>
                <a href="">
                    <span data-animate="fadeIn" data-animate-delay=".8">Spor</span>
                </a>
                <a href="">
                    <span data-animate="fadeIn" data-animate-delay="1">Haber</span>
                </a>
            </div>
            <a href="" class="hello">
                <span data-animate="fadeIn">Merhaba</span>
                @auth
                    <span data-animate="fadeIn" data-animate-delay=".4">{{Auth::user()->first_name}},</span>
                    @else,
                    @endauth
                    <span data-animate="fadeIn" data-animate-delay=".5">senin</span>
                    <span data-animate="fadeIn" data-animate-delay="1">için</span>
                    <span data-animate="fadeIn" data-animate-delay="1.4">ne</span>
                    <span data-animate="fadeIn" data-animate-delay="1.8">yapabiliriz?</span>
            </a>
        </div>
    </div>
    <div class="blog-posts-grid">
        <div class="container">
            @foreach($posts['firstPostList'] as $post)
                <div class="post">
                    <div class="bg"
                         style="background-image:url('{{ $post['headerImageUrl'] }}');">
                    </div>
                    <a href="{{ $post['postLink'] }}" class="info">
                        <span class="title">
                            @if($post['new'])
                                <span class="badge badge-pill badge-light">{{$post['new']}}</span>
                            @endif
                            {{$post['title']}}</span>
                        <span class="author">{{ $post['authorFullName'] }}</span>
                        <span class="read"><i
                                    class="fa fa-eye"></i> {{ __('messages.view', ['count' => $post['viewCount']]) }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="blog-cols-header">
        <div class="container">
            <h1>
                Günün Sözü
            </h1>
            <p>
                ya olduğun gibi görün yada göründüğün gibi ama bana farketmez hacı
            </p>
        </div>
    </div>

    <div class="blog-cols-wrapper">
        <div class="container">
            @if(isset($posts['secondPostList']))
                @foreach($posts['secondPostList'] as $post)
                    <a href="{{ $post['postLink'] }}" class="post">
                        <div class="post-wrapper">
                            <div class="post-bg"
                                 style="background-image: url('{{ $post['headerImageUrl'] }}');">
                            </div>
                            <div class="post-intro">
                                <div class="post-title">
                                    {{ $post['title'] }}
                                </div>
                                <div class="post-min-read">
                                    {{ $post['authorFullName'] }}
                                    | {{ __('messages.view', ['count' => $post['viewCount']]) }}
                                </div>
                                <p class="post-description">
                                    {{ $post['description'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(isset($posts['lastPosts']))
                @foreach($posts['lastPosts'] as $post)
                    <div class="col-md-6">
                        <div class="card text-white">
                            <img class="card-img" src="{{ $post['headerImageUrl'] }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title mt-3">{{ $post['title'] }}</h4>
                                <p class="card-text">{{ $post['description'] }}</p>
                                <p class="card-text">  {{ $post['authorFullName'] }}
                                    | {{ __('messages.view', ['count' => $post['viewCount']]) }}</p>
                                <button class="btn-shadow btn-shadow-info mt-3">Yazıya Git</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="index-app-devices my-4 py-4">
        <div class="container">
            <div class="cta my-4 py-4">
                <h3>
                    <span data-animate="fadeIn">Serüvenimize</span>
                    <span data-animate="fadeIn" data-animate-delay=".4">katılmak</span>
                    <span data-animate="fadeIn" data-animate-delay=".9">ister</span>
                    <span data-animate="fadeIn" data-animate-delay="1.4">misin?</span>

                </h3>
                <p>
                    <span data-animate="fadeIn">Senin</span>
                    <span data-animate="fadeIn" data-animate-delay=".2">için</span>
                    <span data-animate="fadeIn" data-animate-delay=".4">her</span>
                    <span data-animate="fadeIn" data-animate-delay=".6">zaman</span>
                    <span data-animate="fadeIn" data-animate-delay=".8">boş</span>
                    <span data-animate="fadeIn" data-animate-delay="1">yerimiz</span>
                    <span data-animate="fadeIn" data-animate-delay="1.2">var.</span>
                </p>
                <a href="#">Şimdi Bize Katıl</a>
            </div>
        </div>
    </div>
@endsection
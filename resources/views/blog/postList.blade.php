@extends('blog.main')
@section('contentBlog')
    <div class="blog-grid-slider">
        <div id="spacial-slider" class="slider-component fxStickIt">
            <ul class="itemwrap">
                <li class="current">
                    <div class="post">
                        <div class="container">
                            <h1>
                                <a href="#">
                                    The designer culture in the world
                                </a>
                            </h1>
                            <div class="bottom">
                                <img src="images/uifaces/10.jpg" class="avatar"/>
                                <span class="category">
                  Featured post
                </span>
                                <span class="date">
                  April 14, 2016
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pic"
                         style="background-image: url('images/unsplash/photo-1422665717225-1a37f226c92a.jpg');">
                    </div>
                </li>
                <li>
                    <div class="post">
                        <div class="container">
                            <h1>
                                <a href="#">
                                    How to create a great team
                                </a>
                            </h1>
                            <div class="bottom">
                                <img src="images/uifaces/11.jpg" class="avatar"/>
                                <span class="category">
                  Featured post
                </span>
                                <span class="date">
                  March 08, 2015
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pic"
                         style="background-image: url('images/unsplash/photo-1466854076813-4aa9ac0fc347.jpg');">
                    </div>
                </li>
                <li>
                    <div class="post">
                        <div class="container">
                            <h1>
                                <a href="#">
                                    Animation Principles on the Web
                                </a>
                            </h1>
                            <div class="bottom">
                                <img src="images/uifaces/12.jpg" class="avatar"/>
                                <span class="category">
                  Featured post
                </span>
                                <span class="date">
                  April 22, 2015
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pic" style="background-image: url('images/unsplash/osjphfgeyeu-koushik-c.jpg');">
                    </div>
                </li>
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
                <a href="#">Kültür</a>
                <a href="#">Bilim</a>
                <a href="#">Eğlence</a>
                <a href="#">Yaşam</a>
                <a href="#">Spor</a>
                <a href="#">Haber</a>
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
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1467659226669-a1360d97be2d.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title"><span class="badge badge-pill badge-light">Yeni</span> How to get the most out of San Francisco</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg" style="background-image:url('images/unsplash/photo-2.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Work on the things you love</span>
                    <span class="author">Ana Beckham</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1472132858735-6313c7962473.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Top 10 reasons to learn design</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1475483768296-6163e08872a1.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">How to travel around the world</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1424873380396-9580028d74db.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Best cultures around the world</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1454942901704-3c44c11b2ad1.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Top 10 places you should go before you die</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1474776918080-edb12cc483de.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Become a professional photographer</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
            <div class="post">
                <div class="bg"
                     style="background-image:url('images/unsplash/photo-1478059425650-ca13d6d422f4.jpg');">
                </div>
                <a href="#" class="info">
                    <span class="title">Get inspired by nature</span>
                    <span class="author">John Williams</span>
                    <span class="read"><i class="fa fa-eye"></i> {{ rand(1,10000) }} kez okundu</span>
                </a>
            </div>
        </div>
    </div>

    <div class="blog-cols-header">
        <div class="container">
            <h1>
                Günün Sözü
            </h1>
            <p>
                ya olduğun gibi görün yada göründüğün gibi ol ama bana farketmez hacı
            </p>
        </div>
    </div>

    <div class="blog-cols-wrapper">
        <div class="container">
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1466854076813-4aa9ac0fc347.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            3 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1467659226669-a1360d97be2d.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            9 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1475483768296-6163e08872a1.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            7 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1478059425650-ca13d6d422f4.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            6 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1478809319988-35cad52fd89c.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            3 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1445282847990-42f666f865e2.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            9 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1428278819486-8f00bd7cdf80.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            5 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1454942901704-3c44c11b2ad1.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            7 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
            <a href="blog-post.html" class="post">
                <div class="post-wrapper">
                    <div class="post-bg"
                         style="background-image: url('images/unsplash/photo-1467703834117-04386e3dadd8.jpg');">
                    </div>
                    <div class="post-intro">
                        <div class="post-title">
                            New landscapes
                        </div>
                        <div class="post-min-read">
                            3 min read
                        </div>
                        <p class="post-description">
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="card text-white">
            <img class="card-img" src="{{asset('images/unsplash/photo-1422558044352-896cd9799885.jpg')}}"
                 alt="Card image">
            <div class="card-img-overlay">
                <h4 class="card-title mt-3">This is a card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer. And we're only using it for testing purposes.</p>
                <p class="card-text">Last updated 3 mins ago</p>
                <button class="btn-shadow btn-shadow-info mt-3">Go somewhere</button>
            </div>
        </div>
    </div>
    <div class="index-app-devices my-4 py-4">
        <div class="container">
            <div class="cta my-4 py-4">
                <h3>
                    Start engaging with your customers and earn more
                </h3>
                <p>
                    Try our free trial for 30 days, no credit card required
                </p>
                <a href="#">Create an account</a>
            </div>
        </div>
    </div>
@endsection
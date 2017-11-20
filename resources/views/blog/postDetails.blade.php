@extends('blog.main')
@section('title' , $post['title'])
@section('contentBlog')
    <div class="blog-post-3-hero" style="background-image: url({{ $post['headerImageUrl'] }});">
        <div class="container">
            <h1 class="customFadeInUp mx-auto">
                {{ $post['title'] }}
            </h1>
        </div>
    </div>

    <div class="blog-post-3">
        <div class="container">
            <div class="blog-post-header">
                <div class="blog-post-author">
                    <img data-trigger="zoomerang" src="{{ $post['authorImageUrl'] }}">
                    <span> <a href="{{ $post['authorLink'] }}">{{ $post['authorFullName'] }}</a> <br>
                    </span>
                </div>
                <div class="blog-post-date">
                    @lang('messages.publishing') <span data-tooltip="{{ $post['publishedDateFull'] }}">
                        {{ $post['publishedDate'] }}
                    </span>
                    @lang('messages.number_of_reading') <span
                            data-tooltip="{{ __('messages.view', ['count' => $post['viewCount']]) }}">
                        {{ $post['viewCount'] }}
                    </span>
                    @lang('messages.comment_count') <span
                            data-tooltip="{{ __('messages.have_comment', ['count' => $post['commentCount']]) }}">
                        {{ $post['commentCount'] }}
                    </span>
                </div>
                <div class="blog-post-share">
                    <a target="_blank" href="https://twitter.com/home?status={{ $post['postLink'] }}">
                        <i class="ion-social-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ $post['postLink'] }}">
                        <i class="ion-social-facebook"></i>
                    </a>
                    <a target="_blank"
                       href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source={{ $post['postLink'] }}">
                        <i class="ion-social-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://plus.google.com/share?url={{ $post['postLink'] }}">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </div>
            </div>

            <div class="blog-post-content">
                {!! $post['content']  !!}
                <div class="blog-post-quote-wrapper">
                    <div class="quote">
                        Spacial is the perfect solution for web developers and designers. You can get an awesome website
                        for your best projects and clients, and also get support!
                    </div>
                    <div class="author">
                        Jessica Jones, Founder/CEO
                    </div>
                </div>
                <div class="blog-post-side-image clearfix">
                    <img data-trigger="zoomerang" src="images/unsplash/photo-1478059425650-ca13d6d422f4.jpg"
                         class="img-responsive">
                    <p>
                        Millions of people use this theme. Each of them use it differently. So we created fifteen
                        incredible new designs, some in collaboration with a few of the world's most influential and
                        carismatic people ever known. Pick the pages that describe your business the best.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-post-3-footer">
        <div class="container">
            <div class="row">
                @if(count($post['randomPostList']) > 1)
                    <div class="col-sm-6">
                        <div class="story story--left">
                            <h3>
                                {{ $post['randomPostList'][0]['title'] }}
                            </h3>
                            <p>
                                {{ $post['randomPostList'][0]['description'] }}
                            </p>
                            <a href="{{ $post['randomPostList'][0]['postLink'] }}">
                                <i class="ion-ios-arrow-thin-left"></i>
                                Previous story
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="story story--right">
                            <h3>
                                {{ $post['randomPostList'][1]['title'] }}
                            </h3>
                            <p>
                                {{ $post['randomPostList'][1]['description'] }}
                            </p>
                            <a href="{{ $post['randomPostList'][1]['postLink'] }}">
                                Next story
                                <i class="ion-ios-arrow-thin-right"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>
@endsection

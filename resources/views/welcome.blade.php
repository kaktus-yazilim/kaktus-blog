@extends('layouts.app')
@section('content')
    @include('layouts.business')
    <div class="business-hero">
        <div class="container">
            <h2 class="customFadeInUp">
                Taze Mürekkep, dinamizm temelleri ile gönüllü bireylerin oluşturduğu bir organizasyondur
            </h2>
            <p class="customFadeInUp">
                Farklı konuları içerisinde barındıran bu organizasyonun katılımcıları, öğrendiklerini ve tecrübelerini
                düzenli olarak yazıya dökmektedir.
                <br>
                Bu beraberliğe katılmak için blog'umuzu ziyaret edebilirsiniz.
            </p>
            <div class="cta">
                <a href="#" class="btn btn-primary btn-lg">
                    Blog'a Git
                </a>
                <a class="btn-outline popup-media" href="https://vimeo.com/155404383">
                    <i class="fa fa-play"></i>
                    Bize Katıl
                </a>
            </div>
        </div>
    </div>
    <div class="index-intro">
        <div class="container">
            <header>
                <h3>Taze Mürekkep Nedir?</h3>
                <p>
                    Taze Mürekkep, dinamizm temelleri ile gönüllü bireylerin oluşturduğu bir organizasyondur.
                </p>
            </header>
            <section class="row text-center">
                <div class="col-md-6">
                    <h4>Vizyonumuz</h4>
                    <p>
                        Spacial is the perfect solution for web developers and designers. You can get an awesome website for your best projects and clients, and also get support for any questions and matters that you might have.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Misyonumuz</h4>
                    <p>
                        Spacial is designed to make showing off your best projects extremely fast and simple. There are many ways to configure. Just go to the source, make changes and the rest is taken care automatically.
                    </p>
                </div>
            </section>
        </div>
    </div>
    <div class="spacial-features  text-center" data-scroll>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header">
                        <h2>Neler Yapıyoruz?</h2>
                        <p>
                            Taze Mürekkep olarak...
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature">
                        <i class="fa fa-book fa-5x"></i>
                        <h3>
                            Blog
                        </h3>
                        <p>
                            Spacial is the perfect solution for web developers and designers. You can get an awesome
                            website
                            for your best projects and clients, and also get great support.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <i class="fa fa-graduation-cap fa-5x"></i>
                        <h3>
                            Akademi
                        </h3>
                        <p>
                            Spacial is designed to make showing off your best projects extremely fast and simple. There
                            are
                            many ways to configure. Just go to the source, make changes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature">
                        <i class="fa fa-flag fa-5x"></i>
                        <h3>
                            Üniversite Kulüp Sponsorluğu

                            <span class="badge-new">Yeni</span>
                        </h3>
                        <p>
                            Spacial has both a web app and an android app to make your website easy and always
                            available. It
                            offers you all the designs in collaboration with smart people.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <i class="fa fa-code fa-5x"></i>
                        <h3>
                            Yazılım Ekibi
                        </h3>
                        <p>
                            Spacial is designed to make showing off your best projects extremely fast and simple. There
                            are
                            many ways to configure, just go to the source and configure.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="index-features" data-scroll>
        <div class="container">
            <header>
                <h3>Complete control over your website</h3>
                <p>
                    Spacial is an advanced theme solution for desktop, tablet, and mobile devices. It works in all
                    browsers
                    and your clients can pay instantly, to improve their experience at all times anywhere they go.
                </p>
            </header>
            <section class="features">
                <div class="row">
                    <div class="col-md-6 feature">
                        <img src="{{asset('images/icons/features-icon-ok.png')}}" class="icon"/>
                        <section>
                            <h4>
                                Secure platform
                            </h4>
                            <p>
                                Spacial is the perfect solution for web developers and designers. You can get an awesome
                                website for your best projects and clients.
                            </p>
                        </section>
                    </div>
                    <div class="col-md-6 feature">
                        <img src="{{asset('images/icons/features-icon-canvas.png')}}" class="icon"/>
                        <section>
                            <h4>
                                Looks great anywhere
                            </h4>
                            <p>
                                Pick the pages that describe your business the best and improve your users experience.
                                Track
                                your progress and learn along the way.
                            </p>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 feature">
                        <img src="{{asset('images/icons/features-icon-world.png')}}" class="icon"/>
                        <section>
                            <h4>
                                Sell all over the world
                            </h4>
                            <p>
                                Use new components that come included, as shown in the theme docs you don't need to
                                write
                                any code to get a website up and running.
                            </p>
                        </section>
                    </div>
                    <div class="col-md-6 feature">
                        <img src="{{asset('images/icons/features-icon-compass.png')}}" class="icon"/>
                        <section>
                            <h4>
                                Great design great outcome
                            </h4>
                            <p>
                                Spacial is designed to make showing off your best projects extremely fast and simple.
                                There
                                are many ways to configure, just go to the source.
                            </p>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="index-devices" data-scroll>
        <section class="clearfix">
            <img src="{{asset('images/devices/devices-4.png')}}" class="devices"/>

            <h4>Looks great in any device</h4>
            <p>
                Spacial has both a web app and an android app to make your website easy and always available. It offers
                you
                all the designs in collaboration with some smart people. Your projects will look great everywhere you
                go.
                Use new components that come included!
            </p>
            <p>
                Spacial is an advanced theme solution for desktop, tablet, and mobile devices. It works in all browsers
                and
                your clients can pay instantly, to improve their experience at all times anywhere they go.
            </p>
            <div class="icons">
                <i class="ion-monitor"></i>
                <i class="ion-ipad"></i>
                <i class="ion-iphone"></i>
            </div>
        </section>
    </div>

    <div class="business-single-client" data-scroll>
        <div class="quote-wrapper">
            <img src="{{asset('images/customers/logo-customer-7-w.png')}}" class="logo">
            <p>
                "Focus on creating and growing your projects and websites, and we‘ll take care of spinning up new
                designs
                for your users and making sure they’re great. Work with all types of customers right out of the box
                while
                still getting great results in your environment."
            </p>
            <div class="author">
                John Smith, Product Designer
            </div>
        </div>
    </div>

    <div class="index-clients">
        <div class="container">
            <header>
                <h4>Used and trusted by these guys</h4>
            </header>
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/google.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/dropbox.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/fb.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/twitter.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/instagram.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/apple.jpg')}}">
                </div>
                <div class="col-12 col-md-3 col-lg">
                    <img class="img-fluid mb-4" src="{{asset('images/logos/stripe.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.blogFooter')
@endsection
@extends('layouts.app')
@section('content')
    @include('layouts.blogHeader')
    <div class="business-hero">
        <div class="container">
            <h2 class="customFadeInUp">
                Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
            </h2>
            <p class="customFadeInUp">
                Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir.
                <br>
                Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha
                dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.
            </p>

            <div class="actions customFadeInUp">
                <a href="#" class="btn-shadow btn-shadow-lg btn-shadow-primary">Yazıları Gör</a>
            </div>
        </div>
    </div>

    <div class="spacial-features" data-scroll>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header">
                        <h2>Complete control over your company</h2>
                        <p>
                            Spacial has both a web app and an android app to make your website easy and always
                            available.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature">
                        <img src="{{asset('images/icons/spacial-devices.png')}}">
                        <h3>
                            Have conversations with your friends
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
                        <img src="{{asset('images/icons/spacial-download.png')}}">
                        <h3>
                            Keep your information private & secure
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
                        <img src="{{asset('images/icons/spacial-location.png')}}">
                        <h3>
                            Explore new possibilities every day

                            <span class="badge-new">New</span>
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
                        <img src="{{asset('images/icons/spacial-settings.png')}}">
                        <h3>
                            Enjoy a whole new set of options
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

    <footer class="footer-big-menu" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta text-center">
                        <h1 class="cta-title">
                            Getting started is easy. Create your account now.
                        </h1>
                        <a class="btn-shadow btn-shadow-info mr-md-1" href="#">
                            30 day free trial
                        </a>
                        <a class="btn-outline ml-md-1" href="#">
                            Explore features
                        </a>
                    </div>
                </div>
            </div>
            <div class="row menu">
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Products</h3>
                    <a class="menu-link" href="#">Spacial Enterprise</a>
                    <a class="menu-link" href="#">Spacial Healthcare</a>
                    <a class="menu-link" href="#">Spacial Security</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Features</h3>
                    <a class="menu-link" href="#">Employees</a>
                    <a class="menu-link" href="#">Integrations</a>
                    <a class="menu-link" href="#">Subscriptions</a>
                    <a class="menu-link" href="#">Online payments</a>
                    <a class="menu-link" href="#">Antifraud system</a>
                    <a class="menu-link" href="#">Pricing</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Resources</h3>
                    <a class="menu-link" href="#">Support center</a>
                    <a class="menu-link" href="#">Documentation</a>
                    <a class="menu-link" href="#">API reference</a>
                    <a class="menu-link" href="#">Customer stories</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">About</h3>
                    <a class="menu-link" href="#">What we believe</a>
                    <a class="menu-link" href="#">Careers</a>
                    <a class="menu-link" href="#">Partners</a>
                    <a class="menu-link" href="#">Press kit</a>
                    <a class="menu-link" href="#">Media</a>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h3 class="menu-title">Get in touch</h3>
                    <a class="menu-link" href="#">support@spacial.com</a>
                    <a class="menu-link" href="#">(123) 455-1123</a>
                    <a class="menu-link" href="#">9am - 6pm CST</a>
                </div>
                <div class="col-md-3 col-lg-2 text-center">
                    <a class="social-link" href="#">
                        <i class="ion-social-twitter"></i>
                    </a>
                    <a class="social-link" href="#">
                        <i class="ion-social-facebook"></i>
                    </a>
                    <a class="social-link" href="#">
                        <i class="ion-social-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <span class="bottom">© 2019 Spacial Inc. All rights reserved. <a href="#">Terms of use</a></span>
    </footer>

@endsection
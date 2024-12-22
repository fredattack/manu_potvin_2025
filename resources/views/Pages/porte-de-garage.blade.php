@extends('Layouts.app')

@section('title')
    Portes de Garage
@endsection

@section('content')
    @php
        $category = \App\Enums\Categories::PORTE_DE_GARAGE->value;

    @endphp

    @include('components.header')
    <!-- start breadcrumb area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu">
            <i class="far fa-times"></i>
        </button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo"
                        src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo"
                        src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo"
                        src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-4" href="{{ route('home') }}"><img class="logo"
                        src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">

                @include('Frontend.Includes.mobileMenu')


                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>

    <!-- banner area start three -->
    <div class="rts-banner-area banner-three banner-four banner-five" style="background-image: url({{asset('/assets/images/custom/default/portes-de-garage/porte_garage_main.jpeg')}}); max-height: 90vh;width: auto ;object-fit: contain;">
        <div class=" bg_banner-three bg_banner-four bg_image rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-three-inner banner-four-inner banner-five-inner">
                            <div class="banner-title">
                                <span class="subtitle-banner"><strong>DES PORTES DE GARAGE </strong> ADAPTÉES À VOS BESOINS</span>
                                <!-- type headline start-->
                                <h1 class="title">
                                    Optimisez votre
                                    <br>
                                    <div class="changebox">
                                        <span>esthétique</span>
                                        <br>
                                        <span>confort</span><br>
                                        <span>performance énergétique</span>
                                        <br>
                                        <span>sécurité</span><br>
                                    </div>
                                    avec nos
                                    <br> portes de garage...
                                </h1>
                            </div>
                            <p class="disc" style="color: var(--color-primary-alta)">
                                Offrez à votre garage une porte performante, sécurisée et esthétique,<br>
                                conçue pour répondre à vos exigences et attentes
                            </p>
                            <div class="button-group">
                                <a href="{{ route('contactPage') }}" class="rts-btn btn-primary-3 btn-primary-4">Devis gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end three -->

    <!-- leading business solution area -->
    <div class="rts-business-solution rts-business-solution5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 first-child">
                    <div class="rts-business-solution-right">
                        <div class="title-area">
                            <span class="sub">
                                More About Us
                            </span>
                            <h2 class="title">
                                Voici votre solution parfaite pour portes de garage
                            </h2>
                        </div>
                        <div class="content-area">
                            <p class="disc">
                                Nos portes de garage combinent sécurité, design et performance. Que ce soit pour votre maison ou votre entreprise, nous avons la solution idéale pour vous.
                            </p>
                            <!-- single business solution -->
                            <div class="single-business-solution-2">
                                <div class="content">
                                    <h6 class="title">
                                        Avec plus de 20 ans d'expérience, nous proposons des portes de garage robustes, esthétiques et adaptées à tous vos besoins.
                                    </h6>
                                </div>
                            </div>
                            <!-- single business solution end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- business solution left -->
                    <div class="rts-business-solution-left">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg') }}" alt="">
                        </div>
                    </div>
                    <!-- business solution left End -->
                </div>
            </div>
        </div>
    </div>
    <!-- leading business solution area End -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Une envie, un projet ? Un rêve à réaliser ...</h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Contactez nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- business goal area -->
    <div class="rts-business-goal rts-business-goal5 mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="title-area">
                        <span class="sub">
                            Manu Potvin
                        </span>
                        <h2 class="title">
                            L'expertise en portes de garage
                            <br> pour un confort quotidien
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <!-- business goal left -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 first-child">
                    <ul class="content-box first">
                        <li class="content left">
                            <h5 class="main-title">Installation</h5>
                            <p class="desc">Installation rapide et efficace de portes de garage, adaptée à vos besoins et à votre espace.
                            </p>
                        </li>
                        <li class="content left one">
                            <h5 class="main-title">Solutions sur mesure</h5>
                            <p class="desc">Des portes de garage conçues pour offrir à la fois sécurité et esthétique, personnalisées selon vos préférences.
                            </p>
                        </li>
                        <li class="content left">
                            <h5 class="main-title">Maintenance</h5>
                            <p class="desc">Service de maintenance pour garantir la longévité et la performance de vos portes de garage.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="business-goal-one">
                        <img src="{{ asset('assets/images/custom/default/portes-de-garage/porte_garage_second.jpeg') }}" alt="Business_Goal">
                        <div class="shape">
                            <img src="{{ asset('assets/images/business-goal/icon/line.png') }}"
                                    alt="">
                        </div>
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="content-box last">
                        <li class="content right">
                            <h5 class="main-title">Réparation</h5>
                            <p class="desc">Réparation rapide et professionnelle pour remettre vos portes en parfait état de fonctionnement.
                            </p>
                        </li>
                        <li class="content right two">
                            <h5 class="main-title">Produits de qualité</h5>
                            <p class="desc">Vente de portes de garage robustes et performantes, pour tous les types de garages.
                            </p>
                        </li>
                        <li class="content right">
                            <h5 class="main-title">Conseils personnalisés</h5>
                            <p class="desc">Des experts à votre service pour vous conseiller sur le choix de la porte de garage idéale selon vos besoins.
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- testimonials area start -->
    @include('components.home.testimonials')
    <!-- testimonials area end -->
            <!-- business case start -->
    <div class="rts-business-case rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-area text-center business-case business-case5">
                    <span>Manu Potvin</span>
                    <h2 class="title">Nos réalisations</h2>
                </div>
            </div>
        </div>
        <div class="container-cusiness-case-h2 mt--50">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiperh2_Business_Cases">
                        <div class="swiper-wrapper">
                            @foreach(    \App\Models\Realisation::whereJsonContains('category',$category)->get() as $realisation)
                                <div class="swiper-slide">
                                    <!-- single business case -->
                                    <div class="rts-business-case-s-2">
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="thumbnail"  target="_blank">
                                            {!! $realisation->image !!}
                                        </a>
                                        <div class="inner">
                                            <a href="{{  route('pages.details',['realisation'=>$realisation]) }}"  target="_blank">
                                                <h5 class="title">
                                                    {{$realisation->title}}
                                                </h5>
                                            </a>
                                            <span>{{$realisation->description}}</span>
                                        </div>
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="over_link"  target="_blank"></a>
                                    </div>
                                    <!-- single business case End -->
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business case End -->


    <!-- start footer area -->
    @include('components.footer')
    <!-- ENd footer Area -->
@endsection

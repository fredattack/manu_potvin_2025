@extends('Frontend.Layouts.app')

@section('title')
    Home Seven (Business Consultant)
@endsection


@section('content')
 <!-- start header area -->
 <header class="header--sticky header-one six">
    <div class="header-top header-top-one bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="left">
                        <p class="left-text">Are you ready to grow up your business?</p>
                    </div>
                </div>
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="right">
                        <div class="mail">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@example.com</a>
                        </div>
                        <div class="call">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">
                                Hoteline: +210-9856988
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="thumbnail">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz-logo">
                        </a>
                    </div>
                </div>
                <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="main-header">

                        @include('Frontend.Includes.mainList')


                        <div class="button-area">
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                            <button><i class="far fa-search"></i></button>
                                        </div>
                                        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                            <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                                <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header area -->

<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
        <a class="logo-2" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
        <a class="logo-3" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
        <a class="logo-4" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
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
<!-- ENd Header Area -->

<!-- rts banner area start -->
<div class="rts-banner-area banner-human-bg rts-section-gap">
    <div class="shape">
        <img src="{{ asset('assets/images/banner/shape/h7-banner.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- banner area inner six -->
                <div class="banner-inner-six">
                    <h1 class="title mb--30">
                        <span class="pre">Let’s create</span> <br>
                        your <span class="primary">success.</span>
                    </h1>
                    <p class="disc">
                        HR consulting expertise that helps your business thrive.
                    </p>
                    <a href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven">Let’s Work Together</a>
                </div>
                <!-- banner area inner six end -->
            </div>
        </div>
    </div>
</div>
<!-- rts banner area end -->

<!-- rts service area start -->
<div class="rts-service-area home-seven rts-section-gap">
    <div class="shape-business-service">
        <img src="{{ asset('assets/images/service/icon/shape-1.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-with-btn-home-6">

                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Together we can envision <br>
                            your business
                        </h2>
                    </div>
                    <a href="#" class="rts-btn btn-primary-5">View All Services <i
                            class="fal fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--80">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        Team Leadership
                    </h5>
                    <p class="disc">
                        Dictumst enim tristique conubia parturient ornare vivamus euismod pulvinar habitasse
                        porttitor aptent dignissim.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/23.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        People Cohesion
                    </h5>
                    <p class="disc">
                        Dictumst enim tristique conubia parturient ornare vivamus euismod pulvinar habitasse
                        porttitor aptent dignissim.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/24.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        Team Build Up
                    </h5>
                    <p class="disc">
                        Dictumst enim tristique conubia parturient ornare vivamus euismod pulvinar habitasse
                        porttitor aptent dignissim.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service area end -->

<div class="bg-shape-wrapper-main">
    <!-- rts about area start -->
    <div class="rts-about-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">More ABOUT US</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Here is your perfect <br>
                            Marketing Solution
                        </h2>
                    </div>
                    <div class="about-content-inner-style-six">
                        <p class="disc">
                            Platea vehicula rutrum curae magna tacitiacut msuada inceptos phasellus massa, eget ultres
                            tempor lacinia dictumst tincidunt leo mollis luctus varius gravida eleifend cursus litora
                        </p>
                        <div class="item-check-inner">
                            <div class="single-col">
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    24/7 Call Services Avilable
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Great Skilled Consultant
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Expert Team Members
                                </div>
                            </div>
                            <div class="single-col">
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    How to improve business

                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Business is the best plan
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Services we provide
                                </div>
                            </div>
                        </div>
                        <div class="contact-inner-about">
                            <div class="single-left">
                                <img src="{{ asset('assets/images/about/main/user/04.png') }}" alt="user">
                                <div class="details-area">
                                    <h6 class="title">
                                        Adrew David
                                    </h6>
                                    <span class="designation">
                                        CEO & Founder
                                    </span>
                                </div>
                            </div>
                            <div class="single-right">
                                <img src="{{ asset('assets/images/about/main/user/05.png') }}" alt="call">
                                <div class="details-area">
                                    <span>Call us anytime</span>
                                    <a href="#" class="number">
                                        +256 214582146
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-about-six">
                        <img src="{{ asset('assets/images/about/02.png') }}" alt="about-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <!-- client rationg area start -->
    <div class="rts-client-rating rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="swiper clients-review-7">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="single-testimonials-styele-clients-7 text-center">
                                    <div class="logo">
                                        <img src="{{ asset('assets/images/testimonials/icon/logo-04.png') }}" alt="">
                                    </div>
                                    <div class="inner">
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-styele-clients-7 text-center">
                                    <div class="logo">
                                        <img src="{{ asset('assets/images/testimonials/icon/logo-04.png') }}" alt="">
                                    </div>
                                    <div class="inner">
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-styele-clients-7 text-center">
                                    <div class="logo">
                                        <img src="{{ asset('assets/images/testimonials/icon/logo-04.png') }}" alt="">
                                    </div>
                                    <div class="inner">
                                        <p class="disc">
                                            4.88 out of 5 star from 1,645 reviews
                                        </p>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- client rationg area end -->

    <!-- working process start -->
    <div class="rts-working-process rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-style-six text-center">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Work Process</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Why Choose us?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--20">
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Create an account
                        </h5>
                        <p class="disc">
                            Dictum stem tristique conubia arturie ornare vivamus euismod
                        </p>
                        <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/23.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Consult with us
                        </h5>
                        <p class="disc">
                            Dictum stem tristique conubia arturie ornare vivamus euismod
                        </p>
                        <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/24.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Fill up the form
                        </h5>
                        <p class="disc">
                            Dictum stem tristique conubia arturie ornare vivamus euismod
                        </p>
                        <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Get Started!
                        </h5>
                        <p class="disc">
                            Dictum stem tristique conubia arturie ornare vivamus euismod
                        </p>
                        <a href="#" class="rts-btn btn-primary-5 rounded-2"><i class="fal fa-arrow-right"></i></a>
                    </div>
                    <!-- single-service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- working process end -->

    <!-- start vedio area start -->
    <div class="rts-vedio-area-home-6 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thumbnail-image-gallery">
                        <img src="{{ asset('assets/images/gallery/01.jpg') }}" alt="thumbnail-image">
                        <a href="#" class="vedio-icone">
                            <span id="play-video" class="video-play-button">
                                <img src="{{ asset('assets/images/about/shape/play-btn.png') }}" alt="Play btn">
                                <span></span>
                            </span>
                            <div id="video-overlay" class="video-overlay">
                                <span class="video-overlay-close">×</span>
                            </div>
                        </a>
                        <div class="vedio-title-area">
                            <h2 class="title">
                                Watch Video Here
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape-vedio-section">
            <img src="{{ asset('assets/images/gallery/bg-vedio.png') }}" alt="bg">
        </div>
    </div>
    <!-- start vedio area end -->
</div>

<!-- team area start -->
<div class="rts-team-area-style-six rts-section-gap">
    <div class="team-bg-image-style-six">
        <img src="{{ asset('assets/images/team/bg-02.png') }}" alt="bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-style-six text-center">
                    <div class="pre-title">
                        <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        <span class="pre">Team Members</span>
                        <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                    </div>
                    <h2 class="title color-white">
                        Finbiz Professionals
                    </h2>
                </div>

            </div>
        </div>
        <div class="row mt--30 g-5">
            <!-- single team area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single team start -->
                <div class="single-team-style-six">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="social-team">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><img src="{{ asset('assets/images/team/tm/14.png') }}" alt="team-image"></a>
                            <div class="content-inner">
                                <div class="text">
                                    <h5 class="title">
                                        Andreas Menor
                                    </h5>
                                    <span class="designation">
                                        Sr. Manager
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- single team end -->
            <!-- single team area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single team start -->
                <div class="single-team-style-six">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="social-team">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><img src="{{ asset('assets/images/team/tm/15.png') }}" alt="team-image"></a>
                            <div class="content-inner">
                                <div class="text">
                                    <h5 class="title">
                                        Andreas Menor
                                    </h5>
                                    <span class="designation">
                                        Sr. Manager
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- single team end -->
            <!-- single team area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single team start -->
                <div class="single-team-style-six">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="social-team">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><img src="{{ asset('assets/images/team/tm/16.png') }}" alt="team-image"></a>
                            <div class="content-inner">
                                <div class="text">
                                    <h5 class="title">
                                        Andreas Menor
                                    </h5>
                                    <span class="designation">
                                        Sr. Manager
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- single team end -->
            <!-- single team area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single team start -->
                <div class="single-team-style-six">
                    <div class="inner">
                        <div class="thumbnail">
                            <div class="social-team">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><img src="{{ asset('assets/images/team/tm/17.png') }}" alt="team-image"></a>
                            <div class="content-inner">
                                <div class="text">
                                    <h5 class="title">
                                        Andreas Menor
                                    </h5>
                                    <span class="designation">
                                        Sr. Manager
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- single team end -->
        </div>
    </div>
</div>
<!-- team area end -->

<!-- rts portfolio area start -->
<div class="rts-portfolio-area mt-decress rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-with-btn-home-6 portfolio-area">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Together we can envision <br>
                            your business
                        </h2>
                    </div>
                    <div class="tab-buttons-portfolio">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Financial </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Human </button>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt--70">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-5">
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row g-5">
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row g-5">
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts portfolio area end -->

<!-- start call to action area -->
<div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-two-wrapper">
                    <div class="title-area">
                        <h3 class="title">Let’s discuss about how we can help <br>
                            make your insurance better</h3>
                    </div>
                    <a class="rts-btn btn-primary-5" href="{{ route('contactPage') }}">Lets Work Together</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end call to action area -->

<div class="bg-shape-wrapper-two">
    <!-- customers testimonials start -->
    <div class="rts-testimonials-6 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-style-six text-center">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Customer Testimonials
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">

                <div class="col-lg-12">
                    <div class="swiper clients-review-testimonials-7">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonials-7-style">
                                    <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                                    <div class="body">
                                        <h5 class="title">
                                            The quick settle tips
                                        </h5>
                                        <p class="disc">
                                            “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                            aptent sem nunc a conubia”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="name-area">
                                            <a href="#">
                                                <h6 class="title">
                                                    Andrew Smith
                                                </h6>
                                            </a>
                                            <span>Zoko Author</span>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-7-style">
                                    <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                                    <div class="body">
                                        <h5 class="title">
                                            The quick settle tips
                                        </h5>
                                        <p class="disc">
                                            “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                            aptent sem nunc a conubia”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="name-area">
                                            <a href="#">
                                                <h6 class="title">
                                                    Andrew Smith
                                                </h6>
                                            </a>
                                            <span>Zoko Author</span>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-7-style">
                                    <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                                    <div class="body">
                                        <h5 class="title">
                                            The quick settle tips
                                        </h5>
                                        <p class="disc">
                                            “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                            aptent sem nunc a conubia”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="name-area">
                                            <a href="#">
                                                <h6 class="title">
                                                    Andrew Smith
                                                </h6>
                                            </a>
                                            <span>Zoko Author</span>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-7-style">
                                    <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                                    <div class="body">
                                        <h5 class="title">
                                            The quick settle tips
                                        </h5>
                                        <p class="disc">
                                            “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                            aptent sem nunc a conubia”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="name-area">
                                            <a href="#">
                                                <h6 class="title">
                                                    Andrew Smith
                                                </h6>
                                            </a>
                                            <span>Zoko Author</span>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4">
                    <div class="testimonials-7-style">
                        <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                        <div class="body">
                            <h5 class="title">
                                The quick settle tips
                            </h5>
                            <p class="disc">
                                “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                aptent sem nunc a conubia”
                            </p>
                        </div>
                        <div class="footer">
                            <div class="name-area">
                                <a href="#">
                                    <h6 class="title">
                                        Andrew Smith
                                    </h6>
                                </a>
                                <span>Zoko Author</span>
                            </div>
                            <div class="stars-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-7-style">
                        <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                        <div class="body">
                            <h5 class="title">
                                The quick settle tips
                            </h5>
                            <p class="disc">
                                “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                aptent sem nunc a conubia”
                            </p>
                        </div>
                        <div class="footer">
                            <div class="name-area">
                                <a href="#">
                                    <h6 class="title">
                                        Andrew Smith
                                    </h6>
                                </a>
                                <span>Zoko Author</span>
                            </div>
                            <div class="stars-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-7-style">
                        <a class="thumb" href="#"><img src="{{ asset('assets/images/testimonials/08.png') }}" alt="image"></a>
                        <div class="body">
                            <h5 class="title">
                                The quick settle tips
                            </h5>
                            <p class="disc">
                                “Itae varius intger justo neque massa facisi orci, lobortis rutrum dictumst morbi metus
                                aptent sem nunc a conubia”
                            </p>
                        </div>
                        <div class="footer">
                            <div class="name-area">
                                <a href="#">
                                    <h6 class="title">
                                        Andrew Smith
                                    </h6>
                                </a>
                                <span>Zoko Author</span>
                            </div>
                            <div class="stars-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- customers testimonials end -->

    <!-- business progress area start -->
    <div class="business-progress-area rts-section-gapBottom">
        <div class="box">
            <img src="{{ asset('assets/images/business-goal/icon/box.png') }}" alt="box">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumbnail-progress-7">
                        <img src="{{ asset('assets/images/business-goal/05.png') }}" alt="progress">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            We’re Solve Revolutionary for your Company
                        </h2>
                    </div>
                    <div class="inner-goal-progress-7">
                        <p class="disc">
                            Vehicula euismod ante dis ullamcorper quam orci facilisis, condimentum cursus mattis
                            tincidunt vitae porta litora, dui ridiculus enim lacinia blandit curabitur. Dui dapibus
                            praesent magna tempor metus facilisis proin imperdiet
                        </p>
                        <div class="row mb--50 g-5">
                            <div class="col-lg-6">
                                <div class="left-business-goal">
                                    <div class="left">
                                        <h4 class="title">
                                            98%
                                        </h4>
                                        <p class="dsic">
                                            Company Growth
                                        </p>
                                    </div>
                                    <div class="right">
                                        <img src="{{ asset('assets/images/business-goal/icon/05.svg') }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="left-business-goal">
                                    <div class="left">
                                        <h4 class="title">
                                            98%
                                        </h4>
                                        <p class="dsic">
                                            Company Growth
                                        </p>
                                    </div>
                                    <div class="right">
                                        <img src="{{ asset('assets/images/business-goal/icon/05.svg') }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="rts-btn btn-primary-5">Let’s Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business progress area end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-style-six text-center">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/banner/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Latest Blog Posts
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--10 g-5">
                <div class="col-lg-4">
                    <!-- single blog area start -->
                    <div class="rts-blog-area-style-seven">
                        <div class="thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/blog/14.png') }}" alt="blog-area"></a>
                            <div class="badge">
                                <span>25. 05. 2023</span>
                            </div>
                        </div>
                        <div class="content-inner">
                            <div class="top-blog">
                                <span class="main">Business Solution</span>
                                <span> / by David Dolean</span>
                            </div>
                            <a class="title" href="#">
                                <h5 class="title">
                                    The quick settle tips of the
                                    new ages exist
                                </h5>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4">
                    <!-- single blog area start -->
                    <div class="rts-blog-area-style-seven">
                        <div class="thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/blog/15.png') }}" alt="blog-area"></a>
                            <div class="badge">
                                <span>25. 05. 2023</span>
                            </div>
                        </div>
                        <div class="content-inner">
                            <div class="top-blog">
                                <span class="main">Business Solution</span>
                                <span> / by David Dolean</span>
                            </div>
                            <a class="title" href="#">
                                <h5 class="title">
                                    The quick settle tips of the
                                    new ages exist
                                </h5>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4">
                    <!-- single blog area start -->
                    <div class="rts-blog-area-style-seven">
                        <div class="thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/blog/16.png') }}" alt="blog-area"></a>
                            <div class="badge">
                                <span>25. 05. 2023</span>
                            </div>
                        </div>
                        <div class="content-inner">
                            <div class="top-blog">
                                <span class="main">Business Solution</span>
                                <span> / by David Dolean</span>
                            </div>
                            <a class="title" href="#">
                                <h5 class="title">
                                    The quick settle tips of the
                                    new ages exist
                                </h5>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area edn -->
</div>

<!-- start footer area -->
<!-- rts footer area start -->
<div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
    <div class="container bg-shape-f1">
        <!-- footer call to action area -->
        <div class="row">
            <div class="col-12">
                <div class="rts-cta-wrapper">
                    <div class="background-cta">
                        <div class="row">
                            <!-- cta-left -->
                            <div class="col-lg-6">
                                <div class="cta-left-wrapepr">
                                    <p class="cta-disc">
                                        Latest Business Ideas
                                    </p>
                                    <h3 class="title">Sign Up Newsletter</h3>
                                </div>
                            </div>
                            <!-- cta left end -->
                            <div class="col-lg-6">
                                <!-- cta right -->
                                <form class="cta-input-arae">
                                    <input type="email" name="email" placeholder="Enter Email Address" required>
                                    <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                </form>
                                <!-- cta right End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer call to action area End -->
        <!-- rts footer area -->
        <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="footer-one-single-wized seven">
                    <div class="wized-title">
                        <h5 class="title">Quick Links</h5>
                        <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                    </div>
                    <div class="quick-link-inner">
                        <ul class="links">
                            <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Pricing & Plans</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                        </ul>
                        <ul class="links margin-left-70">
                            <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer mid area -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="footer-one-single-wized mid-bg">
                    <div class="wized-title">
                        <h5 class="title">Opening Hours</h5>
                        <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                    </div>
                    <div class="opening-time-inner">
                        <div class="single-opening">
                            <p class="day">Week Days</p>
                            <p class="time">09.00 - 24:00</p>
                        </div>
                        <div class="single-opening">
                            <p class="day">Saturday</p>
                            <p class="time">08:00 - 03.00</p>
                        </div>
                        <div class="single-opening mb--30 mb_sm--10">
                            <p class="day">Sunday</p>
                            <p class="time">Day Off</p>
                        </div>
                        <a href="#" class="rts-btn btn-primary contact-us">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- footer mid area end -->

            <!-- footer end area post -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="footer-one-single-wized seven margin-left-65">
                    <div class="wized-title">
                        <h5 class="title">Popular Updates</h5>
                        <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                    </div>
                    <div class="post-wrapper">
                        <!-- single post -->
                        <div class="single-footer-post mb--30">
                            <div class="left-thumbnail">
                                <img src="{{ asset('assets/images/footer/post/01.png') }}" alt="finbiz_business-post">
                            </div>
                            <div class="post-right">
                                <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h6 class="title">Best Business Ideas For
                                        Getting Solution</h6>
                                </a>
                                <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single post End -->
                        <!-- single post -->
                        <div class="single-footer-post">
                            <div class="left-thumbnail">
                                <img src="{{ asset('assets/images/footer/post/02.png') }}" alt="finbiz_business-post">
                            </div>
                            <div class="post-right">
                                <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h6 class="title">Best Business Ideas For
                                        Getting Solution</h6>
                                </a>
                                <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single post End -->
                    </div>
                </div>
            </div>
            <!-- footer end area post end-->
        </div>
        <!-- rts footer area End -->
    </div>
    <!-- copyright area start -->
    <div class="rts-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p>FINBIZ - Copyright 2022. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright area end -->
</div>
<!-- rts footer area end -->
<!-- ENd footer Area -->

@endsection

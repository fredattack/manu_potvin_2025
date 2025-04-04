@extends('Frontend.Layouts.appSecond')

@section('title')
    Home Thirteen (Business Consultant)
@endsection

@section('content')

<body class="thirteen-body onepage">

    <div class="header-thirteen header--sticky">
        <div class="header-main-one bg-white header-main-five six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="thumbnail">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo-10.svg') }}" alt="finbiz-logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-6">
                        <div class="main-header main-header-four main-header-five main-header-six seven">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#service">Services</a>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#blog">Blog</a>
                                    </li>
                                    <li class="has-droupdown">
                                        <a class="nav-link" href="#">Elements</a>
                                    </li>
                                    <li><a class="nav-item" href="#contactse">Contact</a></li>
                                </ul>
                            </nav>
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
                                <a href="#" class="rts-btn btn-primary btn-primary-4 six ml--20 ml_sm--5 header-one-btn quote-btn">Book a Meeting</a>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta btn-primary-alta-four ml--20 ml_sm--5">
                                    <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                                    <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="swiper-banner-main-wrapper-13 with-lastbanner" id="home">
        <div class="swiper mySwiper-13">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area bg_image bg_banner-13">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/10.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            <span>Manage</span> Business <br>
                                             Performance
                                        </h1>
                                        <p class="disc">
                                            Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary-6 btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area bg_image bg_banner-13">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/10.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            <span>Manage</span> Business Performance
                                        </h1>
                                        <p class="disc">
                                            Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary-6 btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area bg_image bg_banner-13">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/10.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            <span>Manage</span> Business <br>
                                             Performance
                                        </h1>
                                        <p class="disc">
                                            These names convey professionalism, expertise, and a focus on delivering effective management solutions to businesses.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary-6 btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="left-side-information">
            <div class="email-area">
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <a href="#">info@finbiz.com</a>
            </div>
            <div class="language-area">
                <ul>
                    <li><a href="#">en.</a></li>
                    <li><a href="#">fr.</a></li>
                    <li><a href="#">ge.</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="rts-trusted-client ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client six text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    <a href="#"><img src="{{ asset('assets/images/client/01.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/02.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/03.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/04.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/05.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/06.png') }}" alt="business_finbiz"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- rts service area start -->
    <div class="rts-serice-area rts-section-gap" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-top-wrapper-main-between">
                        <div class="left-title-area">
                            <div class="title-area left-right testimonial-h2 black-title">
                                <div class="title-left">
                                    <span>Our Services</span>
                                    <h2 class="title mt--15">
                                        Effective Services
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            These names convey professionalism, expertise, and a focus on delivering effective management solutions to businesses. Feel free to choose one that resonates with the vision and values.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="slide-ride-float">
                        <div class="floating-service-right-wrapper">
                            <div class="swiper swiper-service-13">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="single-service-main-13">
                                            <span class="tags">Solutions</span>
                                            <a href="#" class="thumbnail-image">
                                                <img src="{{ asset('assets/images/service/17.jpg') }}" alt="service">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
                                                    <h4 class="title">ProVision <br>
                                                    Management Solutions</h4>
                                                </a>
                                                <p>ProVision Management Solutions specializes in providing comprehensive management.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="single-service-main-13">
                                            <span class="tags">Solutions</span>
                                            <a href="#" class="thumbnail-image">
                                                <img src="{{ asset('assets/images/service/18.jpg') }}" alt="service">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
                                                    <h4 class="title">ProVision <br>
                                                    Management Solutions</h4>
                                                </a>
                                                <p>ProVision Management Solutions specializes in providing comprehensive management.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="single-service-main-13">
                                            <span class="tags">Solutions</span>
                                            <a href="#" class="thumbnail-image">
                                                <img src="{{ asset('assets/images/service/19.jpg') }}" alt="service">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
                                                    <h4 class="title">ProVision <br>
                                                    Management Solutions</h4>
                                                </a>
                                                <p>ProVision Management Solutions specializes in providing comprehensive management.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="single-service-main-13">
                                            <span class="tags">Solutions</span>
                                            <a href="#" class="thumbnail-image">
                                                <img src="{{ asset('assets/images/service/20.jpg') }}" alt="service">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
                                                    <h4 class="title">ProVision <br>
                                                    Management Solutions</h4>
                                                </a>
                                                <p>ProVision Management Solutions specializes in providing comprehensive management.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt--70 pb--50">
                <div class="col-lg-12">
                    <div class="service-bottom-cta">
                        <h5 class="title">Do You Need Any Kind Of Work?</h5>
                        <div class="right">
                            <p>Call Us Anytime! <a href="#">+(125) 2153-2158</a></p>
                        </div>
                        <div class="mid-image">
                            <img src="{{ asset('assets/images/service/01.png') }}" alt="service_image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->


    <!-- rts about area start -->
    <div class="rts-about-area-start-9 rts-section-gap" id="about">

        <div class="about-main-wrapper">
            <span>About Company</span>
        </div>
        <div class="container">
            <div class="row mt--120 pb--60">
                <div class="col-lg-5">
                    <div class="about-left-content-area-12">
                        <div class="title-area left-right testimonial-h2 black-title">
                            <div class="title-left">
                                <span>About US</span>
                                <h2 class="title mt--15">
                                    Businesses Through <br>
                                    Management
                                </h2>
                            </div>
                        </div>
                        <p class="disc">
                            we believe in the power of collaboration and personalized solutions. By understanding our clients' unique needs and goals, we tailor our approach to deliver strategic insights, creative solutions.
                        </p>
                        <div class="business-progress-area">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="85" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%" transform="matrix(0, 1, -1, 0, 80, 0)">85</text>
                                </svg>
                            </div>
                            <div class="right-title">
                                <h6 class="title">Business Progress</h6>
                                <p class="disc">
                                    Finbiz Planning for business growth in 2024 involves considering various
                                </p>
                            </div>
                        </div>
                        <div class="button-area-about-12">
                            <a href="#" class="rts-btn btn-primary-6 btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                            <div class="call-to-action">
                                <span>Call Us Anytime!</span>
                                <a href="#">+(125) 2153-2158</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-area-about-12">
                        <div class="thumbnail-large">
                            <img src="{{ asset('assets/images/about/03.jpg') }}" alt="">
                        </div>
                        <div class="thumbnail-small">
                            <img src="{{ asset('assets/images/about/04.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


    <!-- what we area expart for -->
    <div class="what-we-area-expart-13 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area left-right testimonial-h2 black-title">
                        <div class="title-left">
                            <span>What we are expert</span>
                            <h2 class="title mt--15">
                                Expert business <br>
                                management company
                            </h2>
                            <p class="disc">
                                our expertise lies in empowering businesses to thrive and succeed through comprehensive management solutions designed to address their specific challenges and opportunities.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="thumbnail-image-about-13">
                        <img src="{{ asset('assets/images/about/06.jpg') }}" alt="expart">
                        <div class="inner-content">
                            <h5 class="title">Efficient Management Systems <br>
                                for Streamlined Operations</h5>

                        </div>
                        <div class="vedio-icone">
                            <a id="play-video" class="video-play-button" href="#">
                                <span></span>
                            </a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what we area expart for end -->



    <!-- rts use case hone nine start -->
    <div class="rts-use-case-home-9 rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area left-right testimonial-h2 black-title">
                        <div class="title-left">
                            <span>Project Portfolio</span>
                            <h2 class="title mt--15">
                                Digital Case Studies
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-120 mt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-10-swiper-main-wrapper">
                        <div class="swiper mySwiper-case-11">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail-image-case-11">
                                        <img src="{{ asset('assets/images/product/11.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail-image-case-11">
                                        <img src="{{ asset('assets/images/product/11.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail-image-case-11">
                                        <img src="{{ asset('assets/images/product/11.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail-image-case-11">
                                        <img src="{{ asset('assets/images/product/11.png') }}" alt="product">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts use case hone nine end -->


    <div class="rts-client-review-two rts-section-gap">
        <div class="container">
            <div class="row mt--30">
                <div class="title-area left-right testimonial-h2 black-title">
                    <div class="title-left">
                        <span>Our Testimonial</span>
                        <h2 class="title mt--15">
                            Our Client Reviews
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-ebdc7e39510572b9b" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2200px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Finance</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- service accordion area -->
    <div class="rts-accordion-area-bg  bg_image service rts-section-gap">
        <div class="accordion-service-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="accordion-service-inner">
                            <div class="title-area-start">
                                <span class="sub color-primary">JUST A CONSULTANCY</span>
                                <h2 class="title">We know how to manage
                                    business globally</h2>
                            </div>
                            <div class="accordion-area">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Making Easy Business Growth
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Business Solution Model
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Finbiz Company Solution
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Management Process
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Managing Invesment
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Neque parturient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nec quam convallis ornare justo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt_lg--50 mt_sm--50">
                        <div class="thumbnail-service-13">
                            <img src="{{ asset('assets/images/service/02.png') }}" alt="service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service accordion area End -->

    <div class="rts-blog-area rts-section-gapTop" id="blog">
        <div class="container">
            <div class="row">
                <div class="title-area text-center blog">
                    <span>Blog &amp; Article</span>
                    <h2 class="title">Recent blog post</h2>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <!-- single Post Start -->
                <div class="col-lg-6 col-md-6">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/09.jpg') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="{{ route('blogDetailsPage') }}">
                                <h4 class="title">The quick settle tips of the new<br>
                                    ages exist </h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
                <!-- single Post Start -->
                <div class="col-lg-6 col-md-6">
                    <!-- single Post blog large -->
                    <div class="rts-blog-h-2-wrapper">
                        <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/08.jpg') }}" alt="Business_blog">
                        </a>
                        <div class="body">
                            <span>Business Solution / by David Dolean</span>
                            <a href="{{ route('blogDetailsPage') }}">
                                <h4 class="title">Business is the practice of making money</h4>
                            </a>
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
            </div>
        </div>
    </div>

    <div class="rts-footer-area rts-section-gap footer-two footer-bg-two mt--120 mt_md--80 mt_sm--60" id="contactse">
        <div class="container">
            <div class="row">
                <!-- single wized -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left">
                        <h3 class="title animated fadeIn">
                            <span>Ready To</span> <br>
                        Work With Us?
                        </h3>
                        <p class="disc">
                            Felis consequat magnis est fames sagittis ultrices placerat sodales porttitor quisque.
                        </p>
                        <a class="rts-btn btn-primary-2 color-h-black" href="#">Get a Quote</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Our Services</h5>
                            <img src="{{ asset('assets/images/footer/under-title-2.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i class="fal fa-chevron-double-right"></i>Business planning</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i class="fal fa-chevron-double-right"></i>Tax strategy</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i class="fal fa-chevron-double-right"></i>Financial advices</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i class="fal fa-chevron-double-right"></i>Insurance strategy</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i class="fal fa-chevron-double-right"></i><span>Manage</span> investment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Contact Us</h5>
                            <img src="{{ asset('assets/images/footer/under-title-2.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Call Us 24/7</span>
                                    <a href="#">(+256) 2145.2156</a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span>Work with us</span>
                                    <a href="#">info@finbiz.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <!-- single wized -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized right">
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Our Location</span>
                                    <a href="#">XYZ Hilton Street, 125 Town <br>
                                    United State</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
            </div>
        </div>
    </div>




    <div class="rts-copy-right ptb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">
                            FINBIZ - Copyright 2024. All rights reserved.
                        </p>
                        <div class="right">
                            <ul>
                                <li><a href="{{ route('blogPage') }}">Company News</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="{{ route('contactPage') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





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
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Home</a>
                            <ul class="submenu">
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Homepages</a>
                                        <li class="mobile-menu-link"><a href="{{ route('home') }}">Main Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('consulting') }}">Consulting Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('corporate') }}">Corporate Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('insurance') }}">Insurance Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('marketing') }}">Marketing Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('finance') }}">Finance Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('humanResource') }}">Human Resources</a></li>
                                        <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                                        <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                                        <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                                        <li><a href="{{ route('brandingagency') }}">Branding Agency</a></li>
                                        <li><a href="{{ route('businessagency') }}">Business Agency</a></li>
                                        <li><a href="{{ route('businessmanagement') }}">Business Management</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Onepages</a>
                                        <li class="mobile-menu-link"><a href="{{ route('main') }}">Main Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageConsulting') }}">Consulting Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageCorporate') }}">Corporate Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageInsurance') }}">Insurance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageMarketing') }}">Marketing Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageFinance') }}">Finance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageHumanResource') }}">Human Resources Onepage</a></li>
                                        <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                                        <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                                        <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                                        <li><a href="{{ route('brandingagency') }}">Branding Agency</a></li>
                                        <li><a href="{{ route('businessagency') }}">Business Agency</a></li>
                                        <li><a href="{{ route('businessmanagement') }}">Business Management</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('aboutPage') }}">About Us</a></li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Services</a>
                            <ul class="submenu">
                                <li class="has-droupdown sub-droupdown">
                                    <a href="#">Our Service</a>
                                    <ul class="submenu third-lvl mobile-menu">
                                        <li><a href="{{ route('ourservicePage') }}">Service 1</a></li>
                                        <li><a href="{{ route('service2Page') }}">Service 2</a></li>
                                        <li><a href="{{ route('service3Page') }}">Service 3</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-link"><a href="{{ route('serviceDetailsPage') }}">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Pages</a>
                            <ul class="submenu">
                            <li class="mobile-menu-link"><a href="{{ route('portfolioStyle1') }}">Project</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('portfolioDetails') }}">Project Details</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('teamStyle1') }}">Team</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('appoitment') }}">appoinment</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('pricePlans') }}">Price Plan</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('errorPage') }}">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Blog</a>
                            <ul class="submenu">
                                <li class="mobile-menu-link"><a href="{{ route('blogPage') }}">Blog List</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('blogDetailsPage') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('contactPage') }}">Contact</a></li>
                    </ul>
                </nav>
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
    
</body>

@endsection

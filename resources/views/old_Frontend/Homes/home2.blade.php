@extends('Frontend.Layouts.app')

@section('title')
    Home Two (Business Consultant)
@endsection

@section('content')
    <!-- start header area -->
    <header class="header-two header--sticky">
        <div class="header-top">
            <div class="content">
                <div class="left-header-top">
                    <p class="top-details">
                        Are you ready to grow up your business? <a href="#">Contact Us <i
                                class="fal fa-arrow-right"></i></a>
                    </p>
                </div>
                <div class="right-header-top">
                    <div class="working-time">
                        <i class="far fa-clock"></i>
                        <span>Working: 8.00am - 5.00pm</span>
                    </div>
                    <div class="ht-social">
                        <span>Visit Us:</span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="content">
                <div class="header-left">
                    <a class="thumbnail" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="">
                    </a>

                    @include('Frontend.Includes.mainList')

                </div>
                <div class="header-right">
                    <div class="call-area">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <path
                                    d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z"
                                    fill="#0B4DF5" />
                            </svg>
                        </div>
                        <div class="number-area">
                            <span>Call us anytime</span>
                            <a href="tel:123-456-7890">
                                <h6 class="call">+256 21458.2146</h6>
                            </a>
                        </div>
                    </div>
                    <a class="rts-btn btn-primary-2 menu-block-none" href="#">Book a Meeting</a>
                    <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                        <img class="menu-dark" src=" {{ asset('assets/images/icon/menu.png') }} " alt="Menu-icon">
                        <img class="menu-light" src=" {{ asset('assets/images/icon/menu-light.png') }} " alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="anywhere-home"></div>
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo"
                    src=" {{ asset('assets/images/logo/logo-1.svg') }} " alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo"
                    src=" {{ asset('assets/images/logo/logo-4.svg') }} " alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo"
                    src=" {{ asset('assets/images/logo/logo-3.svg') }} " alt="finbiz_logo"></a>
            <a class="logo-4" href="{{ route('home') }}"><img class="logo"
                    src=" {{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
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
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get
                    Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <!-- ENd Header Area -->

    <!-- rts banner area start -->
    <div class="rts-banner-area-two">
        <div class="swiper mySwiperh2_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-center">
                                        <div class="wrapper">
                                            <span class="sub">20+ Years In Business</span>
                                            <h1 class="title">
                                                <span>Solving</span> Your Vision Is <br>
                                                <span>Our</span> Dedication
                                            </h1>
                                            <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-two slide-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-center">
                                        <div class="wrapper">
                                            <span class="sub">20+ Years In Business</span>
                                            <h1 class="title">
                                                <span>Boosting</span> Your Business <br> Is
                                                <span>Our</span> Dedication
                                            </h1>
                                            <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-two slide-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-two-content text-center">
                                        <div class="wrapper">
                                            <span class="sub">20+ Years In Business</span>
                                            <h1 class="title">
                                                <span>Making</span> Business Growth Is Our <span>Dedication</span>
                                            </h1>
                                            <a class="rts-btn btn-primary-2" href="#">View Solution</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- latest service area -->
    <div class="rts-service-area rts-section-gap bg-service-h2">
        <div class="container">
            <div class="row">
                <div class="title-area service-h2">
                    <span>Our Latest Services</span>
                    <h2 class="title">Service We Provide</h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="{{ route('serviceDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/service/10.jpg') }} " alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Business Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="{{ route('serviceDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/service/11.jpg') }}" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Creative Ideas</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="{{ route('serviceDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/service/12.jpg') }}" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Market Research</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single service start -->
                    <div class="rts-single-service-h2">
                        <a href="{{ route('serviceDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/service/13.jpg') }}" alt="Service_image">
                        </a>
                        <div class="body">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Best Solution</h5>
                            </a>
                            <p class="disc">
                                Fusce dignissim erat dis proin ornare class sem nibh
                            </p>
                            <a href="{{ route('serviceDetailsPage') }}" class="btn-red-more">Learn More<i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- single service End -->
                </div>
            </div>
        </div>
    </div>
    <!-- latest service area End -->

    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h2">
        <div class="container">
            <div class="row">
                <div class="cta-h2-wrapper text-center">
                    <div class="icon">
                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                    </div>
                    <div class="body">
                        <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7
                                Available)</span></p>
                        <a href="tel:123-456-7890p123" class="number">+215 2153.2159</a>
                        <a href="#" class="rts-btn btn-primary-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section end -->

    <!-- start about our company -->
    <div class="rts-about-our-company-h2 rts-section-gap">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                    <div class="title-area about-company">
                        <span>About Our Company</span>
                        <h2 class="title">Professional And Dedicated <br>
                            Consulting Services</h2>
                    </div>
                    <div class="about-company-wrapper">
                        <p class="disc">
                            We are licensed and insured with over 14 years of experience in providing <br> United States
                            with
                            top-rated USA business services
                        </p>
                        <div class="rts-tab-style-one">
                            <div class="d-flex align-items-start contoler-company">
                                <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">01. The Great
                                        Mission</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">02. Amazing
                                        Vision</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">03. Our
                                        Destination</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact
                                                Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact
                                                Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact
                                                Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                    <div class="about-company-thumbnail">
                        <img src="{{ asset('assets/images/about/01.png') }}"" alt="Business_company">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start about our company End -->

    <!-- our working Process -->
    <div class="working-process-area rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-area text-center working-process">
                    <span>Working Steps</span>
                    <h2 class="title">Our Basic Work Process</h2>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/01.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Make a Plan</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner two">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/02.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Cost Calculating</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner three">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/03.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Business Growth</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner four">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/04.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Success Mission</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
        </div>
    </div>
    <!-- our working Process End -->

    <!-- start service area -->
    <div class="rts-service-areah2-im-3 rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/service/h2/03.jpg') }}" alt="Service_Image">
                        <img class="two" src=" {{ asset('assets/images/service/h2/02.jpg') }} " alt="Service_Image">
                        <img class="three" src=" {{ asset('assets/images/service/h2/01.jpg') }} " alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">85%</h3>
                            <span>Successful Ratio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-h2-content pl--30">
                        <div class="title-area  service-h2 service">
                            <span>Why Choose Us</span>
                            <h2 class="title">We focus to get excellent
                                performance </h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc">
                                Aliquet porta est cras proin donec odio curabitur convallis, penatibus vulputate
                                facilisi montes blandit condimentum quisque platea, sociosqu ut nec nam cursus magnis
                                leo nullam
                            </p>
                            <div class="feature-one-wrapper mt--40">
                                <div class="single-feature-one">
                                    <i class="fal fa-check"></i>
                                    <p>Fast Growing Sells</p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check"></i>
                                    <p>24/7 Quality Services</p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check"></i>
                                    <p>Expert Members</p>
                                </div>
                                <div class="single-feature-one">
                                    <i class="fal fa-check"></i>
                                    <p>Best Quality Services</p>
                                </div>
                            </div>
                            <div class="support-team">
                                <a href="{{ route('teamDetails') }}" class="thumbnail"><img
                                        src="{{ asset('assets/images/business-goal/team.png') }}"" alt="Image-team"></a>
                                <div class="details">
                                    <span>24/7 Support Team</span>
                                    <a href="{{ route('teamDetails') }}">
                                        <h6 class="title">(+214) 2158.31598</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->

    <!-- business case start -->
    <div class="rts-business-case rts-section-gap business-case-bg-2">
        <div class="container">
            <div class="row">
                <div class="title-area text-center business-case">
                    <span>Case Studies</span>
                    <h2 class="title">Specialist Business Cases</h2>
                </div>
            </div>
        </div>
        <div class="container-cusiness-case-h2 mt--50">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiperh2_Business_Cases">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
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
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
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
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Startup Solution
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Growth Manage
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Company Skills
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Personal skill
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
    <!-- business case End -->

    <!-- start client review area start -->
    <div class="rts-client-review-two rts-section-gapTop bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-area left-right testimonial-h2">
                    <div class="title-left">
                        <span>Our Testimonial</span>
                        <h2 class="title mt--15">
                            Our Client Reviews
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary-2">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}""
                                                alt="testimonials_area">
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
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}""
                                                    alt="Client_logo"></a>
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
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}""
                                                alt="testimonials_area">
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
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}""
                                                    alt="Client_logo"></a>
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
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}""
                                                alt="testimonials_area">
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
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}""
                                                    alt="Client_logo"></a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client review area end -->

    <!-- rts-pricing plane arae -->
    <div class="rts-pricing-plane rts-section-gap bg-pricing-bg-h2 margin-dec-padding-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area title-area pricing-h2">
                        <span>Price Plans</span>
                        <h2 class="title">Pricing & Plans</h2>
                        <p class="offer"><span>Save Over 25%</span> When You Select Annual Billing</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Monthly PLan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                    Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$250</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$450</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$650</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$2500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$4500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$6500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-pricing plane arae End -->

    <!-- start client area -->
    <div class="rts-client-area ptb--100 client-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-two-wrapper">
                        <img src="{{ asset('assets/images/client/01.png') }}"" alt="Business_client">
                        <img src="{{ asset('assets/images/client/02.png') }}"" alt="Business_client">
                        <img src="{{ asset('assets/images/client/03.png') }}"" alt="Business_client">
                        <img src="{{ asset('assets/images/client/04.png') }}"" alt="Business_client">
                        <img src="{{ asset('assets/images/client/05.png') }}"" alt="Business_client">
                        <img src="{{ asset('assets/images/client/06.png') }}"" alt="Business_client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client area End -->

    <!-- start blog area -->
    <div class="rts-blog-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="title-area text-center blog">
                    <span>Blog & Article</span>
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
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
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
                            <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                    <!-- single Post blog large End -->
                </div>
                <!-- single Post End -->
            </div>
        </div>
    </div>
    <!-- start blog area End -->
@endsection

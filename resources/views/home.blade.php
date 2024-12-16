@extends('Layouts.app')

@section('title')
    Acceuil
@endsection

@section('content')
    <!--#region  Header-->
    @include('components.header')
    <!--#endregion -->


    <!-- banner area start three -->
    @include('components.home.banner')
    <!-- banner area end three -->

    <!-- start about area two -->
    @include('components.home.about')
    <!-- end about area two -->
    <!-- testimonials area start -->
    @include('components.home.testimonials')
    <!-- testimonials area end -->
    <!-- rts cta area start -->
@include('components.cta-contact')
    <!-- rts cta area End -->
    <!-- rts-service area start -->
    @include('components.home.services')
    <!-- rts-service area end -->



    <!-- leading business solution area -->
{{--    <div class="rts-business-solution rts-section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row g-5">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <!-- business solution left -->--}}
{{--                    <div class="rts-business-solution-left">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <img src="{{ asset('assets/images/business-goal/01.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="success-rate">--}}
{{--                            <h2 class="title">85%</h2>--}}
{{--                            <span>Success Rate</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- business solution left End -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="rts-business-solution-right">--}}
{{--                        <div class="title-area">--}}
{{--                            <span class="sub">--}}
{{--                                Leading Business SOlution--}}
{{--                            </span>--}}
{{--                            <h2 class="title">--}}
{{--                                We Are Help Our <br>--}}
{{--                                <span>Clients <span>For Goal</span></span>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <div class="content-area">--}}
{{--                            <p class="disc">--}}
{{--                                Nisi aenean mu suscipit ni phasellus gravida primis massa, rutrum duis semper posuere--}}
{{--                                pharetra magnis porta diam, bibendum molestie d cursus ante mattis habitasse. Egestas--}}
{{--                                sagittis curabitur quam business solution--}}
{{--                            </p>--}}
{{--                            <!-- single business solution -->--}}
{{--                            <div class="single-business-solution-2">--}}
{{--                                <div class="icon">--}}
{{--                                    <img src="{{ asset('assets/images/business-goal/icon/01.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h6 class="title">--}}
{{--                                        Strategic Vision Work--}}
{{--                                    </h6>--}}
{{--                                    <p class="disc">--}}
{{--                                        Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus--}}
{{--                                        gravida--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single business solution end -->--}}
{{--                            <!-- single business solution -->--}}
{{--                            <div class="single-business-solution-2">--}}
{{--                                <div class="icon">--}}
{{--                                    <img src="{{ asset('assets/images/business-goal/icon/02.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h6 class="title">--}}
{{--                                        Tactical Vision Work--}}
{{--                                    </h6>--}}
{{--                                    <p class="disc">--}}
{{--                                        Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus--}}
{{--                                        gravida--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single business solution end -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- leading business solution area End -->

    <!-- Our Business case style start -->
{{--    <div class="rts-business-case-area rts-section-gapTop business-case-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="title-area-business-case-3">--}}
{{--                        <div class="title-area">--}}
{{--                            <span class="sub">RECENT CASE STUDIES</span>--}}
{{--                            <h2 class="title">Our Business Cases</h2>--}}
{{--                        </div>--}}
{{--                        <a class="rts-btn btn-primary-3 color-h-black" href="{{ route('contactPage') }}">Lets Work--}}
{{--                            Together</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container-2 mt--65">--}}
{{--            <div class="row g-5">--}}
{{--                <div class="swiper mySwiperh3_business-case">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single case study -->--}}
{{--                            <div class="rts-cse-study-3-wrapper">--}}
{{--                                <div class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/business-case/01.jpg') }}" alt="Business-solution">--}}
{{--                                    <a href="#" class="icon">--}}
{{--                                        <i class="far fa-eye"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="content-wrap">--}}
{{--                                            <a href="#">--}}
{{--                                                <h5 class="title">Digital Business Solution</h5>--}}
{{--                                            </a>--}}
{{--                                            <span>Business Strategy</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="over_link"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single case study End -->--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single case study -->--}}
{{--                            <div class="rts-cse-study-3-wrapper">--}}
{{--                                <div class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/business-case/02.jpg') }}" alt="Business-solution">--}}
{{--                                    <a href="#" class="icon">--}}
{{--                                        <i class="far fa-eye"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="content-wrap">--}}
{{--                                            <a href="#">--}}
{{--                                                <h5 class="title">Digital Business Solution</h5>--}}
{{--                                            </a>--}}
{{--                                            <span>Business Strategy</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="over_link"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single case study End -->--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single case study -->--}}
{{--                            <div class="rts-cse-study-3-wrapper">--}}
{{--                                <div class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/business-case/03.jpg') }}" alt="Business-solution">--}}
{{--                                    <a href="#" class="icon">--}}
{{--                                        <i class="far fa-eye"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="content-wrap">--}}
{{--                                            <a href="#">--}}
{{--                                                <h5 class="title">Digital Business Solution</h5>--}}
{{--                                            </a>--}}
{{--                                            <span>Business Strategy</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a href="#" class="over_link"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- single case study End -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Our Business case style End -->

    <!-- rts counter up section area -->
{{--    <div class="pb--120 pb_md--80 pb_sm--60 rts-counter-up-area rts-section-gapTop">--}}
{{--        <div class="container">--}}
{{--            <div class="row g-5">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="counter-wrapper-two">--}}
{{--                        <div class="single-counter">--}}
{{--                            <img src="{{ asset('assets/images/counterup/icon/05.svg') }}" alt="Business_counter">--}}
{{--                            <div class="counter-details">--}}
{{--                                <h2 class="title"><span class="counter animated fadeInDownBig">15000</span></h2>--}}
{{--                                <p class="disc">Business Solution</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="counter-wrapper-two">--}}
{{--                        <div class="single-counter">--}}
{{--                            <img src="{{ asset('assets/images/counterup/icon/08.svg') }}" alt="Business_counter">--}}
{{--                            <div class="counter-details">--}}
{{--                                <h2 class="title"><span class="counter animated fadeInDownBig">196</span></h2>--}}
{{--                                <p class="disc">Solution Experts</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                    <div class="counter-wrapper-two">--}}
{{--                        <div class="single-counter">--}}
{{--                            <img src="{{ asset('assets/images/counterup/icon/07.svg') }}" alt="Business_counter">--}}
{{--                            <div class="counter-details">--}}
{{--                                <h2 class="title"><span class="counter animated fadeInDownBig">999</span></h2>--}}
{{--                                <p class="disc">Worldwide Partner</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- rts counter up section area -->

    <!-- rts faq section area -->
{{--    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="faq-two-inner">--}}
{{--                        <div class="title-area-faq">--}}
{{--                            <span class="sub">WHY CHOOSE US</span>--}}
{{--                            <h2 class="title">We Are Experienced--}}
{{--                                <span class="sm-title">Business <span>Solution</span></span>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                        <!-- faq accordion area -->--}}
{{--                        <div class="faq-accordion-area">--}}
{{--                            <div class="accordion" id="accordionExample">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingOne">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
{{--                                            data-bs-target="#collapseOne" aria-expanded="true"--}}
{{--                                            aria-controls="collapseOne">--}}
{{--                                            <span>01. </span> What should i included my personal details?--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseOne" class="accordion-collapse collapse show"--}}
{{--                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis--}}
{{--                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo--}}
{{--                                            service lifereu visionary sources unleash online businesss solutions--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingTwo">--}}
{{--                                        <button class="accordion-button collapsed" type="button"--}}
{{--                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"--}}
{{--                                            aria-controls="collapseTwo">--}}
{{--                                            <span>02. </span> Where i can find my business growth result?--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseTwo" class="accordion-collapse collapse"--}}
{{--                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis--}}
{{--                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo--}}
{{--                                            service lifereu visionary sources unleash online businesss solutions--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingThree">--}}
{{--                                        <button class="accordion-button collapsed" type="button"--}}
{{--                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"--}}
{{--                                            aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                            <span>03. </span> Did you get any business consultant?--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseThree" class="accordion-collapse collapse"--}}
{{--                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis--}}
{{--                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo--}}
{{--                                            service lifereu visionary sources unleash online businesss solutions--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- faq accordion area end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="thumbnail-faq-four">--}}
{{--                        <img src="{{ asset('assets/images/faq/02.png') }}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- rts faq section area End -->

    <!-- rts team two area -->
{{--    <div class="rts-team-area rts-section-gap team-two">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="rts-title-area team text-center">--}}
{{--                        <p class="pre-title">--}}
{{--                            Professionals Team--}}
{{--                        </p>--}}
{{--                        <h2 class="title">Professionals Team</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row g-5 mt--20 mt_md--30 mt_sm--0">--}}
{{--                <div class="swiper mySwiperh3_team">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single team inner -->--}}
{{--                            <div class="team-inner-two">--}}
{{--                                <a href="{{ route('teamDetails') }}" class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/team/tm/lg-01.jpg') }}" alt="">--}}
{{--                                </a>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                                <div class="acquaintance-area">--}}
{{--                                    <div class="header">--}}
{{--                                        <h5 class="title">Kevin Martin</h5>--}}
{{--                                        <span>Consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="acquaintance-social">--}}
{{--                                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                            </div>--}}
{{--                            <!-- single team inner End -->--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single team inner -->--}}
{{--                            <div class="team-inner-two">--}}
{{--                                <a href="{{ route('teamDetails') }}" class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/team/tm/lg-02.jpg') }}" alt="">--}}
{{--                                </a>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                                <div class="acquaintance-area">--}}
{{--                                    <div class="header">--}}
{{--                                        <h5 class="title">Kevin Martin</h5>--}}
{{--                                        <span>Consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="acquaintance-social">--}}
{{--                                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                            </div>--}}
{{--                            <!-- single team inner End -->--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <!-- single team inner -->--}}
{{--                            <div class="team-inner-two">--}}
{{--                                <a href="{{ route('teamDetails') }}" class="thumbnail">--}}
{{--                                    <img src="{{ asset('assets/images/team/tm/lg-03.jpg') }}" alt="">--}}
{{--                                </a>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                                <div class="acquaintance-area">--}}
{{--                                    <div class="header">--}}
{{--                                        <h5 class="title">Kevin Martin</h5>--}}
{{--                                        <span>Consultant</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="acquaintance-social">--}}
{{--                                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Acquaintance area -->--}}
{{--                            </div>--}}
{{--                            <!-- single team inner End -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- rts team two area End -->

    <!-- start partners area -->
    @include('components.home.partners')
    <!-- start client partners End -->

    <!-- rts pricing area start -->
{{--    <div class="rts-pricing-area rts-section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="pricing-three-title-area">--}}
{{--                        <div class="title-area">--}}
{{--                            <span class="sub">Price Table</span>--}}
{{--                            <h2 class="title">Pricing & Plans</h2>--}}
{{--                        </div>--}}
{{--                        <div class="pricing-tab-button-area">--}}
{{--                            <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"--}}
{{--                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"--}}
{{--                                        aria-selected="true">Monthly PLan</button>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"--}}
{{--                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"--}}
{{--                                        aria-selected="false">Yearly--}}
{{--                                        Plan</button>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mt--100">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="tab-content" id="myTabContent">--}}
{{--                        <div class="tab-pane fade show active" id="home" role="tabpanel"--}}
{{--                            aria-labelledby="home-tab">--}}
{{--                            <div class="row g-5">--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/month</span>--}}
{{--                                            <h3 class="title">$160</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Starter Package</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Basic Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--80">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/month</span>--}}
{{--                                            <h3 class="title">$180</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Starter Package</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Standard Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/month</span>--}}
{{--                                            <h3 class="title">$260</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Starter Package</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Premium Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--                            <div class="row g-5">--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/year</span>--}}
{{--                                            <h3 class="title">$1800</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Starter Package</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Basic Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/year</span>--}}
{{--                                            <h3 class="title">$2000</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Standard Plan</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Standard Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <!-- single pricing plane -->--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="pricing-wrapper-one">--}}
{{--                                        <div class="plane-process">--}}
{{--                                            <span>/year</span>--}}
{{--                                            <h3 class="title">$2300</h3>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header -->--}}
{{--                                        <div class="pricing-header-start">--}}
{{--                                            <span class="pre-title">Premium Plan</span>--}}
{{--                                            <h4 class="title">--}}
{{--                                                Premium Plan--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing header End -->--}}
{{--                                        <!-- pricing body start -->--}}
{{--                                        <div class="pricing-body">--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Business Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing available">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Great Customer Support</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing ">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">Market Growth Solution</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <!-- single pricing -->--}}
{{--                                            <div class="single-pricing">--}}
{{--                                                <div class="icon">--}}
{{--                                                    <i class="far fa-check"></i>--}}
{{--                                                </div>--}}
{{--                                                <span class="price-details">24/7 Consultant Service</span>--}}
{{--                                            </div>--}}
{{--                                            <!-- single pricing End -->--}}
{{--                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- pricing body end -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- single pricing plane -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- rts pricing area end -->

    <!-- start project with us section -->
    @include('components.home.start_project')
    <!-- start project with us section End -->

    <!-- tart latest blog area -->
    <div class="rts-latest-blog-three rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area blog-three text-center">
                        <span>Mises à jour</span>
                        <h2 class="title">Nos dernières réalisations</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/05.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/06.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/07.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
            </div>
        </div>
    </div>
    <!-- tart latest blog area End -->



    <!-- start header area -->
    @include('components.footer')
    <!-- ENd Header Area -->
@endsection

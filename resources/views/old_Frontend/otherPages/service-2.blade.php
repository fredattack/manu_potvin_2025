@extends('Frontend.Layouts.app')

@section('title')
    Service Two (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Our Services</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts service post area  Start-->
    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area service text-center">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">High Quality Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
            <div class="background-service row">
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner one">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/01.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Business Planning</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner two">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/02.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Develop Process</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner three">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/03.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Strategy & Planning</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner four">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/04.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Business Support</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner five">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/05.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Audit & Evaluation</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
                <!-- start single Service -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-one-inner six">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/icon/06.svg') }}" alt="finbiz_service">
                        </div>
                        <div class="service-details">
                            <a href="{{ route('serviceDetailsPage') }}">
                                <h5 class="title">Consultancy & Advice</h5>
                            </a>
                            <p class="disc">
                                Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                            </p>
                            <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                    class="far fa-arrow-right"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- end single Services -->
            </div>
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title">Let’s discuss about how we can help
                                make your business better</h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="{{ route('appoitment') }}">Lets Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service post area ENd -->

    <!-- start pricing area -->
    <div class="rts-pricing-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area pricing-planes text-center">
                        <p class="pre-title">
                            What We Offer
                        </p>
                        <h2 class="title">Packages & Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--50">
                <!-- single pricing plane -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
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
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
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
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                    <div class="pricing-wrapper-one">
                        <div class="plane-process">
                            <span>/month</span>
                            <h3 class="title">$260</h3>
                        </div>
                        <!-- pricing header -->
                        <div class="pricing-header-start">
                            <span class="pre-title">Starter Package</span>
                            <h4 class="title">
                                Basic Plan
                            </h4>
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
            </div>
        </div>
    </div>
    <!-- end pricing area -->
@endsection

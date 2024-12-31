@extends('Frontend.Layouts.app')

@section('title')
Project details (Business Consultant)
@endsection
@section('content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Price Plans</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Price Plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts pricing area start -->
    <div class="rts-pricing-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area">
                        <span class="pricing-sub"> <strong>Save Over 25%</strong> When You Select Annual Billing</span>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly PLan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                    Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--100">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
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
                                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$290</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Strandard Plan
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
                                <div class="col-lg-4 col-md-6 col-sm-12 mt_md--80 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$300</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Premium Plan
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$560</h3>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$590</h3>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 mt_md--80 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$630</h3>
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
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->


    <!-- customers feed back area start -->
    <div class="rts-customer-feedback-area rts-section-gap bg-customer-feedback">
        <div class="container">
            <div class="row">
                <div class="rts-title-area feedback team text-center">
                    <p class="pre-title">
                        Feedbacks
                    </p>
                    <h2 class="title">Customer Feedbacks</h2>
                </div>
            </div>
            <div class="row g-5 mt--40">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Smith</h5>
                                <span class="designation">Business Expert</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                                “Parallel task user friendly convergence through supply are chains type siflify reliable
                                meta provide service visionary sources unleash tactical thinking via granular
                                intellectual capital architect dynamic information value online business solution
                                services”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Smith</h5>
                                <span class="designation">Business Expert</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                                “Parallel task user friendly convergence through supply are chains type siflify reliable
                                meta provide service visionary sources unleash tactical thinking via granular
                                intellectual capital architect dynamic information value online business solution
                                services”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customers feed back area end -->

    <!-- start customers faq section -->
    <div class="rts-faq-area rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2">
                    <div class="accordion-area">
                        <div class="title-area">
                            <span>JUST A CONSULTANCY</span>
                            <h2 class="title">Get every business answer from us</h2>
                        </div>
                        <div class="accordion-one-inner">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>03.</span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet vivamus est aliquam euismod nector quam convallis ornare justo service visionary sources unleash online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-md-1 order-sm-1 order-1">
                    <div class="faq-thumbnail">
                        <img src="{{ asset('assets/images/faq/01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End customers faq section -->

@endsection

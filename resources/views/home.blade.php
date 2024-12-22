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
    @include('components.home.services',['serviceListe'=>$serviceRealisations])
    <!-- rts-service area end -->

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
    @include('components.home.realistations')
    <!-- tart latest blog area End -->



    <!-- start header area -->
    @include('components.footer')
    <!-- ENd Header Area -->
@endsection

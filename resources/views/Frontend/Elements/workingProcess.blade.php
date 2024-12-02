@extends('Frontend.Layouts.element')
@section('element-content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Working Process</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Working Process</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- our working Process -->
    <div class="working-process-area rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-area text-center working-process">
                    <span>Working Steps</span>
                    <h2 class="title">Working Process Style One</h2>
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

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-2 inner mt--40">
                        <h2 class="title text-center mb--50">Working Process Style Two</h2>
                        <!-- stem-area start -->
                        <div class="row  mb--40 g-5 mb_md--20 mb_sm--20">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">01</p>
                                    <h6 class="title">
                                        STEP ONE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">02</p>
                                    <h6 class="title">
                                        STEP TWO
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">03</p>
                                    <h6 class="title">
                                        STEP THREE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- stem-area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection

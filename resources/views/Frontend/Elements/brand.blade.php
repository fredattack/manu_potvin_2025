@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Brand Logo</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Brand Logo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start trusted client section -->
    <div class="rts-trusted-client rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client text-center">
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
    <!-- end trusted client section -->

    <!-- start client area -->
    <div class="rts-client-area ptb--100 client-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-two-wrapper">
                        <img src="{{ asset('assets/images/client/01.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/02.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/03.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/04.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/05.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/06.png') }}" alt="Business_client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client area End -->

@endsection

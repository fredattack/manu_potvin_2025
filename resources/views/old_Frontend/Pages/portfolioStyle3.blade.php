@extends('Frontend.Layouts.app')

@section('title')
    Portfolio Style 3 (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Portfolio Style 3</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Portfolio Style 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!--portfolio-area start-->
    <section class="portfolio-area style-3 pt--110 pb--90 pt--md--60 pb--md-30 pt_xs--60 pb_xs--30">
        <div class="container">
            <div class="grid row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat3">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/01.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Development</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">Digital Startup Agency</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat1">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/02.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Branding</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">Business Growth Check</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat2">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/03.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Design</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">Digital Business Path</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat1">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/04.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Branding</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">Mobile App Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat4">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/05.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Marketing</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">SEO Marketing Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cat2">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="{{ asset('assets/images/product/06.jpg') }}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="{{ route('serviceDetailsPage') }}">Veiw Details </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <p class="p-category">
                                    <a href="#">Design</a>
                                </p>
                                <div class="p-title">
                                    <a href="#">Creative Fashion Designer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio-area end-->
@endsection

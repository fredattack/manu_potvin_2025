@extends('Frontend.Layouts.app')

@section('title')
    Portfolio Style 4 (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Portfolio Style 4</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Portfolio Style 4</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!--portfolio-area start-->
    <section class="portfolio-area style-4 pt--120 pb--120 pt_xs--60 pt_xs--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/01.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/02.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/03.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/04.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/05.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="{{ asset('assets/images/product/06.jpg') }}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                <span>UI & UX, IT Solution</span>
                                <h4 class="portfolio-title text-white">Smartrics Web Solution</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portfolioDetails') }}"><i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio-area end-->
@endsection

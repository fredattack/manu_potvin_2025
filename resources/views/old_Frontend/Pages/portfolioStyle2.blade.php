@extends('Frontend.Layouts.app')

@section('title')
    Portfolio Style 2 (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Portfolio Style 2</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Portfolio Style 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!--case-study-area start-->
    <section class="case-study-area case-bg2 nav-style-1 pt--115 pt_md--60 pt_xs--60 pb--115 pb_md--60 pb_xs--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/06.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Solution</h6>
                                <h5 class="fs-20 text-heding3">Digital Startup Agency</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/02.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Marketing</h6>
                                <h5 class="fs-20 text-heding3">Business Growth Check</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>

                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/03.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Business Growth</h6>
                                <h5 class="fs-20 text-heding3">Digital Business Path</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/04.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Marketing</h6>
                                <h5 class="fs-20 text-heding3">Business Growth Model</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/05.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Solution</h6>
                                <h5 class="fs-20 text-heding3">Strategy Growth Check</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="cases-wrapper2">
                            <div class="item-image">
                                <img src="{{ asset('assets/images/product/06.jpg') }}" alt="Image">
                            </div>
                            <div class="item-content">
                                <h6>Business Growth</h6>
                                <h5 class="fs-20 text-heding3">Marketing Solution</h5>
                                <p>Lorem ipsum dolor sit amet, conse
                                    ctetur a dipisicing elit</p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="read-more">Case Details <span
                                    class="f-right"><i class="far fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--case-study-area end-->
@endsection

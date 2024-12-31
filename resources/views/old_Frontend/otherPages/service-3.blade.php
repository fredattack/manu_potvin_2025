@extends('Frontend.Layouts.app')

@section('title')
    Service Three (Business Consultant)
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


    <!-- latest service area -->
    <div class="rts-service-area rts-section-gap bg-service-h2 ptb--120 mt--0">
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
                    <div class="rts-single-service-h2 inner">
                        <a href="{{ route('serviceDetailsPage') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/service/10.jpg') }}" alt="Service_image">
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
                    <div class="rts-single-service-h2 inner">
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
                    <div class="rts-single-service-h2 inner">
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
                    <div class="rts-single-service-h2 inner">
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
@endsection

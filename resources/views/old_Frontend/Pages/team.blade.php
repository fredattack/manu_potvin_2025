@extends('Frontend.Layouts.app')

@section('title')
    Team Style 1 (Business Consultant)
@endsection

@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Team Style 1</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Team Style 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- team area start-->
    <div class="rts-team-area rts-section-gap bg-team-color">
        <div class="container">
            <div class="row g-5">
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/06.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Archer Graham</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/07.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Amelia Clover</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/08.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Beckett Hayden</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/09.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Julian Wyat</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/10.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Archer Graham</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/11.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Amelia Clover</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/12.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Beckett Hayden</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
                <!-- team single start -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-single-one-start">
                        <div class="team-image-area">
                            <a href="{{ route('teamDetails') }}">
                                <img src="{{ asset('assets/images/team/tm/13.jpg') }}" alt="Business_Team_single">
                                <div class="team-social">
                                    <div class="main">
                                        <i class="fal fa-plus"></i>
                                    </div>
                                    <div class="team-social-one">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single-details">
                            <a href="{{ route('teamDetails') }}">
                                <h5 class="title">Julian Wyat</h5>
                            </a>
                            <p>Finance Manager</p>
                        </div>
                    </div>
                </div>
                <!-- team single end -->
            </div>
        </div>
    </div>
    <!-- team area End -->
@endsection

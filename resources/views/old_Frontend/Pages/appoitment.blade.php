@extends('Frontend.Layouts.app')

@section('title')
Appointment (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Appointment</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts circle progress area -->
    <div class="rts-circle-progress-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">85%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Quality Service</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">90%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Skilled Members</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">78%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Happy Customers</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">79%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Project Fails</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts circle progress area End -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one appoinment background-contact-appoinment">
        <div class="">
            <div class="row g-0 align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one appoinment">
                        <img src="{{ asset('assets/images/appoinment/02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact-appoinment text-start">
                            <p class="pre-title">
                                Make An Appointment
                            </p>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <form action="#">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name">
                                <input type="email" placeholder="Email Address">
                            </div>
                            <div class="name-email">
                                <input type="text" placeholder="Phone Number">
                                <input type="email" placeholder="Company Website">
                            </div>
                            <input type="text" placeholder="Business Topic">
                            <textarea placeholder="Type Your Message"></textarea>
                        </form>
                        <a href="#" class="rts-btn btn-primary">Submit Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- rts team two area -->
    <div class="rts-team-area rts-section-gapTop appoinment-team  team-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center">
                        <p class="pre-title">
                            Professionals Team
                        </p>
                        <h2 class="title">Professionals Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="{{ route('teamDetails') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/team/tm/lg-01.jpg') }}" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="{{ route('teamDetails') }}">
                                    <h5 class="title">Kevin Martin</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="{{ route('teamDetails') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/team/tm/lg-02.jpg') }}" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="{{ route('teamDetails') }}">
                                    <h5 class="title">Martin Jone</h5>
                                </a>
                                <span>Business</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="{{ route('teamDetails') }}" class="thumbnail">
                            <img src="{{ asset('assets/images/team/tm/lg-03.jpg') }}" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="{{ route('teamDetails') }}">
                                    <h5 class="title">Jone Lee</h5>
                                </a>
                                <span>CEO</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
            </div>
        </div>
    </div>
    <!-- rts team two area End -->
@endsection

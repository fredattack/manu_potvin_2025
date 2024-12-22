@extends('Frontend.Layouts.app')

@section('title')
    Team Page (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Team Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Our Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts-team details area Start-->
    <div class="rts-team-details rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="details-thumb">
                        <img src="{{ asset('assets/images/team/tm/team-lg.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 pl--35 pl_sm--15">
                    <div class="details-right-inner">
                        <div class="title-area">
                            <span class="pre-title">
                                Business Expert
                            </span>
                            <h3 class="title">David X. Smith</h3>
                        </div>
                        <p class="disc">
                            Vehicula duis tempus vel porttitor lacus morbi pharetra neque, pretium ad enim urna
                            ridiculus nibh, mus class arcu magna ornare orci mollis. Posuere quam eget non mollis platea
                            habitasse cras feugiat.
                        </p>
                        <div class="team-details-support-wrapper">
                            <i class="far fa-envelope"></i>
                            <div class="support-innner">
                                <span>Email Address</span>
                                <a href="#">
                                    <h5 class="title">support@david.com</h5>
                                </a>
                            </div>
                        </div>
                        <div class="team-details-support-wrapper">
                            <i class="fal fa-phone-volume"></i>
                            <div class="support-innner">
                                <span>Phone Number</span>
                                <a href="#">
                                    <h5 class="title">+259 2154.21568</h5>
                                </a>
                            </div>
                        </div>
                        <div class="team-details-support-wrapper">
                            <i class="far fa-map-marker-alt"></i>
                            <div class="support-innner">
                                <span>Office Location</span>
                                <a href="#">
                                    <h5 class="title">24/DA, Hilton Street, United State</h5>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="rts-btn btn-primary"> Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-team details area ENd -->

    <!-- rts skills area start -->
    <div class="rts-team-skill-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <!-- single skill area -->
                    <div class="single-about-skill-inner">
                        <h5 class="title">Professional Skills</h5>
                        <p class="disc">
                            Completely evisculate stand alone expertise through revolutionary strategic are theme areas
                            fashion impactful paradigms for process centric relationships with whiteboard seamless
                            intellectual capital with methods.
                        </p>
                        <div class="rts-progress-one-wrapper">
                            <div class="single-progress">
                                <div class="progress-top">
                                    <p class="progress-title">Product Design</p>
                                    <span class="persectage">70%</span>
                                </div>
                                <div class="meter cadetblue">
                                    <span data-progress="70" style="width:0;"></span>
                                </div>
                            </div>
                            <div class="single-progress">
                                <div class="progress-top">
                                    <p class="progress-title">Growth Analysis</p>
                                    <span class="persectage">93%</span>
                                </div>
                                <div class="meter">
                                    <span data-progress="93" style="width:0;"></span>
                                </div>
                            </div>
                            <div class="single-progress">
                                <div class="progress-top">
                                    <p class="progress-title">Brand Managment</p>
                                    <span class="persectage">85%</span>
                                </div>
                                <div class="meter orange">
                                    <span data-progress="85" style="width:0;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single skill area end-->
                </div>
                <div class="col-lg-6">
                    <!-- single skill area -->
                    <div class="single-about-skill-inner pl--30 pl_md--0 pl_sm--0">
                        <h5 class="title">Educational Experience</h5>
                        <p class="disc">
                            Completely evisculate stand alone expertise through revolutionary strategic are theme areas
                            fashion impactful paradigms for process centric relationships with whiteboard seamless
                            intellectual capital with methods.
                        </p>

                        <div class="education-skill-wrapper">
                            <div class="single-skill">
                                <div class="number-area">
                                    <p>1 <span>st</span></p>
                                </div>
                                <h6 class="experience">Business Expert</h6>
                                <div class="date">2016 - Present <span>(Finbiz)</span></div>
                            </div>
                            <div class="single-skill">
                                <div class="number-area">
                                    <p>2 <span>nd</span></p>
                                </div>
                                <h6 class="experience">Finance Manager</h6>
                                <div class="date">2016 - Present <span>(Finbiz)</span></div>
                            </div>
                            <div class="single-skill">
                                <div class="number-area">
                                    <p>3 <span>rd</span></p>
                                </div>
                                <h6 class="experience">Junior Technician</h6>
                                <div class="date">2016 - Present <span>(Finbiz)</span></div>
                            </div>
                            <div class="single-skill">
                                <div class="number-area">
                                    <p>4 <span>th</span></p>
                                </div>
                                <h6 class="experience">Junior Architect</h6>
                                <div class="date">2016 - Present <span>(Finbiz)</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- single skill area end-->
                </div>
            </div>
        </div>
    </div>
    <!-- rts skills area end -->
@endsection

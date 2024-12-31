@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Progress Bar</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Progress Bar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="about-progress-inner inner1">
                        <div class="title-area">
                            <span>PROGRESS BAR</span>
                            <h2 class="title">Progress Bar Style One</h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc">Dapibus curae risus rutrum curabitur nunc sociis nullam nisl, aliquet quis
                                iaculis scelerisque primis massa imperdiet, dis senectus blandit aptent nulla cubilia
                                sodales convallis tortor pellentesque nulla.</p>
                            <div class="rts-progress-one-wrapper">
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Business Strategy</p>
                                        <span class="persectage">70%</span>
                                    </div>
                                    <div class="meter cadetblue">
                                        <span data-progress="70" style="width:0;"></span>
                                    </div>
                                </div>
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Company Strength</p>
                                        <span class="persectage">93%</span>
                                    </div>
                                    <div class="meter">
                                        <span data-progress="93" style="width:0;"></span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Make an Appointment</a>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->

    <!-- rts skills area start -->
    <div class="rts-team-skill-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <!-- single skill area -->
                    <div class="single-about-skill-inner">
                        <h2 class="title">Progress Bar Style Two</h2>
                        <p class="disc">
                            Completely evisculate stand alone expertise through revolutionary strategic are theme areas fashion impactful paradigms for process centric relationships with whiteboard seamless intellectual capital with methods.
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
            </div>
        </div>
    </div>
    <!-- rts skills area end -->

@endsection

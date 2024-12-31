@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Heading</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Heading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about left -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area">
                        <p class="pre-title">
                            More About Us
                        </p>
                        <h2 class="title">We Provide Best Business
                            Solution in Town</h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                            Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit. dui feugiat
                            fusce conubia ridiculus tristique parturient natoque vulputate risu
                            business solution ceter 24/7 great support
                        </p>
                    </div>
                </div>
                <!-- about right -->
            </div>
        </div>
    </div>
    <!-- rts about us section end -->

    <!-- start about area two -->
    <div class="rts-about-area-two rts-section-gap about-two-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7 pl--50 pl_md--15 pl_sm--15">
                    <div class="about-right-three">
                        <div class="title-area-about-three">
                            <span class="sub">Easy Business Solution</span>
                            <h2 class="title">
                                The Most Leading
                                <span>Solution <span>For You</span></span>
                            </h2>
                        </div>
                        <div class="inner-about-three">
                            <p class="disc">
                                Commodo dignissim nibh tristique urna arcu sagittis nec sapien velit, praesent at
                                dictumst sollicitudin cursus tellus senectus aliquet vivamus curabitur, sociis libero
                                lacus cubilia leo porta penatibus varius arcu sagittis nec sapien velit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about area two -->

    <!-- business goal area -->
    <div class="rts-business-goal rts-business-goal2 mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <!-- right area business -->
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70 mb_sm--35">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                                MAKE YOUR BEST INSURANCE WITH US
                            </p>
                            <h2 class="title">We know how to manage
                                insurance perfectly</h2>
                        </div>
                    </div>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

@endsection

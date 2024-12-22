@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Button Style</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Button Style</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <section class="button-area1 pt--100 pb--100 pt_sm--50 pb_sm--50">
        <div class="container">
            <h2 class="section-title pb--50 pb_sm--20 text-center">Color Button</h2>
            <div class="button-area-inner d-flex justify-content-around text-center">
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                <a href="#" class="rts-btn btn-primary-2 ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                <a href="#" class="rts-btn btn-primary-3 ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
            </div>
        </div>
    </section>

    <section class="button-area1 button-area2 pt--50 pb--100 pt_sm--20 pb_sm--50">
        <div class="container">
            <h2 class="section-title pb--50 pb_sm--20 text-center">Border Button</h2>
            <div class="button-area-inner d-flex justify-content-around text-center">
                <a href="#" class="rts-btn btn-white ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                <a href="#" class="rts-btn btn-white two ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                <a href="#" class="rts-btn btn-white three ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
            </div>
        </div>
    </section>

    <section class="button-area1 button-area3 pt--50 pb--100 pt_sm--20 pb_sm--50">
        <div class="container">
            <h2 class="section-title pb--50 pb_sm--20 text-center">Icon Button</h2>
            <div class="button-area-inner d-flex justify-content-around text-center">
                <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3 one"> Read More<i
                    class="fal fa-arrow-right"></i></a>
                <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"><i
                    class="fal fa-arrow-left"></i> Read More</a>
            </div>
        </div>
    </section>

@endsection

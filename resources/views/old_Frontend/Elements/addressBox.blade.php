@extends('Frontend.Layouts.element')
@section('element-content')

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Address Box</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Address Box</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- map area start -->
    <div class="rts-map-area bg-light-white rts-section-gap">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- map area left -->
                    <div class="mapdetails-inner-one inner">
                        <div class="left-area single-wized">
                            <h5 class="title">Get in touch</h5>
                            <div class="details">
                                <p>Work and general inquiries</p>
                                <a class="number" href="#">+3509.120-8605</a>

                                <p class="time-header">
                                    Assistance hours:
                                </p>
                                <p class="time">
                                    Monday – Friday <br> 6 am to 8 pm EST
                                </p>
                            </div>
                        </div>
                        <div class="right-area single-wized">
                            <h5 class="title">Post Address</h5>
                            <div class="details">
                                <p>Service Office</p>
                                <a href="#">786 Dortans Ave, Otam Sites, <br>
                                    CA 36108, United States</a>

                                <p class="headoffice">
                                    Head Office
                                </p>
                                <p class="office">142 Drive Lane. USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- map area right -->
                </div>
            </div>

        </div>
    </div>
    <!-- map area end -->

    <!-- contact single area start -->
    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/01.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/03.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Servicing Place</span>
                                <a href="#">
                                    <h5>11 Aires Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/02.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/03.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Service Location</span>
                                <a href="#">
                                    <h5>30 Leo Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/03.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/03.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Service Station</span>
                                <a href="#">
                                    <h5>25 Hilton Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- conact single area end -->

@endsection

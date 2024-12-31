@extends('Frontend.Layouts.app')

@section('title')
    Portfolio details (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Portfolio Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Portfolio Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- project details image area -->
    <div class="rts-project-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="big-bg-porduct-details">
                        <img src="{{ asset('assets/images/product/bg-lg-01.jpg') }}" alt="Business_Finbiz">
                        <div class="project-info">
                            <div class="info-head">
                                <h5 class="title">Project Information</h5>
                            </div>
                            <div class="info-body">
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Clients:</span>
                                        <h6 class="name">Josefin H. Smith</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Category:</span>
                                        <h6 class="name">Business Solution</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Date:</span>
                                        <h6 class="name">25 January, 2023</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                                <!-- single info -->
                                <div class="single-info">
                                    <div class="info-ico">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-details">
                                        <span>Address:</span>
                                        <h6 class="name">258 Dancing Street, USA</h6>
                                    </div>
                                </div>
                                <!-- end single info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner">
                        <span>Growth Solution</span>
                        <h3 class="title">Our Business Growth</h3>
                        <p class="disc">Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam
                            magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia
                            class viverra platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla
                            nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer
                            placerat mattis pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque
                            praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed
                            a faucibus pandemic e-business rather than state of the art e-tailers ompletely unleash
                            frictionless data via services. </p>
                        <p class="italic">
                            “Tortor nunc dictumst sapien inceptos libero natoque maecenas metus viverra commodo
                            dignissim
                            magna, donec odio leo varius nullam potenti porta facilisi vulputate sollicitudin montes
                            ostra
                            vel himenaeos sem sociosqu erat inceptos”</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mb--60">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/product/d-01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/product/d-02.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/product/d-03.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12">
                    <h3 class="title mb--0">The Challenge Of Project</h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            The housekeepers we hired are professionals who take pride in doing
                            excellent work and in exceed.
                        </p>
                    </div>
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            Facilisi odio mus quam risus vestibulum torquent eleifend integer semper ridiculus mi habitasse,
                            imperdiet
                        </p>
                    </div>
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            Laoreet mus quisque rhoncus himenaeos praesent enim tortor life dapibus pharetra netus duis vel
                            habitant
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pr--80">
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            The housekeepers we hired are professionals who take pride in doing
                            excellent work and in exceed.
                        </p>
                    </div>
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            Facilisi odio mus quam risus vestibulum torquent eleifend integer semper ridiculus mi habitasse,
                            imperdiet
                        </p>
                    </div>
                    <div class="single-project-details-challenge">
                        <div class="icon">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <p class="details">
                            Laoreet mus quisque rhoncus himenaeos praesent enim tortor life dapibus pharetra netus duis vel
                            habitant
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project details image area end -->
@endsection

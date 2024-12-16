@extends('Layouts.app')

@section('title')
    Service Details (Business Consultant)
@endsection
@section('content')
    @include('components.header')
    <!-- start breadcrumb area -->
    <x-breadcrump
            title="Portes, Fenêtres et chassis"
            breadcrumbPath="Portes, Fenêtres et chassis"
    />

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="service-detials-step-1">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/service/01.jpg') }}" alt="business-area">
                        </div>
                        <h4 class="title">Châssis en Aluminium et PVC : Performances, Durabilité et Design</h4>
                        <p class="disc">
                            Découvrez nos solutions de châssis sur mesure alliant qualité, esthétique et innovation.

                        </p>
                        <p class="disc">
                            Notre société propose une gamme complète de châssis en aluminium et PVC pour répondre à tous vos besoins en matière d'installation, de réparation et de rénovation de vos portes et fenêtres. Que vous cherchiez à moderniser votre habitation ou améliorer ses performances énergétiques, nos solutions allient robustesse, esthétisme et durabilité.

                            Choisir nos châssis, c’est opter pour un confort optimal, une isolation thermique et acoustique efficace, et un design contemporain adapté à vos goûts.
                        </p>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/09.svg') }}" alt=""
                                                class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Instant Business Growth</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/10.svg') }}" alt=""
                                                class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">24/7 Quality Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/11.svg') }}" alt=""
                                                class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Easy Customer Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ asset('assets/images/service/icon/12.svg') }}" alt=""
                                                class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">Quality Cost Service</h6>
                                        <p class="disc">Maintain wireless scerios after sure quality vectors future</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                        </div>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            unique predominate revolutionary quality vectors through future-proof manufactured products.
                            Objectively envisioneer high solution convergence through collaborative networks.
                            Interactively generate B2C e-tailers for business data restore fully researched
                            relationships through resource maximizing results.
                        </p>
                    </div>
                    <div class="service-detials-step-2 mt--40">
                        <h4 class="title">3 Simple Steps to Process</h4>
                        <p class="disc mb--25">
                            Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is
                            maintain solve wireless scenarios after intermandated applications. Conveniently predominate
                            busin revolutionary quality vectors through future-proof manufactured products.
                            Enthusiastically transform distinctive collaboration.
                        </p>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            predominate misslat revolutionary quality vectors through future-proof manufactured
                            products.
                        </p>
                        <!-- stem-area start -->
                        <div class="row  mb--40 g-5 mb_md--20 mb_sm--20">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">01</p>
                                    <h6 class="title">
                                        STEP ONE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">02</p>
                                    <h6 class="title">
                                        STEP TWO
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="single-service-step text-center">
                                    <p class="step">03</p>
                                    <h6 class="title">
                                        STEP THREE
                                    </h6>
                                    <p class="disc">
                                        Tactical services through market web services
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="disc">
                            Conveniently predominate revolutionary quality vectors through future-proof manufactured
                            products. Objectively envisioneer high in convergence through collaborative networks.
                            Interactively generate B2C tailers for business data restore fully researched relationships
                            through
                        </p>
                        <!-- stem-area End -->
                    </div>
                    <!-- service details left area end -->
                    <div class="service-detials-step-3 mt--70 mt_md--50">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="thumbnail sm-thumb-service">
                                    <img src="{{ asset('assets/images/service/sm-01.jpg') }}" alt="Service">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                                <h4 class="title">Customer Benefits</h4>
                                <p class="disc">Catalysts for change before fully tested markets are maintain wireless
                                    scenarios after intermandated applications predominate revolutionary.</p>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We use the latest diagnostic equipment</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>We are a member of Professional Service</span>
                                </div>
                                <div class="single-banifits">
                                    <i class="far fa-check-circle"></i>
                                    <span>Automotive service our clients receive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Strategy Growth <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finance Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Investment Policy <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Tax Managment <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized download service">
                        <div class="wized-header">
                            <h5 class="title">Nos Chassis</h5>
                        </div>
                        <div class="wized-body">
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="{{ asset('assets/images/custom/icon/10.svg') }}" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        PVC
                                    </h6>

                                </div>

                                <a class=" rts-btn btn-primary" href="{{ route('pages',['type'=>'chassis','subType'=>"pvc"]) }}"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="{{ asset('assets/images/custom/icon/10.svg') }}" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        ALUMINIUM
                                    </h6>

                                </div>
                                <a class=" rts-btn btn-primary" href="{{ route('pages',['type'=>'chassis','subType'=>"alu"]) }}"><i class="fal fa-arrow-right"></i> </a>
                            </div>
                            <!-- single downlaod area End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    @include('components.contact_card')
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- End service details area -->
@endsection

@extends('Layouts.app')

@section('title')
    Home Seven (Business Consultant)
@endsection


@section('content')
    @include('components.header')
    <!-- start breadcrumb area -->

<div id="anywhere-home"></div>
<!-- ENd Header Area -->

<!-- rts banner area start -->
<div class="rts-banner-area banner-human-bg rts-section-gap" style="background-image: url({{asset('/assets/images/custom/default/pergolas/pergolas_main2.jpg')}}); width: 100%; max-height: 90vh;object-fit: contain;">
    <div class="shape">
        <img src="{{ asset('assets/images/custom/shape/h7-banner.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- banner area inner six -->
                <div class="banner-inner-six">
                    <h1 class="title mb--30">
                        <span class="pre">Découvrez</span> <br>
                        votre <span class="primary">espace d'ombre.</span>
                    </h1>
                    <p class="disc">
                        Experts en création et installation de pergolas pour sublimer vos extérieurs.
                    </p>
                    <a href="#" class="rts-btn btn-primary-5 style-six rounded-2 seven">Créer votre projet</a>
                </div>

                <!-- banner area inner six end -->
            </div>
        </div>
    </div>
</div>
<!-- rts banner area end -->

<!-- rts service area start -->
<div class="rts-service-area home-seven rts-section-gap">
    <div class="shape-business-service">
        <img src="{{ asset('assets/images/service/icon/shape-1.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-with-btn-home-6">

                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Harmonie et Confort Extérieur</span>
                            <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Ensemble, <br>
                            transformons vos extérieurs.
                        </h2>
                    </div>
                    <a href="#" class="rts-btn btn-primary-5">Découvrez nos réalisations <i
                            class="fal fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--80">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        Design Personnalisé
                    </h5>
                    <p class="disc">
                        Conception sur-mesure pour des pergolas qui s'adaptent parfaitement à vos envies et à votre espace.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/23.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        Confort Optimal
                    </h5>
                    <p class="disc">
                        Protégez-vous du soleil tout en créant un espace chaleureux et accueillant à l'extérieur.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-single-style-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/24.svg') }}" alt="service_icon">
                    </div>
                    <h5 class="title">
                        Installation Clé en Main
                    </h5>
                    <p class="disc">
                        Une équipe d'experts pour une installation rapide et professionnelle.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service area end -->

<div class="bg-shape-wrapper-main">
    <!-- rts about area start -->
    <div class="rts-about-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">About Us</span>
                            <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Découvrez la solution <br>
                            parfaite pour vos extérieurs
                        </h2>
                    </div>
                    <div class="about-content-inner-style-six">
                        <p class="disc">
                            Nous concevons et installons des pergolas sur-mesure pour créer des espaces uniques, élégants et fonctionnels qui s’intègrent parfaitement à votre habitat.
                        </p>
                        <div class="item-check-inner">
                            <div class="single-col">
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Pergolas sur-mesure pour tous les styles
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Matériaux de haute qualité et durabilité
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Experts en design et installation
                                </div>
                            </div>
                            <div class="single-col">
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Solutions adaptées à votre budget

                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Confort et élégance assurés
                                </div>
                                <div class="single-check">
                                    <i class="fas fa-check-circle"></i>
                                    Service client réactif et professionnel
                                </div>
                            </div>
                        </div>
                        <div class="contact-inner-about">
                            <div class="single-left">
                                <img src="{{ asset('assets/images/about/main/user/04.png') }}" alt="user">
                                <div class="details-area">
                                    <h6 class="title">
                                        Manu Potvin
                                    </h6>
                                    <span class="designation">
                                        Expert & Gérant
                                    </span>
                                </div>
                            </div>
                            <div class="single-right">
                                <img src="{{ asset('assets/images/custom/icon/05.png') }}" alt="call">
                                <div class="details-area">
                                    <span></span>
                                    <a href="#" class="number ">
                                        {{$customerData->phone}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img src="{{ asset('assets/images/custom/default/pergolas/pergolas_second.jpeg') }}" alt="about-image" style="width: 40vw"  >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


    <!-- working process start -->
    <div class="rts-working-process rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-style-six text-center">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Work Process</span>
                            <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Pourquoi nous choisir ?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--20">
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Étape 1 : Imaginez votre espace
                        </h5>
                        <p class="disc">
                            Visualisez l’espace extérieur de vos rêves et laissez-nous le concrétiser avec style et fonctionnalité.
                        </p>

                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/23.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Étape 2 : Consultation avec nos experts
                        </h5>
                        <p class="disc">
                            Discutez de vos besoins et de vos attentes avec nos spécialistes en pergolas sur-mesure.
                        </p>

                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/24.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Étape 3 : Personnalisez votre projet
                        </h5>
                        <p class="disc">
                            Choisissez les matériaux, couleurs et finitions pour une pergola parfaitement adaptée à votre style.
                        </p>
                    </div>
                    <!-- single-service area end -->
                </div>
                <div class="col-xl-3 col-md-4">
                    <!-- single-service area start -->
                    <div class="rts-single-service-style-process text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/service/icon/22.svg') }}" alt="">
                        </div>
                        <h5 class="title">
                            Étape 4 : Profitez de votre nouvel espace
                        </h5>
                        <p class="disc">
                            Notre équipe installe rapidement et professionnellement votre pergola. Installez-vous et profitez.
                        </p>
                    </div>
                    <!-- single-service area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- working process end -->

</div>

<!-- team area start -->
<div class="rts-team-area-style-six rts-section-gap">
    <div class="team-bg-image-style-six">
        <img src="{{ asset('assets/images/team/bg-02.png') }}" alt="bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-style-six text-center">
{{--                    <div class="pre-title">--}}
{{--                        <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">--}}
{{--                        <span class="pre">Team Members</span>--}}
{{--                        <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">--}}
{{--                    </div>--}}
                    <h2 class="title color-white">
{{--                        Finbiz Professionals--}}
                    </h2>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- team area end -->

<!-- rts portfolio area start -->
<div class="rts-portfolio-area mt-decress rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-with-btn-home-6 portfolio-area">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Évolution de vos Extérieurs</span>
                            <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title-clear">
                            Ensemble, <br>
                            concevons l’espace de vos rêves
                        </h2>
                    </div>
{{--                    <div class="tab-buttons-portfolio">--}}
{{--                        <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Financial </button>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Human </button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
        <div class="row mt--70">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-5">
                            <div class="col-lg-4">
                                <!-- single business case -->
                                @include('components.portfolio.pergolas_element')
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                @include('components.portfolio.pergolas_element')
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2 style-home-7S">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts portfolio area end -->

<!-- start call to action area -->
<div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-two-wrapper">
                    <div class="title-area">
                        <h3 class="title">Une envie, un projet ?
                            Un rêve à réaliser ...</h3>
                    </div>
                    <a class="rts-btn btn-primary-5" href="{{ route('contactPage') }}">Contactez nous</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end call to action area -->

<div class="bg-shape-wrapper-two">
    <!-- customers testimonials start -->
    @include('components.portfolio.testimonials')
    <!-- customers testimonials end -->

    <!-- business progress area start -->
    <div class="business-progress-area rts-section-gapBottom">
        <div class="box">
            <img src="{{ asset('assets/images/business-goal/icon/box.png') }}" alt="box">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumbnail-progress-7">
                        <img src="{{ asset('assets/images/business-goal/05.png') }}" alt="progress">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area-style-six text-start">
                        <div class="pre-title">
                            <img src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                            <span class="pre">Business Progress</span>
                            <img class="two" src="{{ asset('assets/images/custom/shape/pre-title.png') }}" alt="pre-title">
                        </div>
                        <h2 class="title">
                            Transformez vos extérieurs avec nos pergolas sur-mesure
                        </h2>
                    </div>
                    <div class="inner-goal-progress-7">
                        <p class="disc">
                            Créez un espace extérieur unique grâce à nos pergolas personnalisées. Que ce soit pour profiter de l'ombre, ajouter du style ou améliorer votre confort, nous avons la solution parfaite pour répondre à vos besoins. Nos experts vous accompagnent à chaque étape, de la conception à l'installation.
                        </p>
                        <div class="row mb--50 g-5">

                            <div class="col-lg-6">
                                <div class="left-business-goal">
                                    <div class="left">
                                        <h4 class="title">
                                            98%
                                        </h4>
                                        <p class="dsic">
                                            Satisfaction Client
                                        </p>
                                    </div>
                                    <div class="right">
                                        <img src="{{ asset('assets/images/business-goal/icon/05.svg') }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="rts-btn btn-primary-5">Collaborons dès maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business progress area end -->

</div>

<!-- start footer area -->
 @include('components.footer')
<!-- ENd footer Area -->

@endsection

@extends('Layouts.app')

@section('title')
    Pergolas sur-mesure | Installation et Design
@endsection
@section('meta_description')
    Découvrez nos pergolas sur-mesure à Hannut. Profitez d'un design élégant et d'une installation clé en main pour transformer vos extérieurs. Contactez Manu Potvin dès aujourd'hui !
@endsection
@section('meta_keywords')
  pergolas sur-mesure, installation de pergolas, pergolas Hannut, pergolas Waremme, pergolas Braives, pergolas Lincent, pergolas Orp-Jauche, pergolas Jodoigne, design extérieur, pergolas aluminium, pergolas PVC
@endsection
@section('og_title', 'Pergolas sur mesure - Style et confort pour votre extérieur')
@section('og_description', 'Nos pergolas offrent style et confort pour vos espaces extérieurs. Découvrez nos modèles personnalisables.')
@section('og_image', asset('/assets/images/custom/default/pergolas/pergolas_main2.jpg'))
@section('twitter_title', 'Pergolas sur mesure - Style et confort')
@section('twitter_description', 'Explorez nos pergolas modernes pour des espaces extérieurs élégants et fonctionnels.')
@section('twitter_image', asset('/assets/images/custom/default/pergolas/pergolas_main2.jpg'))


@section('content')
    @php
        $category = \App\Enums\Categories::PERGOLAS->value;
    @endphp
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
                                @foreach (\App\Models\Realisation::whereJsonContains('category',$category)->get() as $realisation)
                            <div class="col-lg-4">
                                <!-- single business case -->
                                @include('components.portfolio.pergolas_element')
                                <!-- single business case End -->
                            </div>
                            @endforeach
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

</div>

<!-- Section des liens SEO locaux -->
<x-local-seo-links :pageType="'pergolas'" :currentLocation="$seoLocation ?? null" />

<!-- start footer area -->
 @include('components.footer')
<!-- ENd footer Area -->

@endsection

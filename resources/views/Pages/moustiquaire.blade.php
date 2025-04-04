@extends('Layouts.app')

@section('title')
    Moustiquaires
@endsection
@section('meta_description', 'Protégez votre intérieur des insectes tout en laissant entrer la lumière avec nos moustiquaires sur mesure.')
@section('meta_keywords', 'moustiquaires, protection insectes, lumière naturelle, sur mesure')
@section('og_title', 'Moustiquaires sur mesure - Confort et protection')
@section('og_description', 'Nos moustiquaires sont conçues pour offrir protection et confort tout en préservant la lumière naturelle.')
@section('og_image', asset('/assets/images/custom/default/moustiquaire/moustiquaire_main.jpeg'))
@section('twitter_title', 'Moustiquaires - Protection et Lumière')
@section('twitter_description', 'Protégez-vous des insectes tout en profitant de la lumière naturelle avec nos moustiquaires.')
@section('twitter_image', asset('/assets/images/custom/default/moustiquaire/moustiquaire_main.jpeg'))

@section('content')
    @php
        $category = \App\Enums\Categories::MOUSTIQUAIRES->value;
    @endphp
    @include('components.header')
    <!-- start breadcrumb area -->



    <div class="swiper-banner-main-wrapper-13">
        <div class="swiper mySwiper-13">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area rts-section-gap banner-bg-11 bg_image" style="background-image: url({{asset('/assets/images/custom/default/moustiquaire/moustiquaire_main.jpeg')}}); width: 100%; max-height: 90vh;object-fit: contain;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">

                                        <h1 class="title-main">
                                            Fabrication et Installation de
                                            <br> Moustiquaires Sur-Mesure
                                        </h1>
                                        <p class="disc">
                                            Protégez votre maison des insectes avec nos moustiquaires robustes, durables et élégantes. </p>
                                        <a href="{{route('contactPage')}}" class="rts-btn btn-primary header-one-btn quote-btn">Demandez un devis gratuit</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>


    </div>


    @include('components.contact-response-flash')

    <!-- rts about area start -->
    <div class="rts-about-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-left-content-area-12">
                        <div class="title-wrapper-twelve center">
                            <h2 class="title">
                                Présentation de nos services.
                            </h2>
                        </div>
                        <p class="disc">
                            Nous concevons et installons des moustiquaires sur mesure pour vos fenêtres, portes et espaces extérieurs. Fabriquées avec des matériaux de haute qualité, nos moustiquaires offrent une protection optimale contre les moustiques tout en garantissant la circulation de l’air et une excellente visibilité.
                        </p>
                        <div class="business-progress-area">
                            <div class="right-title">
                                <h6 class="title">Personnalisable :</h6>
                                <p class="disc">
                                    Adaptées à toutes les dimensions et types d’ouvertures.
                                </p>
                            </div>
                        </div>
                        <div class="business-progress-area">
                            <div class="right-title">
                                <h6 class="title">Qualité Supérieure :</h6>
                                <p class="disc">
                                    Matériaux résistants et durables pour un usage longue durée.
                                </p>
                            </div>
                        </div>
                        <div class="business-progress-area">
                            <div class="right-title">
                                <h6 class="title">Esthétique :</h6>
                                <p class="disc">
                                    Designs élégants et discrets pour s’intégrer parfaitement à votre intérieur.
                                </p>
                            </div>
                        </div>
                        <div class="business-progress-area">
                            <div class="right-title">
                                <h6 class="title">Installation Professionnelle :</h6>
                                <p class="disc">
                                    Pose rapide et soignée par notre équipe expérimentée.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-area-about-12">
                        <div class="thumbnail-large">
                            <img src="{{ asset('assets/images/custom/default/moustiquaire/moustiquaire_second.jpeg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


    @include('components.cta-contact')


    <!-- service area start -->
    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">

                        <h2 class="title">Types de Moustiquaires</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single service for home six -->
                    <div class="single-service-home-six">

                        <div class="inner">
                            <h5 class="title">
                                Moustiquaires Fixes
                            </h5>
                            <p class="disc">
                                Idéales pour les fenêtres standards. Solution économique et simple à installer.
                            </p>

                        </div>
                    </div>
                    <!-- single service for home six End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single service for home six -->
                    <div class="single-service-home-six">

                        <div class="inner">
                            <h5 class="title">
                                Moustiquaires Enroulables
                            </h5>
                            <p class="disc">
                                Pratiques et modernes, elles s’adaptent à vos fenêtres et portes. Faciles à manipuler au quotidien. </p>
                        </div>
                    </div>
                    <!-- single service for home six End -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single service for home six -->
                    <div class="single-service-home-six">
                        <div class="inner">
                            <h5 class="title">
                                Moustiquaires Coulissantes </h5>
                            <p class="disc">
                                Parfaites pour les baies vitrées et portes coulissantes. Fonctionnement fluide et silencieux. </p>

                        </div>
                    </div>
                    <!-- single service for home six End -->
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- easy steps area start -->
    <div class="easy-steps-area rts-section-gap bg-yello-light">
        <div class="container">
            <div class="row">
                <div class="text-center title-area-nine">
                    <h2 class="title">Processus d’installation en 3 étapes</h2>
                </div>
            </div>
            <div class="row mt--50 g-5">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">

                        <div class="body">
                            <span>01</span>
                            <h4 class="title">Prise de mesure gratuite</h4>
                            <p class="disc">
                                Nous analysons vos besoins et prenons les mesures précises.
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">

                        <div class="body">
                            <span>02</span>
                            <h4 class="title">Fabrication sur-mesure</h4>
                            <p class="disc">
                                Production de moustiquaires adaptées à vos besoins.
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">
                        <div class="body">
                            <span>03</span>
                            <h4 class="title">Installation pro.</h4>
                            <p class="disc">
                                Pose réalisée par des experts pour une finition impeccable.
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>

            </div>
        </div>
    </div>
    <!-- easy steps area end -->


    <!-- Our Business case style start -->
    <div class="rts-business-case-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-business-case-3">
                        <div class="title-area">
                            <h2 class="title">Nos Dernières Réalisations</h2>
                        </div>
                        <a class="rts-btn btn-primary  color-h-black" href="{{ route('contactPage') }}">Travaillons ensemble... </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--65">
            <div class="row g-5">
                <div class="swiper mySwiperh3_business-case">
                    <div class="swiper-wrapper">
                        @foreach(    \App\Models\Realisation::whereJsonContains('category',$category)->get() as $realisation)
                            <div class="swiper-slide">
                                <!-- single case study -->
                                <div class="rts-cse-study-3-wrapper">
                                    <div class="thumbnail">
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="thumbnail"  target="_blank">
                                            {!! $realisation->image !!}
                                        </a>
                                        <div class="content">
                                            <div class="content-wrap">
                                                <a href="{{ route('pages.details',['realisation'=>$realisation]) }}">
                                                    <h5 class="title">{{$realisation->title}}</h5>
                                                </a>
                                                <span>Business Strategy</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="over_link"></a>
                                    </div>
                                </div>
                                <!-- single case study End -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Business case style End -->




    <div class="rts-contact-area rts-section-gap bg-dream contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one" style="min-height: 500px;">
                        <img src="{{ asset('assets/images/custom/default/moustiquaire/moustiquaire_7_last.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact text-start">
                            <h2 class="title">Demandez votre devis gratuit</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" action="{{route('contact.send-form')}}" method="POST">
                        @include('components.contact_inputs',['submitLabel' => 'Envoyer maintenant !'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="anywhere-home" class=""></div>

    <!-- Section des liens SEO locaux -->
    <x-local-seo-links :pageType="'fenetres'" :currentLocation="$seoLocation ?? null" />

    <!-- footer area start -->
    @include('components.footer')
    <!-- footer area end -->
@endsection

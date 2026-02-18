@extends('Layouts.app')

@section('title')
    {{ $seoPageTitle ?? 'Installation de portes de garage à Hannut et Waremme' }}
@endsection

@section('meta_description', $seoMetaDescription ?? 'Spécialiste en installation et réparation de portes de garage à Hannut, Waremme et Jodoigne. Solutions motorisées sur mesure pour votre sécurité et confort. Devis gratuit !')
@section('meta_keywords', $seoMetaKeywords ?? 'portes de garage Hannut, installation portes motorisées Waremme, réparation portes garage Jodoigne, portes sectionnelles Liège')
@section('geo_placename', $seoLocation ?? 'Hannut')
@section('og_title', $seoPageTitle ? $seoPageTitle . ' | Manu Potvin' : 'Installation de portes de garage à Hannut et Waremme')
@section('og_description', $seoMetaDescription ?? 'Découvrez nos portes de garage robustes et élégantes, installées par nos experts à Hannut, Waremme et dans toute la province de Liège.')
@section('og_image', asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))
@section('twitter_title', $seoPageTitle ? $seoPageTitle . ' | Manu Potvin' : 'Portes de garage à Hannut et Waremme')
@section('twitter_description', $seoMetaDescription ?? 'Choisissez des portes de garage esthétiques et fiables, installées par nos experts à Hannut, Waremme et Jodoigne.')
@section('twitter_image', asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg'))

@section('preload')
<link rel="preload" as="image" href="{{ asset('assets/images/custom/default/portes-de-garage/porte_garage_main.jpeg') }}">
@endsection

@section('content')
    @include('components.service-schema', [
        'serviceName' => 'Installation de portes de garage',
        'serviceType' => 'Installation et réparation de portes de garage',
        'description' => 'Installation, réparation et motorisation de portes de garage à Hannut, Waremme et Jodoigne. Portes sectionnelles, basculantes et enroulables sur mesure pour votre sécurité et confort.',
    ])
    @php
        $category = \App\Enums\Categories::PORTE_DE_GARAGE->value;
    @endphp

    @include('components.header')
    <!-- start breadcrumb area -->


    <div id="anywhere-home"></div>

    <!-- banner area start three -->
    <div class="rts-banner-area banner-three banner-four banner-five" style="background-image: url({{asset('/assets/images/custom/default/portes-de-garage/porte_garage_main.jpeg')}}); max-height: 90vh;width: auto ;object-fit: contain;">
        <div class=" bg_banner-three bg_banner-four bg_image rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-three-inner banner-four-inner banner-five-inner">
                            <div class="banner-title">
                                <span class="subtitle-banner"><strong>INSTALLATION DE PORTES DE GARAGE À {{ $seoLocation ?? 'HANNUT ET WAREMME' }}</strong></span>
                                <!-- type headline start-->
                                <h1 class="title">
                                    Optimisez votre
                                    <br>
                                    <div class="changebox">
                                        <span>esthétique</span>
                                        <br>
                                        <span>confort</span><br>
                                        <span>performance énergétique</span>
                                        <br>
                                        <span>sécurité</span><br>
                                    </div>
                                    avec nos
                                    <br> portes de garage à {{ $seoLocation ?? 'Hannut' }}
                                </h1>
                            </div>
                            <p class="disc" style="color: var(--color-primary-alta)">
                                Basés à Hannut, nous intervenons également à Waremme, Jodoigne et dans toute la province de Liège<br>
                                pour vous offrir des portes de garage performantes, sécurisées et esthétiques
                            </p>
                            <div class="button-group">
                                <a href="{{ route('contactPage') }}" class="rts-btn btn-primary-3 btn-primary-4">Devis gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end three -->

    <!-- leading business solution area -->
    <div class="rts-business-solution rts-business-solution5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 first-child">
                    <div class="rts-business-solution-right">
                        <div class="title-area">
                            <span class="sub">
                                Nos services à {{ $seoLocation ?? 'Hannut et Waremme' }}
                            </span>
                            <h2 class="title">
                                Votre solution parfaite pour portes de garage
                            </h2>
                        </div>
                        <div class="content-area">
                            <p class="disc">
                                Nos portes de garage combinent sécurité, design et performance. Que ce soit pour votre maison à Hannut ou votre entreprise à Waremme, nos experts vous proposent la solution idéale adaptée à vos besoins spécifiques.
                            </p>
                            <!-- single business solution -->
                            <div class="single-business-solution-2">
                                <div class="content">
                                    <h6 class="title">
                                        Avec plus de 20 ans d'expérience dans la région de Hannut et Waremme, nous installons des portes de garage robustes, esthétiques et parfaitement adaptées à votre habitation.
                                    </h6>
                                </div>
                            </div>
                            <!-- single business solution end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- business solution left -->
                    <div class="rts-business-solution-left">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/custom/default/portes-de-garage/porte_garage_main_2.jpeg') }}" alt="Installation de porte de garage à {{ $seoLocation ?? 'Hannut' }} par Manu Potvin" loading="lazy">
                        </div>
                    </div>
                    <!-- business solution left End -->
                </div>
            </div>
        </div>
    </div>
    <!-- leading business solution area End -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Une envie, un projet ? Un rêve à réaliser ...</h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Contactez nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- business goal area -->
    <div class="rts-business-goal rts-business-goal5 mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="title-area">
                        <span class="sub">
                            Manu Potvin
                        </span>
                        <h2 class="title">
                            L'expertise en portes de garage
                            <br> pour un confort quotidien
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <!-- business goal left -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 first-child">
                    <ul class="content-box first">
                        <li class="content left">
                            <h5 class="main-title">Installation</h5>
                            <p class="desc">Installation rapide et efficace de portes de garage, adaptée à vos besoins et à votre espace.
                            </p>
                        </li>
                        <li class="content left one">
                            <h5 class="main-title">Solutions sur mesure</h5>
                            <p class="desc">Des portes de garage conçues pour offrir à la fois sécurité et esthétique, personnalisées selon vos préférences.
                            </p>
                        </li>
                        <li class="content left">
                            <h5 class="main-title">Maintenance</h5>
                            <p class="desc">Service de maintenance pour garantir la longévité et la performance de vos portes de garage.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="business-goal-one">
                        <img src="{{ asset('assets/images/custom/default/portes-de-garage/porte_garage_second.jpeg') }}" alt="Business_Goal" loading="lazy">
                        <div class="shape">
                            <img src="{{ asset('assets/images/business-goal/icon/line.png') }}"
                                    alt="">
                        </div>
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="content-box last">
                        <li class="content right">
                            <h5 class="main-title">Réparation</h5>
                            <p class="desc">Réparation rapide et professionnelle pour remettre vos portes en parfait état de fonctionnement.
                            </p>
                        </li>
                        <li class="content right two">
                            <h5 class="main-title">Produits de qualité</h5>
                            <p class="desc">Vente de portes de garage robustes et performantes, pour tous les types de garages.
                            </p>
                        </li>
                        <li class="content right">
                            <h5 class="main-title">Conseils personnalisés</h5>
                            <p class="desc">Des experts à votre service pour vous conseiller sur le choix de la porte de garage idéale selon vos besoins.
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- testimonials area start -->
    @include('components.home.testimonials')
    <!-- testimonials area end -->
            <!-- business case start -->
    <div class="rts-business-case rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-area text-center business-case business-case5">
                    <span>Manu Potvin</span>
                    <h2 class="title">Nos réalisations</h2>
                </div>
            </div>
        </div>
        <div class="container-cusiness-case-h2 mt--50">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiperh2_Business_Cases">
                        <div class="swiper-wrapper">
                            @foreach(    \App\Models\Realisation::whereJsonContains('category',$category)->get() as $realisation)
                                <div class="swiper-slide">
                                    <!-- single business case -->
                                    <div class="rts-business-case-s-2">
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="thumbnail"  target="_blank">
                                            {!! $realisation->image !!}
                                        </a>
                                        <div class="inner">
                                            <a href="{{  route('pages.details',['realisation'=>$realisation]) }}"  target="_blank">
                                                <h5 class="title">
                                                    {{$realisation->title}}
                                                </h5>
                                            </a>
                                            <span>{{$realisation->description}}</span>
                                        </div>
                                        <a href="{{ route('pages.details',['realisation'=>$realisation]) }}" class="over_link"  target="_blank"></a>
                                    </div>
                                    <!-- single business case End -->
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business case End -->


    @include('components.faq-section', ['faqs' => [
        ['question' => 'Quels types de portes de garage installez-vous ?', 'answer' => 'Nous installons des portes de garage sectionnelles, basculantes, enroulables et latérales. Les portes sectionnelles sont les plus populaires car elles n\'empiètent ni sur l\'allée ni sur l\'espace intérieur du garage. Chaque type est disponible en plusieurs matériaux et finitions.'],
        ['question' => 'Peut-on motoriser une porte de garage existante ?', 'answer' => 'Oui, dans la plupart des cas, il est possible d\'ajouter une motorisation à une porte de garage existante. Nous évaluons l\'état de votre porte et son mécanisme pour vous proposer la solution de motorisation la plus adaptée, avec télécommande et système de sécurité intégré.'],
        ['question' => 'Une porte de garage motorisée est-elle bien isolante ?', 'answer' => 'Nos portes de garage sectionnelles sont constituées de panneaux à double paroi avec mousse polyuréthane isolante, offrant d\'excellentes performances thermiques (coefficient U jusqu\'à 1,0 W/m²K). Cela contribue à réduire les pertes de chaleur, surtout si votre garage communique avec votre habitation.'],
        ['question' => 'Quelles sont les mesures de sécurité des portes motorisées ?', 'answer' => 'Nos portes motorisées intègrent plusieurs dispositifs de sécurité : détection d\'obstacles par cellules photoélectriques, système anti-chute, verrouillage automatique et déverrouillage manuel en cas de panne de courant. Ces équipements sont conformes aux normes européennes de sécurité.'],
        ['question' => 'Quelles dimensions de portes de garage proposez-vous ?', 'answer' => 'Nous proposons des portes de garage en dimensions standard (largeur de 2,40 m à 3 m, hauteur de 2 m à 2,50 m) ainsi que des fabrications sur-mesure pour s\'adapter à toutes les configurations de garage, y compris les ouvertures non standard.'],
        ['question' => 'Quel est le délai d\'installation d\'une porte de garage ?', 'answer' => 'L\'installation d\'une porte de garage standard prend généralement une demi-journée à une journée complète. Le délai de livraison après commande est de 4 à 8 semaines selon le modèle et les options choisies.'],
    ]])

    <!-- Section des liens SEO locaux -->
    <x-local-seo-links :pageType="'portes'" :currentLocation="$seoLocation ?? null" />

    <!-- start footer area -->
    @include('components.footer')
    <!-- ENd footer Area -->
@endsection

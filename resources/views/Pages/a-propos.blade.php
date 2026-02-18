@extends('Layouts.app')

@section('title')
    À propos de Manu Potvin - Votre expert en châssis et menuiserie
@endsection
@section('meta_description', 'Découvrez Manu Potvin, spécialiste en installation de châssis, portes, fenêtres, pergolas et moustiquaires à Hannut, Waremme, Jodoigne et environs. Plus de 20 ans d\'expérience.')
@section('meta_keywords', 'Manu Potvin, à propos, châssis Hannut, menuiserie Waremme, expert fenêtres Jodoigne')
@section('og_title', 'À propos - Manu Potvin | Expert en châssis et menuiserie extérieure')
@section('og_description', 'Spécialiste en installation de châssis, portes, fenêtres et pergolas dans la région de Hannut, Waremme et Jodoigne. Découvrez notre histoire et nos valeurs.')
@section('twitter_title', 'À propos - Manu Potvin | Expert châssis et menuiserie')
@section('twitter_description', 'Plus de 20 ans d\'expérience en installation de châssis, portes, fenêtres et pergolas à Hannut, Waremme et environs.')

@section('content')
    @include('components.header')

    <x-breadcrump
        title="À propos de Manu Potvin"
        breadcrumbPath="À propos"
    />

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="blog-listing-content">

                            <h1>Manu Potvin - Votre expert en menuiserie extérieure</h1>
                            <p class="disc">
                                Basée à <strong>Hannut</strong>, l'entreprise <strong>{{ $customerData->name }}</strong> est spécialisée dans l'installation, le remplacement et la réparation de châssis, portes, fenêtres, pergolas, portes de garage et moustiquaires. Avec plus de 20 ans d'expérience dans le secteur de la menuiserie extérieure, nous mettons notre savoir-faire au service de votre confort et de la valorisation de votre habitation.
                            </p>

                            <h2 class="mt--40">Notre histoire et nos valeurs</h2>
                            <p class="disc">
                                Fondée avec la passion du travail bien fait, notre entreprise s'est construite sur des valeurs fortes : la qualité, la proximité et l'engagement envers chaque client. Nous croyons qu'un projet de rénovation réussi repose sur l'écoute, le conseil personnalisé et une exécution irréprochable.
                            </p>
                            <p class="disc">
                                Chaque chantier est unique, et nous prenons le temps de comprendre vos besoins pour vous proposer la solution la plus adaptée, que ce soit en termes de matériaux (PVC, aluminium), de design ou de budget. Notre objectif : votre entière satisfaction.
                            </p>

                            <h2 class="mt--40">Notre zone d'intervention</h2>
                            <p class="disc">
                                Nous intervenons dans un large périmètre autour de Hannut, couvrant notamment :
                            </p>
                            <div class="row g-5 mt--10 mb--40">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Hannut</strong> et ses environs</p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Waremme</strong></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Jodoigne</strong></p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Orp-Jauche</strong></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Braives</strong></p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p><strong>Hélécine</strong></p>
                                    </div>
                                </div>
                            </div>
                            <p class="disc">
                                Nous nous déplaçons également dans les communes voisines de la province de Liège et du Brabant wallon. N'hésitez pas à nous contacter pour vérifier si nous intervenons dans votre localité.
                            </p>

                            <h2 class="mt--40">Nos services</h2>
                            <p class="disc">
                                Notre expertise couvre l'ensemble de la menuiserie extérieure pour les particuliers :
                            </p>
                            <div class="row g-5 mt--10 mb--40">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-details-card">
                                        <div class="details">
                                            <h6 class="title"><a href="{{ route('pages', ['type' => 'portes-fenetres-chassis']) }}">Châssis, portes et fenêtres</a></h6>
                                            <p class="disc">Installation et remplacement de châssis en PVC et aluminium pour une isolation thermique et acoustique optimale.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-details-card">
                                        <div class="details">
                                            <h6 class="title"><a href="{{ route('pages', ['type' => 'pergolas']) }}">Pergolas</a></h6>
                                            <p class="disc">Conception et installation de pergolas sur-mesure pour sublimer vos espaces extérieurs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-details-card">
                                        <div class="details">
                                            <h6 class="title"><a href="{{ route('pages', ['type' => 'porte-de-garage']) }}">Portes de garage</a></h6>
                                            <p class="disc">Installation de portes de garage motorisées et sectionnelles alliant sécurité et esthétique.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-details-card">
                                        <div class="details">
                                            <h6 class="title"><a href="{{ route('pages', ['type' => 'moustiquaire']) }}">Moustiquaires</a></h6>
                                            <p class="disc">Fabrication et pose de moustiquaires sur-mesure pour protéger votre intérieur des insectes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt--40">Notre engagement qualité</h2>
                            <p class="disc">
                                Chez {{ $customerData->name }}, la qualité n'est pas un simple mot : c'est notre engagement quotidien. Nous sélectionnons rigoureusement nos fournisseurs et matériaux pour garantir des produits durables et performants. Chaque installation est réalisée dans les règles de l'art par notre équipe expérimentée.
                            </p>
                            <p class="disc">
                                Nous vous accompagnons de A à Z : du conseil initial à la prise de mesures, en passant par l'installation et le service après-vente. Votre satisfaction est notre priorité absolue.
                            </p>

                            <div class="rts-quote-area text-center mt--40">
                                <h5 class="title">"Notre mission : améliorer votre confort au quotidien grâce à des solutions de menuiserie extérieure sur-mesure, durables et esthétiques."</h5>
                            </div>

                            <h2 class="mt--40">Contactez-nous</h2>
                            <p class="disc">
                                Vous avez un projet de rénovation ou d'installation ? Demandez votre devis gratuit et sans engagement.
                            </p>
                            @isset($customerData)
                            <div class="row g-5 mt--10 mb--40">
                                @if($customerData->phone)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-phone"></i>
                                        <p><a href="tel:{{ $customerData->phone }}">{{ $customerData->phone }}</a></p>
                                    </div>
                                </div>
                                @endif
                                @if($customerData->email)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-envelope"></i>
                                        <p><a href="mailto:{{ $customerData->email }}">{{ $customerData->email }}</a></p>
                                    </div>
                                </div>
                                @endif
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature-one">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <p>{!! $customerData->address !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endisset
                            <div class="text-center mt--20 mb--40">
                                <a href="{{ route('contactPage') }}" class="rts-btn btn-primary-5">Demander un devis gratuit</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

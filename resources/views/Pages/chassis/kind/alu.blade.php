@extends('Layouts.app')


@section('title')
    Châssis Alu - Durable, Écologique, et Performant
@endsection

@section('meta_description')
    Châssis aluminium à Hannut et Waremme : design moderne, lignes fines et robustesse exceptionnelle. Installation et remplacement par Manu Potvin.
@endsection
@section('meta_keywords', 'châssis aluminium, design moderne, durabilité, performance')
@section('og_title', 'Châssis Aluminium - Élégance et Durabilité')
@section('og_description', 'Les châssis en aluminium allient élégance et robustesse pour vos projets.')
@section('og_image', asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg'))
@section('twitter_title', 'Châssis Aluminium - Performance et Style')
@section('twitter_description', 'Découvrez nos châssis en aluminium pour un style contemporain et des performances supérieures.')
@section('twitter_image', asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg'))

@section('content')
    @php
        $category = \App\Enums\Categories::CHASSIS->value;
    @endphp
    @include('components.header')
    <!-- start breadcrumb area -->
    <x-breadcrump
            title="Châssis Alu"
            breadcrumbPath="Châssis.Aluminium"
    />
    <!-- end breadcrumb area -->

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg') }}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                            </div>
                            <h2>Pourquoi Choisir des Châssis en Aluminium ?</h2>
                            <p>
                                Les châssis en aluminium sont un choix idéal pour les projets modernes grâce à leur design élégant, leur robustesse et leur durabilité exceptionnelle. En plus d’offrir un entretien minimal, ils sont respectueux de l’environnement et garantissent une performance énergétique optimale.
                            </p>

                            <!-- start customers faq section -->
                            <div class="mb--10">
                                    <div class="row g-5 align-items-center">
                                        <div class="">
                                            <div class="title-area">
                                                <h2 class="title">Avantages des Châssis en en Aluminium&nbsp;:</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2">
                                            <div class="accordion-area">

                                                <div class="accordion-one-inner">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    <span>01.</span> Robustesse et longévité
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Les châssis en aluminium résistent aux conditions climatiques les plus extrêmes, assurant une durabilité inégalée au fil des années.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <span>02.</span> Design élégant et moderne
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Avec leur finition épurée et leurs lignes fines, les châssis en aluminium ajoutent une touche de sophistication à tout type d’architecture.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <span>03.</span> Isolation thermique et acoustique performante
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Grâce aux technologies avancées, les châssis en aluminium offrent une excellente isolation tout en maintenant un confort optimal à l’intérieur.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <span>04.</span> Recyclables et écologiques
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Fabriqués à partir de matériaux recyclables, ils constituent une option durable et respectueuse de l’environnement.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <span>05.</span> Disponibles dans une large gamme de couleurs et finitions
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Les châssis en aluminium sont hautement personnalisables pour répondre à tous les goûts et styles architecturaux.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mx-auto text-center">
                                            <div class="thumbnail details mb-4">
                                                <img src="{{ asset('assets/images/custom/default/chassis/chassis_alu_main.jpeg') }}" alt="finbiz_buseness" class="img-fluid" loading="lazy">
                                            </div>
                                            <div class="thumbnail details">
                                                <img src="{{ asset('assets/images/custom/default/chassis/chassis_alu_second.jpeg') }}" alt="finbiz_buseness" class="img-fluid" loading="lazy">
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <!-- End customers faq section -->


                            <h3 class="mt-4 ">Un Design Polyvalent Adapté à Vos Besoins</h3>
                            <p class="disc">
                                Que vous optiez pour un style contemporain ou classique, les châssis en aluminium s’adaptent parfaitement à vos besoins. Leur conception fine et légère permet d’intégrer de grandes surfaces vitrées, maximisant ainsi l’apport de lumière naturelle.
                            </p>
                            <!-- quote area start -->
                            <div class="rts-quote-area text-center">
                                <h5 class="title">"Grâce à leur robustesse et leur esthétique moderne, les châssis en aluminium offrent une solution idéale pour ceux qui recherchent une combinaison parfaite de fonctionnalité et d’élégance."</h5>
                            </div>
                            <!-- quote area end -->



                            <div class="row  align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <!-- tags details -->
                                    <!-- tags details End -->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="details-share">
                                        <h6>Share:</h6>
                                        <button><i class="fab fa-facebook-f"></i></button>
{{--                                        <button><i class="fab fa-twitter"></i></button>--}}
{{--                                        <button><i class="fab fa-instagram"></i></button>--}}
{{--                                        <button><i class="fab fa-linkedin-in"></i></button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12">

                   @include('components.gallery',['category'=>$category])

                    @include('components.recentProjects',['category'=>$category])

                    <!-- single wizered start -->
                    @include('components.tags',['items'=> [
    "Châssis Aluminium",
    "Design Moderne",
    "Isolation Thermique",
    "Durabilité",
    "Écologique",
    "Personnalisation",
    "Finitions Élégantes",
    "Grandes Surfaces Vitrées",
    "Performance Énergétique",
    "Architecture Contemporaine"
]])
                    <!-- single wizered End -->

                    <!-- single wizered start -->
                   @include('components.contact_card')
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->
    <!-- start footer area -->
    @include('components.footer')
    <!-- ENd footer Area -->
@endsection

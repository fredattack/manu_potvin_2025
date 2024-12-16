@extends('Layouts.app')


@section('title')
    Châssis PVC - Durable, Écologique, et Performant
@endsection

@section('meta-description')
    Découvrez les avantages des châssis en PVC : durabilité, faible entretien, esthétique moderne, et performance énergétique. Contactez-nous pour une solution sur-mesure adaptée à vos besoins.
@endsection

@section('content')
    @include('components.header')
    <!-- start breadcrumb area -->
    <x-breadcrump
            title="Moustiquaires"
            breadcrumbPath="Moustiquaires"
    />

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/blog/blog-lg-1.jpg') }}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                               {{-- <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>by David Smith</span>
                                </div>
                                <!-- single infoe end -->--}}
                            </div>
                            <h2>Pourquoi Choisir des Châssis en PVC ?</h2>
                            <p>
                                Les châssis en PVC offrent de nombreux avantages pour votre maison, tels que durabilité, faible entretien, et excellente performance énergétique. Avec un entretien minimal, ils conservent leur esthétique et leur efficacité au fil des ans.
                            </p>

                            <!-- start customers faq section -->
                            <div class="mb--10">
                                    <div class="row g-5 align-items-center">
                                        <div class="">
                                            <div class="title-area">
                                                <h2 class="title">Avantages des Châssis en PVC&nbsp;:</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2">
                                            <div class="accordion-area">

                                                <div class="accordion-one-inner">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    <span>01.</span> Économiques et durable
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Les châssis en PVC se distinguent par leur incroyable rapport qualité-prix, offrant une solution durable et économique pour les habitations modernes. Résistants à l’usure, ils réduisent les coûts d’entretien tout en garantissant une isolation thermique et acoustique performante. Un choix intelligent pour un investissement à long terme, respectueux de l’environnement.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <span>02.</span> Résistants à la corrosion
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Conçus pour durer, les châssis en PVC sont naturellement résistants à la corrosion, même dans des conditions climatiques difficiles. Leur matériau robuste empêche la formation de rouille ou de dégradation, garantissant une apparence impeccable et des performances durables au fil des années
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <span>03.</span> Excellente isolation thermique et acoustique
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Les châssis en PVC offrent une isolation thermique et acoustique exceptionnelle, maintenant votre intérieur confortable toute l'année. Ils réduisent efficacement les pertes de chaleur en hiver, limitent la chaleur en été, et atténuent les nuisances sonores pour une tranquillité optimale au quotidien.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <span>04.</span> Recyclables et respectueux de l'environnement
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Les châssis en PVC allient performance et respect de l'environnement grâce à leur caractère recyclable. Fabriqués à partir de matériaux durables, ils contribuent à réduire l'empreinte écologique tout en offrant une solution moderne et écoresponsable pour votre maison.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <span>05.</span> Disponibles en plusieurs styles et couleurs
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    Polyvalents et esthétiques, les châssis en PVC sont disponibles dans une large gamme de styles et de couleurs. Que vous recherchiez un design moderne, classique ou personnalisé, ils s'adaptent parfaitement à vos goûts et à l'architecture de votre maison.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mx-auto text-center">
                                            <div class="thumbnail details mb-4">
                                                <img src="{{ asset('assets/images/blog/details/01.jpg') }}" alt="finbiz_buseness" class="img-fluid">
                                            </div>
                                            <div class="thumbnail details">
                                                <img src="{{ asset('assets/images/blog/details/02.jpg') }}" alt="finbiz_buseness" class="img-fluid">
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <!-- End customers faq section -->


                            <h3 class="mt-4 ">Un Design Adapté à Votre Intérieur</h3>
                            <p class="disc">
                                Les châssis en PVC sont personnalisables selon vos préférences. Que ce soit pour un design moderne ou traditionnel, nous offrons des solutions adaptées à vos goûts et besoins architecturaux.
                            </p>
                            <!-- quote area start -->
                            <div class="rts-quote-area text-center">
                                <h5 class="title">“Grâce à leur durabilité exceptionnelle et leur faible entretien, les châssis en PVC allient esthétique moderne et efficacité énergétique, transformant chaque maison en un espace chaleureux et accueillant.”</h5>
                            </div>
                            <!-- quote area end -->

                            <p class="disc">
                                Les châssis en PVC combinent résistance et élégance, offrant une solution optimale pour l'isolation thermique et acoustique. Avec leur entretien simplifié et leur conception durable, ils assurent une performance énergétique idéale, tout en s'adaptant à une variété de styles architecturaux. Que ce soit pour moderniser un espace ou préserver une ambiance classique, les châssis en PVC s'intègrent harmonieusement à chaque projet.
                            </p>




                            <div class="row  align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <!-- tags details -->
                                    <!-- tags details End -->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="details-share">
                                        <h6>Share:</h6>
                                        <button><i class="fab fa-facebook-f"></i></button>
                                        <button><i class="fab fa-twitter"></i></button>
                                        <button><i class="fab fa-instagram"></i></button>
                                        <button><i class="fab fa-linkedin-in"></i></button>
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

                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Gallery Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="gallery-inner">
                                <div class="row-1 single-row">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/01.png') }}" alt="Gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/02.png') }}" alt="Gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/03.png') }}" alt="Gallery"></a>
                                </div>
                                <div class="row-2 single-row">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/04.png') }}" alt="Gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/05.png') }}" alt="Gallery"></a>
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/gallery/06.png') }}" alt="Gallery"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/recent-post/01.png') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/recent-post/02.png') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/recent-post/03.png') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="#"><img src="{{ asset('assets/images/blog/details/recent-post/04.png') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="#">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                        </div>
                    </div>
                    <!-- single wizered End -->

                    <!-- single wizered start -->
                    <div class="rts-single-wized">
                        <div class="wized-header">
                            <h5 class="title">
                                Popular Tags
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="tags-wrapper">
                                <a href="#">Services</a>
                                <a href="#">Business</a>
                                <a href="#">Growth</a>
                                <a href="#">Finance</a>
                                <a href="#">UI/UX Design</a>
                                <a href="#">Solution</a>
                                <a href="#">Speed</a>
                                <a href="#">Strategy</a>
                                <a href="#">Technology</a>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-header">
                            <a href="#"><img src="{{ asset('assets/images/custom/logo/logo_full.png') }}" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Un projet en tête ? Nous sommes là pour vous aider.</h5>
                            <a class="rts-btn btn-primary" href="{{ route('contactPage') }}">Contactez-nous</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->

@endsection

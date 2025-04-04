@extends('Layouts.app')

@section('title')
    {{ $seoPageTitle ?? 'Châssis, Portes et Fenêtres' }}
@endsection
@section('location_title', $seoLocation ?? 'Waremme et environs')
@section('meta_description', $seoMetaDescription ?? 'Châssis de qualité en aluminium et PVC, adaptés à vos besoins en termes d\'isolation et de design.')
@section('meta_keywords', $seoMetaKeywords ?? 'châssis aluminium, châssis PVC, isolation, design moderne')
@section('geo_placename', $seoLocation ?? 'Waremme')
@section('og_title', $seoPageTitle ? $seoPageTitle . ' | Manu Potvin' : 'Châssis Aluminium et PVC - Performance et Style')
@section('og_description', $seoMetaDescription ?? 'Nos châssis en aluminium et PVC offrent performance énergétique et esthétique moderne.')
@section('og_image', asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg'))
@section('twitter_title', $seoPageTitle ? $seoPageTitle . ' | Manu Potvin' : 'Châssis Aluminium et PVC - Performance garantie')
@section('twitter_description', $seoMetaDescription ?? 'Découvrez nos châssis modernes en aluminium et PVC, alliant qualité et design.')
@section('twitter_image', asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg'))

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
                            <img src="{{ asset('assets/images/custom/default/chassis/fenetre_alu_first-.jpg') }}" alt="business-area">
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
                                        <h6 class="title">Durabilité & Robustesse</h6>
                                        <p class="disc">Nos châssis en aluminium et PVC sont conçus pour résister aux intempéries tout en maintenant leur éclat d'origine.</p>
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
                                        <h6 class="title">Performance énergétique</h6>
                                        <p class="disc">Réduisez vos factures grâce à une isolation thermique optimale pour votre confort au quotidien.
                                        </p>
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
                                        <h6 class="title">Facilité d’entretien</h6>
                                        <p class="disc">Profitez de matériaux faciles à entretenir et durables dans le temps.</p>
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
                                        <h6 class="title">Design sur mesure</h6>
                                        <p class="disc">Une large gamme de couleurs et de styles pour harmoniser vos châssis avec votre intérieur et extérieur.</p>
                                    </div>
                                </div>
                                <!-- single service details card End -->
                            </div>
                        </div>

                    </div>
                    <div class="service-detials-step-2 mt--40">
                        <h4 class="title">Nos gammes de châssis</h4>
                        <p class="disc mb--25">

                        </p>
                        <p class="disc">
                            Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently
                            predominate misslat revolutionary quality vectors through future-proof manufactured
                            products.
                        </p>
                        <!-- stem-area start -->
                        <div class="row  mb--40 g-5 mb_md--20 mb_sm--20 single-service-step">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-center">

                                    <h4 class="title">
                                        Châssis en PVC
                                    </h4>
                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Excellent rapport qualité/prix</p>
                                        </div>
                                    <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Isolation thermique et phonique performante</p>
                                        </div>
                                    <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Entretien simple et rapide</p>
                                        </div>
                                    <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Idéal pour tous les types d'habitations</p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-center">

                                    <h4 class="title">
                                        Châssis en Aluminium
                                    </h4>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p>Design moderne et élégant</p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p>Résistance exceptionnelle et légèreté</p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p>Adapté aux grandes ouvertures vitrées</p>
                                    </div>
                                    <div class="single-feature-one">
                                        <i class="fal fa-check"></i>
                                        <p>Longévité accrue sans déformation</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- stem-area End -->
                    </div>
                    <!-- service details left area end -->
                </div>
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">

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
                    @include('components.tags',['items'=> [
     "chassis aluminium",
    "chassis PVC",
    "chassis sur mesure",
    "isolation thermique",
    "isolation acoustique",
    "design contemporain",
    "rénovation chassis",
    "installation chassis",
    "performances énergétiques",
    "durabilité chassis"
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
    @include('components.footer')
    <!-- End service details area -->
@endsection

@extends('Layouts.app')

@section('title')
    Votre Expert en Châssis et Pergolas
@endsection
@section('meta_description', 'Installation et remplacement de châssis PVC et aluminium, portes, fenêtres, pergolas et moustiquaires à Hannut, Waremme et environs. Devis gratuit.')
@section('meta_keywords', 'châssis, portes, fenêtres, pergolas, moustiquaires, installations')
@section('og_title', 'Accueil - Votre Expert en Châssis et Pergolas')
@section('og_description', 'Découvrez nos solutions pour châssis, fenêtres, portes et pergolas sur mesure.')
@section('og_image', asset('/assets/images/custom/default/home/new_main_home-2.jpg'))
@section('twitter_title', 'Accueil - Solutions en Châssis et Pergolas')
@section('twitter_description', 'Explorez nos services et produits pour vos besoins en châssis et pergolas.')
@section('twitter_image', asset('/assets/images/custom/default/home/new_main_home-2.jpg'))

@section('preload')
<link rel="preload" as="image" href="{{ asset('assets/images/custom/default/home/new_main_home-2.jpg') }}">
@endsection

@section('content')
    <!--#region  Header-->
    @include('components.header')
    <!--#endregion -->


    <!-- banner area start three -->
    @include('components.home.banner')
    <!-- banner area end three -->
    @include('components.contact-response-flash')
    <!-- start about area two -->
    @include('components.home.about')
    <!-- end about area two -->
    <!-- testimonials area start -->
    @include('components.home.testimonials')
    <!-- testimonials area end -->
    <!-- rts cta area start -->
@include('components.cta-contact')
    <!-- rts cta area End -->

    <!-- rts-service area start -->
{{--    @include('components.home.services',['serviceListe'=>$serviceRealisations])--}}
    <!-- rts-service area end -->

    <!-- start partners area -->
    @include('components.home.partners')
    <!-- start client partners End -->

    <!-- start project with us section -->
    @include('components.home.start_project')
    <!-- start project with us section End -->

    <!-- tart latest blog area -->
    @include('components.home.realistations')
    <!-- tart latest blog area End -->



    <!-- start header area -->
    @include('components.footer')
    <!-- ENd Header Area -->
@endsection

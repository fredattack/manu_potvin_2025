@extends('Layouts.app')

@section('title')
    Acceuil
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
    @include('components.home.services',['serviceListe'=>$serviceRealisations])
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

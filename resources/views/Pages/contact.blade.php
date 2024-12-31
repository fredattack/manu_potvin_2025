@extends('Layouts.app')
@section('meta_description', 'Contactez-nous pour des conseils, des devis ou des informations sur nos services d’installation et d’entretien de châssis, fenêtres, portes et pergolas.')
@section('meta_keywords', 'contact, installation châssis, fenêtres, portes, pergolas, devis')
@section('og_title', 'Contactez-nous - Votre expert en châssis, fenêtres et pergolas')
@section('og_description', 'Prenez contact avec notre équipe pour obtenir des conseils ou un devis personnalisé pour vos projets.')
@section('og_image', asset('images/contact.png'))
@section('twitter_title', 'Contactez-nous - Châssis et fenêtres')
@section('twitter_description', 'Besoin d’informations ou d’un devis ? Contactez nos experts en châssis, fenêtres et pergolas.')
@section('twitter_image', asset('images/contact.png'))

@section('title')
    Contactez Nous
@endsection

@section('content')
    @include('components.header')



    <!-- conact us form fluid start -->
    <div class="rts-contact-form-area mt--150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                               Manu POTVIN
                            </p>
                            <h2 class="title">Besoin d'aide ? Prenons contact ... </h2>
                        </div>
                        <div class="form-wrapper">
                            @if (session('success'))
                                <div class="alert alert-success">
                                     {{ session('success') }}
                                </div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                            @else
                            <form  action="{{route('contact.send-form')}}" method="POST">
                                @csrf
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Votre Nom" required>
                                    <input type="email" name="email" placeholder="Votre Email" required>
                                </div>
                                <input type="text" placeholder="Votre téléphone" name="phone" required>

                                <textarea placeholder="Entrez votre message" name="message" required></textarea>
                                <button type="submit" class="rts-btn btn-primary">Envoyer votre message</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- conact us form fluid end -->
    <!-- contact single area start -->
    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/01.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/01.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Appelez-nous... </span>
                                <a href="tel:{{$customerData->phone}}">
                                    <h5>{{$customerData->phone}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/02.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/02.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Ecrivez-nous...</span>
                                <a href="mailto:{{$customerData->email}}">
                                    <h5>{{$customerData->email}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->

            </div>
        </div>
    </div>
    <!-- conact single area end -->

@endsection

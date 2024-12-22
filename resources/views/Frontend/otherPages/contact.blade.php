@extends('Layouts.app')

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
                                Get In Touch
                            </p>
                            <h2 class="title">Needs Help? Let’s Get in Touch</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="{{route('contact.send-form')}}" method="post">
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Votre Nom" required>
                                    <input type="email" name="email" placeholder="Votre Email" required>
                                </div>
                                <input type="text" placeholder="Votre téléphone" name="phone" required>

                                <textarea placeholder="Entrez votre message" name="message" required></textarea>
                                <button type="submit" class="rts-btn btn-primary">Envoyer votre message</button>
                            </form>
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

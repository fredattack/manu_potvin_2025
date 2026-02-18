@extends('Layouts.app')

@section('title')
    Mentions légales
@endsection
@section('meta_description', 'Mentions légales du site Manu Potvin. Informations sur l\'éditeur, l\'hébergeur et les conditions d\'utilisation du site.')
@section('og_title', 'Mentions légales - Manu Potvin')
@section('og_description', 'Consultez les mentions légales du site Manu Potvin, spécialiste en châssis et pergolas à Hannut.')

@section('content')
    @include('components.header')

    <x-breadcrump
            title="Mentions légales"
            breadcrumbPath="Mentions légales"
    />

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="blog-listing-content">

                            <h2>Mentions légales</h2>

                            <h3>1. Éditeur du site</h3>
                            <p class="disc">
                                <strong>{{ $customerData->name }}</strong><br>
                                Adresse : {!! strip_tags($customerData->address) !!}<br>
                                @if($customerData->email)
                                    Email : {{ $customerData->email }}<br>
                                @endif
                                @if($customerData->phone)
                                    Téléphone : {{ $customerData->phone }}<br>
                                @endif
                                Numéro BCE / TVA : <!-- À compléter : BE 0XXX.XXX.XXX -->
                            </p>

                            <h3>2. Hébergeur</h3>
                            <p class="disc">
                                Le site est hébergé par :<br>
                                <strong>DigitalOcean, LLC</strong><br>
                                101 Avenue of the Americas, 10th Floor<br>
                                New York, NY 10013, États-Unis<br>
                                <a href="https://www.digitalocean.com" target="_blank" rel="noopener">www.digitalocean.com</a>
                            </p>

                            <h3>3. Propriété intellectuelle</h3>
                            <p class="disc">
                                L'ensemble du contenu de ce site (textes, images, photographies, logos, graphismes) est la propriété exclusive de {{ $customerData->name }} ou de ses partenaires, et est protégé par les lois belges et internationales relatives à la propriété intellectuelle.
                            </p>
                            <p class="disc">
                                Toute reproduction, représentation, modification, publication ou adaptation de tout ou partie des éléments du site est interdite sans l'autorisation écrite préalable de {{ $customerData->name }}.
                            </p>

                            <h3>4. Limitation de responsabilité</h3>
                            <p class="disc">
                                {{ $customerData->name }} s'efforce de fournir des informations exactes et à jour sur ce site. Toutefois, nous ne pouvons garantir l'exactitude, l'exhaustivité ou l'actualité des informations diffusées.
                            </p>
                            <p class="disc">
                                {{ $customerData->name }} ne saurait être tenu responsable des dommages directs ou indirects résultant de l'accès au site ou de l'utilisation des informations qui y sont publiées.
                            </p>

                            <h3>5. Liens hypertextes</h3>
                            <p class="disc">
                                Le site peut contenir des liens vers d'autres sites web. {{ $customerData->name }} n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu.
                            </p>

                            <h3>6. Droit applicable</h3>
                            <p class="disc">
                                Les présentes mentions légales sont régies par le droit belge. En cas de litige, les tribunaux de l'arrondissement judiciaire de Liège seront seuls compétents.
                            </p>

                            <h3>7. Protection des données</h3>
                            <p class="disc">
                                Pour toute information relative à la collecte et au traitement de vos données personnelles, veuillez consulter notre <a href="{{ route('privacy') }}">politique de confidentialité</a>.
                            </p>

                            <h3>8. Contact</h3>
                            <p class="disc">
                                Pour toute question concernant ces mentions légales, vous pouvez nous contacter :
                            </p>
                            <ul>
                                <li>Par email : <a href="mailto:{{ $customerData->email }}">{{ $customerData->email }}</a></li>
                                @if($customerData->phone)
                                    <li>Par téléphone : {{ $customerData->phone }}</li>
                                @endif
                                <li>Via notre <a href="{{ route('contactPage') }}">formulaire de contact</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

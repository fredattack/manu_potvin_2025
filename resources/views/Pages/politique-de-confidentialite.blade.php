@extends('Layouts.app')

@section('title')
    Politique de confidentialité
@endsection
@section('meta_description', 'Politique de confidentialité de Manu Potvin. Informations sur la collecte et le traitement de vos données personnelles conformément au RGPD.')
@section('og_title', 'Politique de confidentialité - Manu Potvin')
@section('og_description', 'Découvrez comment Manu Potvin protège vos données personnelles conformément au RGPD.')

@section('content')
    @include('components.header')

    <x-breadcrump
            title="Politique de confidentialité"
            breadcrumbPath="Politique de confidentialité"
    />

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="blog-listing-content">

                            <h2>Politique de confidentialité</h2>
                            <p class="disc">
                                La présente politique de confidentialité décrit la manière dont <strong>{{ $customerData->name }}</strong> collecte, utilise et protège vos données personnelles conformément au Règlement Général sur la Protection des Données (RGPD - Règlement UE 2016/679).
                            </p>

                            <h3>1. Responsable du traitement</h3>
                            <p class="disc">
                                <strong>{{ $customerData->name }}</strong><br>
                                Adresse : {!! strip_tags($customerData->address) !!}<br>
                                @if($customerData->email)
                                    Email : {{ $customerData->email }}<br>
                                @endif
                                @if($customerData->phone)
                                    Téléphone : {{ $customerData->phone }}
                                @endif
                            </p>

                            <h3>2. Données collectées</h3>
                            <p class="disc">Nous collectons les données suivantes :</p>
                            <ul>
                                <li><strong>Formulaire de contact :</strong> nom, adresse email, numéro de téléphone, message</li>
                                <li><strong>Newsletter :</strong> adresse email</li>
                                <li><strong>Navigation :</strong> données anonymisées via Google Analytics (pages visitées, durée de session, type d'appareil)</li>
                                <li><strong>Sécurité :</strong> données techniques collectées par Google reCAPTCHA pour la protection contre le spam</li>
                            </ul>

                            <h3>3. Finalités du traitement</h3>
                            <p class="disc">Vos données sont traitées pour les finalités suivantes :</p>
                            <ul>
                                <li>Répondre à vos demandes de contact et de devis</li>
                                <li>Vous envoyer notre newsletter (si vous y avez consenti)</li>
                                <li>Améliorer notre site web et nos services</li>
                                <li>Protéger notre site contre le spam et les abus</li>
                            </ul>

                            <h3>4. Base légale du traitement</h3>
                            <ul>
                                <li><strong>Consentement :</strong> pour l'envoi de la newsletter</li>
                                <li><strong>Intérêt légitime :</strong> pour le traitement des demandes de contact et l'amélioration de nos services</li>
                                <li><strong>Obligation légale :</strong> pour la conservation de certaines données requises par la loi belge</li>
                            </ul>

                            <h3>5. Durée de conservation</h3>
                            <ul>
                                <li><strong>Demandes de contact :</strong> 3 ans après le dernier contact</li>
                                <li><strong>Newsletter :</strong> jusqu'au retrait de votre consentement</li>
                                <li><strong>Données analytiques :</strong> 26 mois (paramétrage Google Analytics)</li>
                            </ul>

                            <h3>6. Vos droits</h3>
                            <p class="disc">Conformément au RGPD, vous disposez des droits suivants :</p>
                            <ul>
                                <li><strong>Droit d'accès :</strong> obtenir une copie de vos données personnelles</li>
                                <li><strong>Droit de rectification :</strong> corriger vos données inexactes ou incomplètes</li>
                                <li><strong>Droit à l'effacement :</strong> demander la suppression de vos données</li>
                                <li><strong>Droit à la portabilité :</strong> recevoir vos données dans un format structuré</li>
                                <li><strong>Droit d'opposition :</strong> vous opposer au traitement de vos données</li>
                                <li><strong>Droit à la limitation :</strong> limiter le traitement de vos données</li>
                            </ul>
                            <p class="disc">
                                Pour exercer vos droits, contactez-nous à <a href="mailto:{{ $customerData->email }}">{{ $customerData->email }}</a>.
                            </p>

                            <h3>7. Cookies et traceurs</h3>
                            <p class="disc">Notre site utilise les technologies suivantes :</p>
                            <ul>
                                <li><strong>Google Analytics :</strong> mesure d'audience anonymisée pour améliorer notre site</li>
                                <li><strong>Google reCAPTCHA :</strong> protection contre le spam sur nos formulaires de contact</li>
                            </ul>
                            <p class="disc">
                                Ces services sont soumis aux politiques de confidentialité de Google. Vous pouvez gérer vos préférences de cookies via les paramètres de votre navigateur.
                            </p>

                            <h3>8. Transfert de données</h3>
                            <p class="disc">
                                L'utilisation de Google Analytics et reCAPTCHA peut impliquer un transfert de données vers les serveurs de Google, y compris en dehors de l'Espace Économique Européen. Ces transferts sont encadrés par les clauses contractuelles types approuvées par la Commission européenne.
                            </p>

                            <h3>9. Sécurité</h3>
                            <p class="disc">
                                Nous mettons en place les mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, perte ou destruction.
                            </p>

                            <h3>10. Réclamation</h3>
                            <p class="disc">
                                Si vous estimez que le traitement de vos données ne respecte pas la réglementation, vous pouvez introduire une réclamation auprès de l'Autorité de Protection des Données (APD) :
                            </p>
                            <p class="disc">
                                <strong>Autorité de Protection des Données</strong><br>
                                Rue de la Presse 35, 1000 Bruxelles<br>
                                <a href="https://www.autoriteprotectiondonnees.be" target="_blank" rel="noopener">www.autoriteprotectiondonnees.be</a><br>
                                Email : contact@apd-gba.be
                            </p>

                            <h3>11. Modification de la politique</h3>
                            <p class="disc">
                                Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. La version en vigueur est celle publiée sur cette page. Dernière mise à jour : février 2026.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

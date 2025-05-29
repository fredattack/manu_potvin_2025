<?php
/** @var \App\Models\Realisation $realisation  */
?>
@extends('Layouts.app')

@section('title')
{{$realisation->title}}
@endsection

@section('meta_description')
Découvrez notre réalisation "{{$realisation->title}}" à {{$realisation->place}}. {{$realisation->description}}
@endsection

@section('meta_keywords')
{{App\Enums\Categories::getCategoryLabels($realisation->category)}}, réalisation, {{$realisation->place}}, Manu Potvin
@endsection

@section('content')
@include('components.header')

<!-- Schema.org structured data for Article -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{$realisation->title}}",
  "description": "{{$realisation->description}}",
  "image": "{{$realisation->image_url}}",
  "datePublished": "{{$realisation->created_at->toIso8601String()}}",
  "dateModified": "{{$realisation->updated_at->toIso8601String()}}",
  "author": {
    "@type": "Organization",
    "name": "Manu Potvin",
    "url": "https://www.manupotvin.be"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Manu Potvin",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('assets/images/custom/logo/logo_full.png') }}"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ url()->current() }}"
  },
  "locationCreated": {
    "@type": "Place",
    "name": "{{$realisation->place}}"
  },
  "about": {
    "@type": "Thing",
    "name": "{{App\Enums\Categories::getCategoryLabels($realisation->category)}}"
  }
}
</script>

<!-- Breadcrumb section -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-inner">
                    <h1 class="title">{{$realisation->title}}</h1>
                    <ul class="breadcrumb-link">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">{{$realisation->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb section end -->

<!-- Project details section -->
<div class="project-details-area rts-section-gap">
    <div class="container">
        <!-- Main image and info -->
        <div class="row">
            <div class="col-lg-8">
                <div class="project-main-image">
                    {!! $realisation->image !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-info-card">
                    <div class="card-header">
                        <h3>Informations</h3>
                    </div>
                    <div class="card-body">
                        <ul class="project-info-list">
                            <li>
                                <div class="info-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="info-content">
                                    <span class="label">Client</span>
                                    <span class="value">{{$realisation->customer}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <div class="info-content">
                                    <span class="label">Catégorie</span>
                                    <span class="value">{{App\Enums\Categories::getCategoryLabels($realisation->category)}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="info-content">
                                    <span class="label">Date</span>
                                    <span class="value">{{$realisation->date->format('d M Y')}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <span class="label">Lieu</span>
                                    <span class="value">{{$realisation->place}}</span>
                                </div>
                            </li>
                        </ul>
                        <div class="cta-buttons">
                            <a href="{{ route('contactPage') }}" class="rts-btn btn-primary">Demander un devis</a>
                            <a href="{{ url()->previous() }}" class="rts-btn btn-secondary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project description -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="project-description">
                    <h2 class="section-title">À propos de ce projet</h2>
                    <div class="description-content">
                        @if($realisation->description)
                            <p class="project-quote">
                                "{{$realisation->description}}"
                            </p>
                        @endif
                        <div class="project-features">
                            <h3>Points forts</h3>
                            <ul class="features-list">
                                @foreach(explode(',', App\Enums\Categories::getCategoryLabels($realisation->category)) as $category)
                                    <li><i class="fas fa-check"></i> {{trim($category)}}</li>
                                @endforeach
                                <li><i class="fas fa-check"></i> Réalisation à {{$realisation->place}}</li>
                                <li><i class="fas fa-check"></i> Travail soigné et professionnel</li>
                                <li><i class="fas fa-check"></i> Matériaux de haute qualité</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery section -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="section-title">Galerie photos</h2>
                <div class="project-gallery">
                    <x-lightbox-gallery :images="$realisation->images_lightbox" />
                </div>
            </div>
        </div>

        <!-- Related projects -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="section-title">Autres réalisations similaires</h2>
                <div class="related-projects">
                    <div class="row">
                        @foreach(\App\Models\Realisation::where('id', '!=', $realisation->id)
                                ->whereJsonContains('category', $realisation->main_category)
                                ->limit(3)
                                ->get() as $relatedProject)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="related-project-card">
                                    <div class="thumbnail">
                                        {!! $relatedProject->image !!}
                                        <a href="{{ route('pages.details', ['realisation' => $relatedProject]) }}" class="project-link">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category">{{ App\Enums\Categories::getCategoryLabels($relatedProject->category) }}</span>
                                        <h4 class="title">
                                            <a href="{{ route('pages.details', ['realisation' => $relatedProject]) }}">{{ $relatedProject->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="cta-section">
                    <div class="cta-content">
                        <h2>Vous avez un projet similaire ?</h2>
                        <p>Contactez-nous pour discuter de votre projet et obtenir un devis personnalisé.</p>
                        <a href="{{ route('contactPage') }}" class="rts-btn btn-primary">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Breadcrumb styles */
    .breadcrumb-area {
        background-color: #f8f9fa;
        padding: 40px 0;
        margin-bottom: 60px;
    }

    .breadcrumb-inner .title {
        font-size: 36px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .breadcrumb-link {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-link li {
        position: relative;
        padding-right: 20px;
        margin-right: 10px;
    }

    .breadcrumb-link li:not(:last-child)::after {
        content: '/';
        position: absolute;
        right: 0;
        color: #888;
    }

    .breadcrumb-link li a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-link li a:hover {
        color: var(--color-primary-0);
    }

    .breadcrumb-link li.active {
        color: var(--color-primary-0);
    }

    /* Project main image */
    .project-main-image {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        position: relative;
        max-height: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .project-main-image img {
        width: 100%;
        height: auto;
        max-height: 600px;
        object-fit: contain;
    }

    /* Project info card */
    .project-info-card {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .project-info-card .card-header {
        background-color: var(--color-primary-0);
        padding: 20px;
        color: #fff;
    }

    .project-info-card .card-header h3 {
        margin: 0;
        font-size: 22px;
    }

    .project-info-card .card-body {
        padding: 30px;
    }

    .project-info-list {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }

    .project-info-list li {
        display: flex;
        margin-bottom: 20px;
        align-items: center;
    }

    .project-info-list .info-icon {
        width: 40px;
        height: 40px;
        background-color: rgba(var(--color-primary-0-rgb), 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: var(--color-primary-0);
    }

    .project-info-list .info-content {
        flex: 1;
    }

    .project-info-list .label {
        display: block;
        font-size: 14px;
        color: #888;
        margin-bottom: 3px;
    }

    .project-info-list .value {
        font-weight: 600;
        color: #333;
    }

    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .cta-buttons .rts-btn {
        text-align: center;
    }

    /* Project description */
    .project-description {
        margin-bottom: 50px;
    }

    .section-title {
        font-size: 28px;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 60px;
        height: 3px;
        background-color: var(--color-primary-0);
    }

    .project-quote {
        font-size: 18px;
        font-style: italic;
        color: #555;
        border-left: 4px solid var(--color-primary-0);
        padding-left: 20px;
        margin: 20px 0 30px;
    }

    .project-features {
        background-color: #f8f9fa;
        padding: 25px;
        border-radius: 8px;
    }

    .project-features h3 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }

    .features-list li {
        display: flex;
        align-items: center;
    }

    .features-list li i {
        color: var(--color-primary-0);
        margin-right: 10px;
    }

    /* Gallery section */
    .project-gallery {
        margin-bottom: 50px;
    }

    /* Related projects */
    .related-project-card {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .related-project-card:hover {
        transform: translateY(-5px);
    }

    .related-project-card .thumbnail {
        position: relative;
        overflow: hidden;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .related-project-card .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s;
    }

    .related-project-card .project-link {
        position: absolute;
        right: 20px;
        bottom: 20px;
        width: 45px;
        height: 45px;
        background-color: var(--color-primary-0);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s;
    }

    .related-project-card .project-link:hover {
        background-color: #333;
    }

    .related-project-card .content {
        padding: 20px;
    }

    .related-project-card .category {
        display: inline-block;
        font-size: 14px;
        color: #888;
        margin-bottom: 10px;
    }

    .related-project-card .title {
        font-size: 18px;
        margin: 0;
    }

    .related-project-card .title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s;
    }

    .related-project-card .title a:hover {
        color: var(--color-primary-0);
    }

    /* CTA section */
    .cta-section {
        background-color: #f8f9fa;
        padding: 50px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 30px;
    }

    .cta-section h2 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .cta-section p {
        font-size: 16px;
        color: #666;
        margin-bottom: 25px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Lightbox gallery improvements */
    .lightbox-gallery .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .lightbox-gallery .gallery .thumbnail {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        height: 0;
        padding-bottom: 75%; /* 4:3 aspect ratio */
        background-color: #f8f9fa;
    }

    .lightbox-gallery .gallery .thumbnail img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s;
        border: none;
        border-radius: 0;
        max-width: none;
    }

    .lightbox-gallery .gallery .thumbnail:hover img {
        transform: scale(1.05);
    }

    /* Lightbox */
    .lightbox .slide img {
        max-width: 90%;
        max-height: 80vh;
        object-fit: contain;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .project-info-card {
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
        .breadcrumb-inner .title {
            font-size: 28px;
        }

        .section-title {
            font-size: 24px;
        }

        .cta-section {
            padding: 30px;
        }
    }
</style>

<!-- Enhance lightbox gallery -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add loading animation for gallery images
        const galleryImages = document.querySelectorAll('.lightbox-gallery .gallery img');
        galleryImages.forEach(img => {
            img.addEventListener('load', function() {
                this.classList.add('loaded');
            });
        });

        // Close lightbox when clicking outside the image
        const lightbox = document.getElementById('lightbox');
        if (lightbox) {
            lightbox.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeLightbox();
                }
            });

            // Add keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (lightbox.style.display === 'flex') {
                    if (e.key === 'Escape') {
                        closeLightbox();
                    } else if (e.key === 'ArrowRight') {
                        changeSlide(1);
                    } else if (e.key === 'ArrowLeft') {
                        changeSlide(-1);
                    }
                }
            });
        }
    });
</script>
@endsection

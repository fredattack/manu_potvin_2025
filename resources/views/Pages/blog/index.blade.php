@extends('Layouts.app')

@section('title')
    Blog - Conseils et actualités menuiserie extérieure
@endsection
@section('meta_description', 'Découvrez nos articles et conseils sur les châssis, portes, fenêtres, pergolas et moustiquaires. Guides pratiques pour vos projets de menuiserie extérieure à Hannut et environs.')
@section('meta_keywords', 'blog châssis, conseils fenêtres, guide pergolas, actualités menuiserie, rénovation Hannut')
@section('og_title', 'Blog - Manu Potvin | Conseils menuiserie extérieure')
@section('og_description', 'Articles et conseils d\'expert sur les châssis, portes, fenêtres et pergolas. Guides pratiques pour vos projets à Hannut, Waremme et Jodoigne.')
@section('twitter_title', 'Blog - Manu Potvin | Conseils menuiserie')
@section('twitter_description', 'Articles et conseils d\'expert sur les châssis, portes, fenêtres et pergolas à Hannut et environs.')

@section('content')
    @include('components.header')

    <x-breadcrump
        title="Blog"
        breadcrumbPath="Blog"
    />

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            @if($articles->isEmpty())
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2>Aucun article pour le moment</h2>
                        <p class="disc">Notre blog est en préparation. Revenez bientôt pour découvrir nos conseils et actualités sur la menuiserie extérieure.</p>
                    </div>
                </div>
            @else
                <div class="row g-5">
                    @foreach($articles as $article)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-single-post-listing single-blog">
                                @if($article->featured_image)
                                    <div class="thumbnail">
                                        <a href="{{ route('blog.show', $article) }}">
                                            <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" loading="lazy">
                                        </a>
                                    </div>
                                @endif
                                <div class="blog-listing-content">
                                    <div class="blog-date">
                                        <i class="fal fa-calendar-alt"></i>
                                        <span>{{ $article->published_at->translatedFormat('d F Y') }}</span>
                                    </div>
                                    <a class="blog-title" href="{{ route('blog.show', $article) }}">
                                        <h5 class="title">{{ $article->title }}</h5>
                                    </a>
                                    <p class="disc">{{ Str::limit($article->excerpt, 150) }}</p>
                                    <a class="rts-btn btn-primary" href="{{ route('blog.show', $article) }}">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt--50">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $articles->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('components.footer')
@endsection

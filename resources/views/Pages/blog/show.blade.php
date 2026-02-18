@extends('Layouts.app')

@section('title')
    {{ $article->meta_title ?? $article->title }}
@endsection
@section('meta_description', $article->meta_description ?? Str::limit($article->excerpt, 160))
@section('og_title', ($article->meta_title ?? $article->title) . ' | Manu Potvin')
@section('og_description', $article->meta_description ?? Str::limit($article->excerpt, 160))
@if($article->hasMedia('featured_image'))
@section('og_image', $article->getFirstMediaUrl('featured_image', 'webp') ?: $article->getFirstMediaUrl('featured_image'))
@section('twitter_image', $article->getFirstMediaUrl('featured_image', 'webp') ?: $article->getFirstMediaUrl('featured_image'))
@endif
@section('twitter_title', ($article->meta_title ?? $article->title) . ' | Manu Potvin')
@section('twitter_description', $article->meta_description ?? Str::limit($article->excerpt, 160))

@section('content')
    @include('components.header')

    <x-breadcrump
        title="{{ $article->title }}"
        breadcrumbPath="Blog.{{ $article->title }}"
        :breadcrumbUrls="['Blog' => '/blog']"
    />

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $article->title,
        'description' => $article->meta_description ?? Str::limit($article->excerpt, 160),
        'image' => $article->hasMedia('featured_image') ? ($article->getFirstMediaUrl('featured_image', 'webp') ?: $article->getFirstMediaUrl('featured_image')) : null,
        'datePublished' => $article->published_at->toIso8601String(),
        'dateModified' => $article->updated_at->toIso8601String(),
        'author' => [
            '@type' => 'Organization',
            'name' => 'Manu Potvin',
            'url' => url('/'),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Manu Potvin',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('assets/images/custom/logo/logo_full.png'),
            ],
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url()->current(),
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog-single-post-listing details mb--0">
                        @if($article->hasMedia('featured_image'))
                            <div class="thumbnail mb--30">
                                <img src="{{ $article->getFirstMediaUrl('featured_image', 'webp') ?: $article->getFirstMediaUrl('featured_image') }}" alt="{{ $article->title }}">
                            </div>
                        @endif
                        <div class="blog-listing-content">
                            <div class="blog-date mb--20">
                                <i class="fal fa-calendar-alt"></i>
                                <span>{{ $article->published_at->translatedFormat('d F Y') }}</span>
                            </div>
                            <h1>{{ $article->title }}</h1>
                            <div class="disc">
                                {!! $article->content !!}
                            </div>
                        </div>
                    </div>

                    <div class="mt--50">
                        <a class="rts-btn btn-primary" href="{{ route('blog.index') }}">
                            <i class="fal fa-arrow-left"></i> Retour au blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

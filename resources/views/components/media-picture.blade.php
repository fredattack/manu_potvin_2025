@props([
    'model',
    'collection' => 'illustration',
    'conversion' => '',
    'alt' => '',
    'loading' => 'lazy',
    'imgClass' => '',
    'fallbackSrc' => null,
])

@if($model->hasMedia($collection))
    @php
        $media = $model->getFirstMedia($collection);
        $hasWebp = $media->hasGeneratedConversion('webp');
        $src = $conversion ? $media->getUrl($conversion) : $media->getUrl();
    @endphp
    <picture>
        @if($hasWebp)
            <source srcset="{{ $media->getUrl('webp') }}" type="image/webp">
        @endif
        <img src="{{ $src }}" alt="{{ $alt }}"@if($loading) loading="{{ $loading }}"@endif @if($imgClass) class="{{ $imgClass }}"@endif {{ $attributes }}>
    </picture>
@elseif($fallbackSrc)
    <img src="{{ $fallbackSrc }}" alt="{{ $alt }}"@if($loading) loading="{{ $loading }}"@endif @if($imgClass) class="{{ $imgClass }}"@endif {{ $attributes }}>
@endif
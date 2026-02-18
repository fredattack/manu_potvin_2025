@if($media->hasGeneratedConversion('webp') && ($conversion ?? '') !== 'webp')
<picture>
    <source srcset="{{ $media->getUrl('webp') }}" type="image/webp">
    <img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif src="{{ $media->getUrl($conversion) }}" alt="{{ $media->name }}">
</picture>
@else
<img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif src="{{ $media->getUrl($conversion) }}" alt="{{ $media->name }}">
@endif
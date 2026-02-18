@if($media->hasGeneratedConversion('webp') && ($conversion ?? '') !== 'webp')
<picture>
    <source srcset="{{ $media->getSrcset('webp') }}" type="image/webp">
    <img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif srcset="{{ $media->getSrcset($conversion) }}" src="{{ $media->getUrl($conversion) }}" width="{{ $width }}" height="{{ $height }}">
</picture>
@else
<img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif srcset="{{ $media->getSrcset($conversion) }}" src="{{ $media->getUrl($conversion) }}" width="{{ $width }}" height="{{ $height }}">
@endif
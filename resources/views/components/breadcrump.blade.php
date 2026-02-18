@props(['headingTag' => 'h1', 'breadcrumbUrls' => []])

<div {{ $attributes->class(['rts-breadcrumb-area breadcrumb-bg bg_image']) }}>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <div class="bread-tag">
                    <{{ $headingTag }} class="title">{{$title}}</{{ $headingTag }}>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag" style="margin-left: auto;">
                    <a href="{{ route('home') }}">Accueil</a>
                    @php
                        $breadcrumbParts = explode('.', $breadcrumbPath);
                    @endphp
                    @foreach($breadcrumbParts as $part)
                        @if($loop->last)
                    <a href="#" class="active">{{($loop->count == 1 ? '/ ':'').$part}}</a>
                        @else
                    <span>/ {{$part}}/</span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@php
    $breadcrumbItems = [];
    $position = 1;
    $totalParts = count($breadcrumbParts);

    $breadcrumbItems[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'Accueil',
        'item' => url('/'),
    ];

    foreach ($breadcrumbParts as $index => $part) {
        $isLast = ($index === $totalParts - 1);
        $entry = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => $part,
        ];

        if (isset($breadcrumbUrls[$part])) {
            $entry['item'] = url($breadcrumbUrls[$part]);
        } elseif ($isLast) {
            $entry['item'] = strtok(url()->current(), '?');
        }

        $breadcrumbItems[] = $entry;
    }
@endphp

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbItems,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

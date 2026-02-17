@props(['headingTag' => 'h1'])

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

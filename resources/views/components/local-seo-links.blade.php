@props(['pageType' => 'chassis'])

@php
$locations = App\Models\ServiceArea::getActiveAreas(6)
    ->pluck('name')
    ->toArray();

$titles = [
    'chassis' => 'Châssis',
    'fenetres' => 'Fenêtres',
    'portes' => 'Portes',
    'pergolas' => 'Pergolas',
    'moustiquaire' => 'Moustiquaires',
];

$title = $titles[$pageType] ?? $titles['chassis'];
@endphp

<div class="rts-service-area local-seo-section rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <span class="pre-title">Nos zones d'intervention</span>
                    <h4 class="title">{{ $title }} dans votre région</h4>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="local-links-container d-flex flex-wrap justify-content-center">
                    @foreach($locations as $location)
                        <span class="rts-btn btn-secondary-3 mr--20 mb--20">
                            {{ $title }} à {{ $location }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .local-seo-section {
        background-color: #5d666f;
        padding: 60px 0;
        margin-top: 20px;
    }
    .local-links-container .rts-btn {
        margin-right: 15px;
        margin-bottom: 15px;
        font-size: 14px;
        padding: 12px 20px;
        border-radius: 5px;
    }
    .local-seo-section .pre-title {
        color: var(--color-primary-0);
        font-weight: 500;
        display: block;
        margin-bottom: 10px;
    }
    .local-seo-section .title {
        margin-bottom: 0;
    }
</style>

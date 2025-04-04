@props(['pageType' => 'chassis', 'currentLocation' => null])

@php
// Récupérer les localités depuis la base de données
$locations = App\Models\SeoKeyword::whereNotNull('location')
    ->where('location', '!=', '')
    ->where('active', true)
    ->distinct()
    ->pluck('location')
    ->take(6) // Limiter à 6 localités pour ne pas surcharger
    ->toArray();

// Définir les routes en fonction du type de page
$routes = [
    'chassis' => '/products/portes-fenetres-chassis',
    'fenetres' => '/products/portes-fenetres-chassis',
    'portes' => '/products/porte-de-garage',
    'pergolas' => '/products/pergolas',
];

$route = $routes[$pageType] ?? $routes['chassis'];

// Définir les titres en fonction du type de page
$titles = [
    'chassis' => 'Châssis',
    'fenetres' => 'Fenêtres',
    'portes' => 'Portes',
    'pergolas' => 'Pergolas',
];

$title = $titles[$pageType] ?? $titles['chassis'];
@endphp

<div class="rts-service-area local-seo-section rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <span class="pre-title">Nos services près de chez vous</span>
                    <h4 class="title">{{ $title }} dans votre région</h4>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="local-links-container d-flex flex-wrap justify-content-center">
                    @foreach($locations as $location)
                        <a href="{{ $route }}?location={{ urlencode($location) }}"
                           class="rts-btn btn-secondary-3 mr--20 mb--20 {{ $currentLocation == $location ? 'active' : '' }}">
                            {{ $title }} à {{ $location }}
                        </a>
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
        transition: all 0.3s ease;
    }
    .local-links-container .rts-btn.active {
        background-color: var(--color-primary-0);
        color: white;
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

@php
// Récupérer les localités depuis la base de données
$locations = App\Models\SeoKeyword::whereNotNull('location')
    ->where('location', '!=', '')
    ->where('active', true)
    ->distinct()
    ->pluck('location')
    ->take(6) // Limiter à 6 localités principales
    ->toArray();

// Définir les services principaux
$services = [
    'chassis' => [
        'title' => 'Châssis',
        'route' => '/products/portes-fenetres-chassis'
    ],
    'fenetres' => [
        'title' => 'Fenêtres',
        'route' => '/products/portes-fenetres-chassis'
    ],
    'portes' => [
        'title' => 'Portes',
        'route' => '/products/porte-de-garage'
    ],
    'pergolas' => [
        'title' => 'Pergolas',
        'route' => '/products/pergolas'
    ]
];

// Sélectionner 2 services aléatoires pour éviter la surcharge
$selectedServices = array_slice($services, 0, 2);
@endphp

<div class="col-xl-3 col-lg-6">
    <div class="footer-three-single-wized">
        <h5 class="title">Zones d'intervention</h5>
        <div class="body">
            <div class="footer-location-grid">
                @foreach($locations as $location)
                    <a href="/products/portes-fenetres-chassis?location={{ urlencode($location) }}" class="location-link">
                        {{ $location }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .footer-location-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
    .location-link {
        color: #5d666f;
        font-size: 14px;
        transition: all 0.3s;
        display: flex;
        align-items: center;
    }
    .location-link:hover {
        color: var(--color-primary-0);
    }
    .location-link::before {
        content: "";
        display: inline-block;
        width: 6px;
        height: 6px;
        background-color: var(--color-primary-0);
        border-radius: 50%;
        margin-right: 8px;
    }
</style>

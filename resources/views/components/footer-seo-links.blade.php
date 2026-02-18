@php
$locations = App\Models\ServiceArea::getActiveAreas(6)
    ->pluck('name')
    ->toArray();
@endphp

<div class="col-xl-3 col-lg-6">
    <div class="footer-three-single-wized">
        <h5 class="title">Zones d'intervention</h5>
        <div class="body">
            <div class="footer-location-grid">
                @foreach($locations as $location)
                    <span class="location-item">
                        {{ $location }}
                    </span>
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
    .location-item {
        color: #5d666f;
        font-size: 14px;
        display: flex;
        align-items: center;
    }
    .location-item::before {
        content: "";
        display: inline-block;
        width: 6px;
        height: 6px;
        background-color: var(--color-primary-0);
        border-radius: 50%;
        margin-right: 8px;
    }
</style>

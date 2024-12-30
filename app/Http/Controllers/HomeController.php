<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use App\Models\Realisation;

class HomeController extends Controller
{

    public function __invoke()
    {
        $customerData = CustomerData::first();
        $themeColor = 'manu-potvin-color';

        $favoritesRealisations = Realisation::with(['media'])
            ->favorites()
            ->get();

        $serviceRealisations = Realisation::with(['media'])
            ->favorites($favoritesRealisations->pluck('id'))
            ->get()
            ->groupBy(fn ($item) => $item->category[0] ?? null);


        if($serviceRealisations->count() < 4){
            $serviceRealisations = Realisation::query()
            ->whereNotNull('category')
            ->whereHas( 'media')
            ->get()
            ->groupBy(fn ($item) => $item->category[0] ?? null) // Group by the first category
            ->map(fn ($items) => $items->first()); // Pick the first realization for each group
        }

        return view('home', compact('themeColor','customerData', 'favoritesRealisations', 'serviceRealisations'));
    }

}

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
            ->get();


        return view('home', compact('themeColor','customerData', 'favoritesRealisations', 'serviceRealisations'));
    }

}

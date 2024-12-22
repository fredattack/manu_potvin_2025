<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use App\Models\Realisation;

class RealisationController extends Controller
{
    public function __invoke(Realisation $realisation)
    {
        $realisation->load(['media']);
        ray($realisation->getMedia('illustration'));
        $view = 'Pages.realisationDetails';
        return view( $view,[
            "customerData"=>CustomerData::first(),
            "realisation" => $realisation
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\CustomerData;
use App\Models\Realisation;
use Database\Seeders\CustomerDataSeeder;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function render(string $type,string $subType = null)
    {
        $view = 'Pages.' . Categories::getUrlPath( $type) . '.' . Str::lower( $subType);

        if(!view()->exists($view)){
            $view = 'Pages.' . Categories::getUrlPath( $type);
        }

        return view( $view,[
        "customerData"=>CustomerData::first(),
            "modelData" => Realisation::with(['media'])->get()
        ]);
    }
}

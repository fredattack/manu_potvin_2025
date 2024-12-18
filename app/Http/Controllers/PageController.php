<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use Database\Seeders\CustomerDataSeeder;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function render(string $type,string $subType = null)
    {
        $view = 'Pages.' . $type . '.' . Str::lower( $subType);

        if(!view()->exists($view)){
            $view = 'Pages.' . $type;
        }

        return view( $view,[
        "customerData"=>CustomerData::first()
        ]);
    }
}

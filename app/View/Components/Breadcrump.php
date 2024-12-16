<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrump extends Component
{



    public function __construct(public string $title, public string $breadcrumbPath)
    {

    }

    public function render(): View
    {
        return view( 'components.breadcrump' );
    }
}

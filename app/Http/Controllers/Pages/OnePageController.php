<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnePageController extends Controller
{
    public function main()
    {
        return view('Frontend.onePages.index');
    }

    public function consulting()
    {
        return view('Frontend.onePages.consulting');
    }

    public function corporate()
    {
        return view('Frontend.onePages.corporate');
    }

    public function insurance()
    {
        return view('Frontend.onePages.insurance');
    }

    public function marketing()
    {
        return view('Frontend.onePages.marketing');
    }

    public function finance()
    {
        return view('Frontend.onePages.finance');
    }

    public function humanResource()
    {
        return view('Frontend.onePages.humanResource');
    }

    public function itsolution()
    {
        return view('Frontend.onePages.itsolution');
    }

    public function modernAgency()
    {
        return view('Frontend.onePages.modernAgency');
    }

    public function stratupAgency()
    {
        return view('Frontend.onePages.stratupAgency');
    }

    public function brandingAgency()
    {
        return view('Frontend.onePages.brandingAgency');
    }

    public function businessAgency()
    {
        return view('Frontend.onePages.businessAgency');
    }

    public function businessManagement()
    {
        return view('Frontend.onePages.businessManagement');
    }
}

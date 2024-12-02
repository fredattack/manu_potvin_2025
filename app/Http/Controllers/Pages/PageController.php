<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function appoitment()
    {
        return view('Frontend.Pages.appoitment');
    }

    public function pricePlans()
    {
        return view('Frontend.Pages.priceplans');
    }

    public function testimonialStyle()
    {
        return view('Frontend.Pages.testimonialStyle1');
    }

    public function portfolioStyle1()
    {
        return view('Frontend.Pages.project');
    }

    public function portfolioStyle2()
    {
        return view('Frontend.Pages.portfolioStyle2');
    }

    public function portfolioStyle3()
    {
        return view('Frontend.Pages.portfolioStyle3');
    }

    public function portfolioStyle4()
    {
        return view('Frontend.Pages.portfolioStyle4');
    }

    public function portfolioStyle5()
    {
        return view('Frontend.Pages.portfolioStyle5');
    }

    public function portfolioDetails()
    {
        return view('Frontend.Pages.projecDetails');
    }

    public function teamStyle1()
    {
        return view('Frontend.Pages.team');
    }

    public function teamStyle2()
    {
        return view('Frontend.Pages.teamStyle2');
    }

    public function teamStyle3()
    {
        return view('Frontend.Pages.teamStyle3');
    }

    public function teamStyle4()
    {
        return view('Frontend.Pages.teamStyle4');
    }

    public function teamStyle5()
    {
        return view('Frontend.Pages.teamStyle5');
    }

    public function teamDetails()
    {
        return view('Frontend.Pages.teamDetails');
    }
}

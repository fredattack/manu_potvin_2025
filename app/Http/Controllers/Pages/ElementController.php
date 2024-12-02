<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function accordianPage()
    {
        return view('Frontend.Elements.accordion');
    }

    public function addressBox()
    {
        return view('Frontend.Elements.addressBox');
    }

    public function buttonPage()
    {
        return view('Frontend.Elements.button');
    }

    public function blogSlider()
    {
        return view('Frontend.Elements.blogSlider');
    }

    public function blogQuote()
    {
        return view('Frontend.Elements.blogQuote');
    }

    public function headingPage()
    {
        return view('Frontend.Elements.heading');
    }


    public function callToA()
    {
        return view('Frontend.Elements.cta');
    }

    public function contactForm()
    {
        return view('Frontend.Elements.contactForm');
    }


    public function counterUp()
    {
        return view('Frontend.Elements.counter');
    }

    public function brandPage()
    {
        return view('Frontend.Elements.brand');
    }


    public function videoAddon()
    {
        return view('Frontend.Elements.video');
    }

    public function PricingPage()
    {
        return view('Frontend.Elements.pricing');
    }


    public function typoGraphy()
    {
        return view('Frontend.Elements.typography');
    }

    public function tabAddon()
    {
        return view('Frontend.Elements.tab');
    }


    public function progressBar()
    {
        return view('Frontend.Elements.progress-bar');
    }

    public function workingProgress()
    {
        return view('Frontend.Elements.workingProcess');
    }

    public function testimonialPage()
    {
        return view('Frontend.Pages.testimonial');
    }
}

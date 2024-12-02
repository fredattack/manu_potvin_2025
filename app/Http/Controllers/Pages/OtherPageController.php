<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function aboutPage()
    {
        return view('Frontend.otherPages.about');
    }

    public function contactPage()
    {
        return view('Frontend.otherPages.contact');
    }

    public function errorPage()
    {
        return view('Frontend.otherPages.errorPage');
    }

    public function blogPage()
    {
        return view('Frontend.otherPages.blog');
    }

    public function blogGridPage()
    {
        return view('Frontend.otherPages.blogGrid');
    }

    public function blogDetailsPage()
    {
        return view('Frontend.otherPages.blogDetails');
    }

    public function ourservicePage()
    {
        return view('Frontend.otherPages.ourService');
    }

    public function service2Page()
    {
        return view('Frontend.otherPages.service-2');
    }

    public function service3Page()
    {
        return view('Frontend.otherPages.service-3');
    }

    public function serviceDetailsPage()
    {
        return view('Frontend.otherPages.serviceDetails');
    }
}

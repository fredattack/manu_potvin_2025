<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function main()
    {
        $themeColor = '';
        return view('Frontend.Homes.home1', compact('themeColor'));
    }

    public function consulting()
    {
        $themeColor = 'home-blue';
        return view('Frontend.Homes.home2', compact('themeColor'));
    }

    public function corporate()
    {
        $themeColor = 'home-yellow';
        return view('Frontend.Homes.home3', compact('themeColor'));
    }

    public function insurance()
    {
        $themeColor = 'home-violet';
        return view('Frontend.Homes.home4', compact('themeColor'));
    }

    public function marketing()
    {
        $themeColor = 'home-blue2';
        return view('Frontend.Homes.home5', compact('themeColor'));
    }

    public function finance()
    {
        $themeColor = 'index-sixindex-six';
        return view('Frontend.Homes.home6', compact('themeColor'));
    }

    public function humanResource()
    {
        $themeColor = 'index-seven hr';
        return view('Frontend.Homes.home7', compact('themeColor'));
    }

    public function itsolution()
    {
        $themeColor = 'home-blue medium-blue';
        return view('Frontend.Homes.home8', compact('themeColor'));
    }

    public function modernAgency()
    {
        $themeColor = 'home-nine';
        return view('Frontend.Homes.home9', compact('themeColor'));
    }

    public function stratupAgency()
    {
        $themeColor = 'home-blue home-ten';
        return view('Frontend.Homes.home10', compact('themeColor'));
    }

    public function brandingAgency()
    {
        $themeColor = 'home-blue home-ten home-eleven';
        return view('Frontend.Homes.home11', compact('themeColor'));
    }
    
    public function businessAgency()
    {
        $themeColor = 'twelve-body loaded';
        return view('Frontend.Homes.home12', compact('themeColor'));
    }
    
    public function businessManagement()
    {
        $themeColor = 'thirteen-body loaded';
        return view('Frontend.Homes.home13', compact('themeColor'));
    }
}

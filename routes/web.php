<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\OnePageController;
use App\Http\Controllers\Pages\OtherPageController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Pages\ElementController;



Route::get('/', [HomeController::class, 'main'])->name('home');
// Route::prefix('finbiz/')->group(function () {
// Home pages
Route::prefix('homes/')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('consulting', 'consulting')->name('consulting');
        Route::get('corporate', 'corporate')->name('corporate');
        Route::get('insurance', 'insurance')->name('insurance');
        Route::get('marketing', 'marketing')->name('marketing');
        Route::get('finance', 'finance')->name('finance');
        Route::get('human-resource', 'humanResource')->name('humanResource');
        Route::get('itsolution', 'itsolution')->name('itsolution');
        Route::get('modern-agency', 'modernAgency')->name('modernagency');
        Route::get('stratup-agency', 'stratupAgency')->name('stratupAgency');
        Route::get('branding-agency', 'brandingAgency')->name('brandingagency');
        Route::get('business-agency', 'businessAgency')->name('businessagency');
        Route::get('business-management', 'businessManagement')->name('businessmanagement');
    });
});

// One page
Route::prefix('one-pages/')->group(function () {
    Route::controller(OnePageController::class)->group(function () {
        Route::get('main', 'main')->name('main');
        Route::get('consulting', 'consulting')->name('OnePageConsulting');
        Route::get('corporate', 'corporate')->name('OnePageCorporate');
        Route::get('insurance', 'insurance')->name('OnePageInsurance');
        Route::get('marketing', 'marketing')->name('OnePageMarketing');
        Route::get('finance', 'finance')->name('OnePageFinance');
        Route::get('human-resource', 'humanResource')->name('OnePageHumanResource');
        Route::get('itsolution', 'itsolution')->name('OnePageItsolution');
        Route::get('modern-agency', 'modernAgency')->name('OnePageModernAgency');
        Route::get('stratup-agency', 'stratupAgency')->name('OnePageStratupAgency');
        Route::get('branding-agency', 'brandingAgency')->name('OnePageBrandingAgency');
        Route::get('business-agency', 'businessAgency')->name('OnePageBusinessAgency');
        Route::get('business-management', 'businessManagement')->name('OnePageBusinessManagement');
    });
});

// Pages
Route::prefix('pages/')->group(function () {
    Route::controller(PageController::class)->group(function () {
        Route::get('appoitment', 'appoitment')->name('appoitment');
        Route::get('price-plans', 'pricePlans')->name('pricePlans');
        Route::get('portfolio-details', 'portfolioDetails')->name('portfolioDetails');
        Route::get('testimonial', 'testimonialStyle')->name('testimonialStyle');
        Route::get('portfolio-1', 'portfolioStyle1')->name('portfolioStyle1');
        Route::get('portfolio-2', 'portfolioStyle2')->name('portfolioStyle2');
        Route::get('portfolio-3', 'portfolioStyle3')->name('portfolioStyle3');
        Route::get('portfolio-4', 'portfolioStyle4')->name('portfolioStyle4');
        Route::get('portfolio-5', 'portfolioStyle5')->name('portfolioStyle5');
        Route::get('team-style-1', 'teamStyle1')->name('teamStyle1');
        Route::get('team-style-2', 'teamStyle2')->name('teamStyle2');
        Route::get('team-style-3', 'teamStyle3')->name('teamStyle3');
        Route::get('team-style-4', 'teamStyle4')->name('teamStyle4');
        Route::get('team-style-5', 'teamStyle5')->name('teamStyle5');
        Route::get('teamDetails', 'teamDetails')->name('teamDetails');
    });
});

// Element pages
Route::prefix('elements/')->group(function () {
    Route::controller(ElementController::class)->group(function () {
        Route::get('accordian', 'accordianPage')->name('accordianPage');
        Route::get('address-box', 'addressBox')->name('addressBox');
        Route::get('button', 'buttonPage')->name('buttonPage');
        Route::get('blog-slider', 'blogSlider')->name('blogSlider');
        Route::get('blog-quote', 'blogQuote')->name('blogQuote');
        Route::get('heading', 'headingPage')->name('headingPage');
        Route::get('call-to-a', 'callToA')->name('callToA');
        Route::get('contact-form', 'contactForm')->name('contactForm');
        Route::get('counter-up', 'counterUp')->name('counterUp');
        Route::get('brand', 'brandPage')->name('brandPage');
        Route::get('video-addon', 'videoAddon')->name('videoAddon');
        Route::get('pricing', 'PricingPage')->name('PricingPage');
        Route::get('typography', 'typoGraphy')->name('typoGraphy');
        Route::get('tab-addon', 'tabAddon')->name('tabAddon');
        Route::get('progress-bar', 'progressBar')->name('progressBar');
        Route::get('working-progress', 'workingProgress')->name('workingProgress');
        Route::get('testimonial', 'testimonialPage')->name('testimonialPage');
    });
});

//  Other Pages
Route::controller(OtherPageController::class)->group(function () {
    Route::get('about', 'aboutPage')->name('aboutPage');
    Route::get('contact', 'contactPage')->name('contactPage');
    Route::get('error', 'errorPage')->name('errorPage');
    Route::get('blog', 'blogPage')->name('blogPage');
    Route::get('bloggrid', 'blogGridPage')->name('blogGridPage');
    Route::get('blogdetails', 'blogDetailsPage')->name('blogDetailsPage');
    Route::get('ourservice', 'ourservicePage')->name('ourservicePage');
    Route::get('service2', 'service2Page')->name('service2Page');
    Route::get('service3', 'service3Page')->name('service3Page');
    Route::get('service-details', 'serviceDetailsPage')->name('serviceDetailsPage');
});
// });

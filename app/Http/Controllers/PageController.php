<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\CustomerData;
use App\Models\Realisation;
use App\Models\ServiceArea;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestFacade;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $seoService;

    /**
     * Create a new controller instance.
     *
     * @param SeoService $seoService
     */
    public function __construct(SeoService $seoService)
    {
        $this->seoService = $seoService;
    }

    /**
     * Render page with SEO metadata
     *
     * @param string $type
     * @param string|null $subType
     * @param Request|null $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function render(string $type, string $subType = null, Request $request = null)
    {
        if(!in_array($subType, ['alu','pvc',null])){
            return redirect('/', 301);
        }

        if(!Categories::hasValue($type)){
            $view = "Pages.".str_replace(['/'], ['.'], $type);
        } else {
            $view = 'Pages.' . Categories::getUrlPath($type) . '.' . Str::lower($subType);
            if(!view()->exists($view)){
                $view = 'Pages.' . Categories::getUrlPath($type);
            }
        }

        // Get location from request query parameter
        $location = $request ? $request->query('location') : RequestFacade::query('location');

        // Get SEO metadata for the page
        $pageType = $this->mapTypeToPageType($type);
        $metaKeywords = $this->seoService->getMetaKeywords($pageType, $location);
        $metaDescription = $this->seoService->getMetaDescription($pageType, $subType, $location);
        $pageTitle = $this->seoService->getPageTitle($pageType, $subType, $location);

        $view  = 'Pages.portes-fenetres-chassis.orp-jauche';
        $result = Str::afterLast($view, '.');

        $locations = ServiceArea::pluck('name')->map(fn($name) => strtolower($name));
        if(in_array($result, $locations->toArray())){
            $view = str_replace('.'.$result, '', $view);
        }
        return view($view, [
            "customerData" => CustomerData::first(),
            "modelData" => Realisation::with(['media'])->get(),
            "seoMetaKeywords" => $metaKeywords,
            "seoMetaDescription" => $metaDescription,
            "seoPageTitle" => $pageTitle,
            "seoLocation" => $location
        ]);
    }

    /**
     * Map route type to page type for SEO
     *
     * @param string $type
     * @return string
     */
    private function mapTypeToPageType(string $type): string
    {
        $mapping = [
            'portes-fenetres-chassis' => 'chassis',
            'pergolas' => 'pergolas',
            'porte-de-garage' => 'portes',
            'moustiquaire' => 'fenetres'
        ];

        return $mapping[$type] ?? 'home';
    }
}

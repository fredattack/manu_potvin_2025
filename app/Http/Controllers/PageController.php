<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\CustomerData;
use App\Models\Realisation;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $seoService;

    public function __construct(SeoService $seoService)
    {
        $this->seoService = $seoService;
    }

    public function render(string $type, string $subType = null, Request $request = null)
    {
        if (!in_array($subType, ['alu', 'pvc', null])) {
            return redirect('/', 301);
        }

        if (!Categories::hasValue($type)) {
            $view = "Pages." . str_replace(['/'], ['.'], $type);
        } else {
            $view = 'Pages.' . Categories::getUrlPath($type) . '.' . Str::lower($subType);
            if (!view()->exists($view)) {
                $view = 'Pages.' . Categories::getUrlPath($type);
            }
        }

        $pageType = $this->mapTypeToPageType($type);
        $metaKeywords = $this->seoService->getMetaKeywords($pageType);
        $metaDescription = $this->seoService->getMetaDescription($pageType, $subType);
        $pageTitle = $this->seoService->getPageTitle($pageType, $subType);

        return view($view, [
            "customerData" => CustomerData::first(),
            "modelData" => Realisation::with(['media'])->get(),
            "seoMetaKeywords" => $metaKeywords,
            "seoMetaDescription" => $metaDescription,
            "seoPageTitle" => $pageTitle,
        ]);
    }

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

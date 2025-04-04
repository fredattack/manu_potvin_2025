<?php

namespace App\Services;

use App\Models\SeoKeyword;
use Illuminate\Support\Facades\Request;

/**
 * Service for managing SEO-related functionality
 */
class SeoService
{
    /**
     * Get meta keywords for a specific page type and location
     *
     * @param string $pageType
     * @param string|null $location
     * @return string
     */
    public function getMetaKeywords(string $pageType, ?string $location = null): string
    {
        // If no keywords found in database, return default keywords
        $keywords = SeoKeyword::getKeywordsFor($pageType, $location);
        
        if ($keywords->isEmpty()) {
            return $this->getDefaultKeywords($pageType, $location);
        }
        
        return $keywords->pluck('keyword')->implode(', ');
    }
    
    /**
     * Get default meta keywords for a page type
     *
     * @param string $pageType
     * @param string|null $location
     * @return string
     */
    private function getDefaultKeywords(string $pageType, ?string $location = null): string
    {
        $baseKeywords = $this->getBaseKeywords($pageType);
        
        if (!$location) {
            return $baseKeywords;
        }
        
        // Add location to base keywords
        $locationKeywords = [];
        foreach (explode(', ', $baseKeywords) as $keyword) {
            $locationKeywords[] = trim($keyword) . ' ' . $location;
        }
        
        return implode(', ', $locationKeywords) . ', ' . $baseKeywords;
    }
    
    /**
     * Get base keywords for a page type
     *
     * @param string $pageType
     * @return string
     */
    private function getBaseKeywords(string $pageType): string
    {
        $keywordsByType = [
            'fenetres' => 'installation fenêtres, remplacement fenêtres, fenêtres sur mesure, fenêtres aluminium, fenêtres PVC',
            'portes' => 'installation portes, portes aluminium, portes sur mesure, portes d\'entrée, portes de sécurité',
            'chassis' => 'remplacement châssis, châssis aluminium, châssis PVC, châssis sur mesure, isolation thermique',
            'pergolas' => 'pergola bioclimatique, installation pergola, pergola sur mesure, devis pergola, pergola aluminium',
            'home' => 'châssis, portes, fenêtres, pergolas, menuiserie extérieure, rénovation'
        ];
        
        return $keywordsByType[$pageType] ?? 'châssis, portes, fenêtres, pergolas';
    }
    
    /**
     * Get meta description for a page type and location
     *
     * @param string $pageType
     * @param string|null $location
     * @return string
     */
    public function getMetaDescription(string $pageType, ?string $location = null): string
    {
        $descriptions = [
            'fenetres' => 'Spécialiste en installation et remplacement de fenêtres sur mesure en aluminium et PVC',
            'portes' => 'Expert en installation de portes d\'entrée et de sécurité sur mesure en aluminium et PVC',
            'chassis' => 'Installation et remplacement de châssis de qualité pour une isolation thermique et acoustique optimale',
            'pergolas' => 'Conception et installation de pergolas bioclimatiques sur mesure pour votre extérieur',
            'home' => 'Entreprise spécialisée dans l\'installation et le remplacement de châssis, portes, fenêtres et pergolas'
        ];
        
        $baseDescription = $descriptions[$pageType] ?? $descriptions['home'];
        
        if ($location) {
            return $baseDescription . ' à ' . $location . ' et ses environs. Devis gratuit et service de qualité.';
        }
        
        return $baseDescription . '. Intervention dans toute la région. Devis gratuit et service de qualité.';
    }
    
    /**
     * Get page title with location
     *
     * @param string $pageType
     * @param string|null $location
     * @return string
     */
    public function getPageTitle(string $pageType, ?string $location = null): string
    {
        $titles = [
            'fenetres' => 'Fenêtres sur mesure',
            'portes' => 'Portes d\'entrée et de sécurité',
            'chassis' => 'Châssis aluminium et PVC',
            'pergolas' => 'Pergolas bioclimatiques',
            'home' => 'Menuiserie extérieure'
        ];
        
        $baseTitle = $titles[$pageType] ?? $titles['home'];
        
        if ($location) {
            return $baseTitle . ' à ' . $location;
        }
        
        return $baseTitle;
    }
    
    /**
     * Get current location from request
     *
     * @return string|null
     */
    public function getCurrentLocation(): ?string
    {
        // Check if location is in the URL parameters
        $location = Request::query('location');
        
        if ($location) {
            return $location;
        }
        
        // Default location if none specified
        return null;
    }
}

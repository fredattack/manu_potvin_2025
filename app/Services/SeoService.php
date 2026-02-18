<?php

namespace App\Services;

use App\Models\SeoKeyword;

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
     * Get meta description for a page type, subtype and location
     *
     * @param string $pageType
     * @param string|null $subType
     * @param string|null $location
     * @return string
     */
    public function getMetaDescription(string $pageType, ?string $subType = null, ?string $location = null): string
    {
        // Base descriptions by page type
        $descriptions = [
            'fenetres' => [
                'base' => 'Spécialiste en installation et remplacement de fenêtres sur mesure',
                'alu' => 'Spécialiste en installation et remplacement de fenêtres en aluminium sur mesure, alliant esthétique moderne et performance énergétique',
                'pvc' => 'Spécialiste en installation et remplacement de fenêtres en PVC sur mesure, offrant un excellent rapport qualité-prix et une isolation optimale'
            ],
            'portes' => [
                'base' => 'Expert en installation de portes d\'entrée et de sécurité sur mesure',
                'alu' => 'Expert en installation de portes d\'entrée et de sécurité en aluminium, combinant robustesse, élégance et durabilité',
                'pvc' => 'Expert en installation de portes d\'entrée et de sécurité en PVC, alliant sécurité, isolation thermique et budget maîtrisé'
            ],
            'chassis' => [
                'base' => 'Installation et remplacement de châssis de qualité pour une isolation thermique et acoustique optimale',
                'alu' => 'Installation et remplacement de châssis en aluminium, idéals pour les grandes ouvertures et un design contemporain avec une excellente résistance',
                'pvc' => 'Installation et remplacement de châssis en PVC, parfaits pour une isolation thermique supérieure et un entretien minimal à prix avantageux'
            ],
            'pergolas' => [
                'base' => 'Conception et installation de pergolas bioclimatiques sur mesure pour votre extérieur',
                'alu' => 'Conception et installation de pergolas bioclimatiques en aluminium, alliant résistance aux intempéries et design moderne',
                'pvc' => 'Conception et installation de pergolas en PVC, solution économique et durable pour profiter de votre extérieur'
            ],
            'home' => [
                'base' => 'Entreprise spécialisée dans l\'installation et le remplacement de châssis, portes, fenêtres et pergolas'
            ]
        ];

        // Get the appropriate description based on page type and subtype
        if ($subType && isset($descriptions[$pageType][$subType])) {
            $baseDescription = $descriptions[$pageType][$subType];
        } else {
            $baseDescription = $descriptions[$pageType]['base'] ?? $descriptions['home']['base'];
        }

        if ($location) {
            $locationDetails = $this->getLocationSpecificDetails($location);

            return "{$baseDescription} à {$location}. {$locationDetails} Devis gratuit et service de qualité.";
        }

        return "{$baseDescription}. Intervention dans toute la région. Devis gratuit et service personnalisé.";
    }

    /**
     * Get location-specific details to make descriptions more unique
     *
     * @param string $location
     * @return string
     */
    private function getLocationSpecificDetails(string $location): string
    {
        $locationDetails = [
            'Hannut' => 'Service rapide et professionnel dans toute la région de Hannut et ses communes avoisinantes.',
            'Waremme' => 'Nombreuses réalisations à Waremme témoignant de notre expertise et de la satisfaction de nos clients.',
            'Jodoigne' => 'Intervention rapide à Jodoigne et dans le Brabant wallon pour tous vos projets de menuiserie extérieure.',
            'Orp-Jauche' => 'Solutions adaptées aux habitations traditionnelles et modernes d\'Orp-Jauche et ses environs.',
            'Braives' => 'Expérience confirmée dans la rénovation et l\'installation à Braives et dans toute la Hesbaye.',
            'Helecine' => 'Service personnalisé pour les habitants d\'Hélécine, avec des solutions sur mesure pour chaque projet.'
        ];

        return $locationDetails[$location] ?? 'Nous intervenons dans cette localité et ses environs pour tous vos projets.';
    }

    /**
     * Get page title with subtype and location
     *
     * @param string $pageType
     * @param string|null $subType
     * @param string|null $location
     * @return string
     */
    public function getPageTitle(string $pageType, ?string $subType = null, ?string $location = null): string
    {
        // Base titles by page type
        $titles = [
            'fenetres' => [
                'base' => 'Fenêtres sur mesure',
                'alu' => 'Fenêtres en aluminium sur mesure',
                'pvc' => 'Fenêtres en PVC sur mesure'
            ],
            'portes' => [
                'base' => 'Portes d\'entrée et de sécurité',
                'alu' => 'Portes d\'entrée en aluminium',
                'pvc' => 'Portes d\'entrée en PVC'
            ],
            'chassis' => [
                'base' => 'Châssis aluminium et PVC',
                'alu' => 'Châssis en aluminium',
                'pvc' => 'Châssis en PVC'
            ],
            'pergolas' => [
                'base' => 'Pergolas bioclimatiques',
                'alu' => 'Pergolas bioclimatiques en aluminium',
                'pvc' => 'Pergolas en PVC'
            ],
            'home' => [
                'base' => 'Menuiserie extérieure'
            ]
        ];

        // Get the appropriate title based on page type and subtype
        if ($subType && isset($titles[$pageType][$subType])) {
            $baseTitle = $titles[$pageType][$subType];
        } else {
            $baseTitle = $titles[$pageType]['base'] ?? $titles['home']['base'];
        }

        // Add location if available
        if ($location) {
            $baseTitle .= ' à ' . $location;
        }

        $baseTitle .= ' | Manu Potvin';

        return $baseTitle;
    }

}

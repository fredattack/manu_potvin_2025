<?php

namespace App\Http\Controllers;

use App\Models\ServiceArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    /**
     * Affiche une page produit avec contenu optimisé pour une localité spécifique
     *
     * @param Request $request
     * @param string $type Type de page (pergolas, porte-de-garage, etc.)
     * @param string $location Nom de la localité (hannut, waremme, etc.)
     * @return \Illuminate\Contracts\View\View
     */
    public function renderLocalPage(Request $request, string $type, string $location)
    {
        // Récupérer le sous-type si présent dans la route
        $subType = $request->route('subType');
        
        // Trouver la zone d'intervention correspondant à la localité
        $serviceArea = $this->findServiceAreaBySlug($location);
        
        if (!$serviceArea) {
            abort(404, 'Cette localité n\'est pas desservie par nos services.');
        }
        
        // Préparer les variables SEO pour la vue
        $seoData = [
            'seoLocation' => $serviceArea->name,
            'seoPageTitle' => $this->generatePageTitle($type, $subType, $serviceArea->name),
            'seoMetaDescription' => $this->generateMetaDescription($type, $subType, $serviceArea->name),
            'seoMetaKeywords' => $this->generateMetaKeywords($type, $subType, $serviceArea->name),
        ];
        
        // Déterminer quelle vue utiliser en fonction du type de page
        $view = $this->getViewForType($type, $subType);
        
        // Passer les données SEO à la vue
        return view($view, $seoData);
    }
    
    /**
     * Trouve une zone d'intervention par son slug
     *
     * @param string $slug
     * @return ServiceArea|null
     */
    protected function findServiceAreaBySlug(string $slug)
    {
        // Récupérer toutes les zones d'intervention actives
        $serviceAreas = ServiceArea::where('active', true)->get();
        
        // Rechercher la zone correspondant au slug
        foreach ($serviceAreas as $area) {
            if ($this->slugify($area->name) === $slug) {
                return $area;
            }
        }
        
        return null;
    }
    
    /**
     * Génère un titre de page optimisé pour le SEO
     *
     * @param string $type
     * @param string|null $subType
     * @param string $location
     * @return string
     */
    protected function generatePageTitle(string $type, ?string $subType, string $location)
    {
        $titles = [
            'portes-fenetres-chassis' => 'Expert en châssis, portes et fenêtres',
            'pergolas' => 'Installation de pergolas sur-mesure',
            'porte-de-garage' => 'Installation de portes de garage',
            'moustiquaire' => 'Installation de moustiquaires sur-mesure',
        ];
        
        $subTitles = [
            'alu' => 'en aluminium',
            'pvc' => 'en PVC',
        ];
        
        $baseTitle = $titles[$type] ?? ucfirst(str_replace('-', ' ', $type));
        
        if ($subType && isset($subTitles[$subType])) {
            $baseTitle .= ' ' . $subTitles[$subType];
        }
        
        return $baseTitle . ' à ' . $location;
    }
    
    /**
     * Génère une meta description optimisée pour le SEO
     *
     * @param string $type
     * @param string|null $subType
     * @param string $location
     * @return string
     */
    protected function generateMetaDescription(string $type, ?string $subType, string $location)
    {
        $descriptions = [
            'portes-fenetres-chassis' => 'Spécialiste en installation et remplacement de châssis de qualité',
            'pergolas' => 'Spécialiste en installation de pergolas sur-mesure',
            'porte-de-garage' => 'Spécialiste en installation et réparation de portes de garage',
            'moustiquaire' => 'Spécialiste en fabrication et installation de moustiquaires sur-mesure',
        ];
        
        $subDescriptions = [
            'alu' => 'en aluminium',
            'pvc' => 'en PVC',
        ];
        
        $baseDescription = $descriptions[$type] ?? 'Spécialiste en ' . str_replace('-', ' ', $type);
        
        if ($subType && isset($subDescriptions[$subType])) {
            $baseDescription .= ' ' . $subDescriptions[$subType];
        }
        
        return $baseDescription . ' à ' . $location . ' et dans toute la région. Solutions sur mesure pour une qualité optimale. Devis gratuit !';
    }
    
    /**
     * Génère des mots-clés optimisés pour le SEO
     *
     * @param string $type
     * @param string|null $subType
     * @param string $location
     * @return string
     */
    protected function generateMetaKeywords(string $type, ?string $subType, string $location)
    {
        $keywords = [
            'portes-fenetres-chassis' => ['châssis', 'portes', 'fenêtres', 'installation', 'remplacement'],
            'pergolas' => ['pergolas', 'installation pergolas', 'pergolas sur-mesure', 'pergolas bioclimatiques'],
            'porte-de-garage' => ['portes de garage', 'installation portes', 'portes motorisées', 'portes sectionnelles'],
            'moustiquaire' => ['moustiquaires', 'installation moustiquaires', 'moustiquaires sur-mesure', 'protection insectes'],
        ];
        
        $subKeywords = [
            'alu' => ['aluminium', 'alu'],
            'pvc' => ['PVC', 'plastique'],
        ];
        
        $baseKeywords = $keywords[$type] ?? [str_replace('-', ' ', $type)];
        
        if ($subType && isset($subKeywords[$subType])) {
            $baseKeywords = array_merge($baseKeywords, $subKeywords[$subType]);
        }
        
        // Ajouter les mots-clés avec la localité
        $localKeywords = [];
        foreach ($baseKeywords as $keyword) {
            $localKeywords[] = $keyword . ' ' . $location;
        }
        
        // Fusionner les mots-clés de base et les mots-clés locaux
        $allKeywords = array_merge($baseKeywords, $localKeywords);
        
        return implode(', ', $allKeywords);
    }
    
    /**
     * Détermine quelle vue utiliser en fonction du type de page
     *
     * @param string $type
     * @param string|null $subType
     * @return string
     */
    protected function getViewForType(string $type, ?string $subType = null)
    {
        $views = [
            'portes-fenetres-chassis' => 'Pages.portes-fenetres-chassis',
            'pergolas' => 'Pages.pergolas',
            'porte-de-garage' => 'Pages.porte-de-garage',
            'moustiquaire' => 'Pages.moustiquaire',
        ];
        
        return $views[$type] ?? 'Pages.' . $type;
    }
    
    /**
     * Convertit un texte en slug URL
     *
     * @param string $text
     * @return string
     */
    protected function slugify($text)
    {
        // Remplacer les caractères non alphanumériques par des tirets
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
        // Translitérer
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // Supprimer les caractères indésirables
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // Supprimer les tirets en début et fin
        $text = trim($text, '-');
        
        // Remplacer les tirets multiples par un seul
        $text = preg_replace('~-+~', '-', $text);
        
        // Convertir en minuscules
        $text = strtolower($text);
        
        return $text ?: 'n-a';
    }
}

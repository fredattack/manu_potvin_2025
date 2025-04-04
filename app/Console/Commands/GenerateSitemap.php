<?php

namespace App\Console\Commands;

use App\Models\ServiceArea;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate {--domain=https://www.manupotvin.be}';
    protected $description = 'Générer le sitemap XML pour le site avec les pages SEO locales';

    // Pages produits principales
    protected $productPages = [
        '/products/portes-fenetres-chassis' => 'Châssis et fenêtres',
        '/products/chassis/kind/alu' => 'Châssis aluminium',
        '/products/chassis/kind/pvc' => 'Châssis PVC',
        '/products/pergolas' => 'Pergolas',
        '/products/porte-de-garage' => 'Portes de garage',
        '/products/moustiquaire' => 'Moustiquaires',
    ];

    public function handle()
    {
        // Récupérer le domaine depuis l'option ou utiliser la valeur par défaut
        $domain = $this->option('domain');
        
        $sitemap = Sitemap::create();
        
        // Ajouter les pages principales
        $sitemap->add(Url::create($domain)->setPriority(1.0)->setChangeFrequency('monthly'));
        $sitemap->add(Url::create($domain . '/contact')->setPriority(0.8)->setChangeFrequency('monthly'));
        
        // Ajouter les pages produits principales
        foreach ($this->productPages as $url => $title) {
            $sitemap->add(
                Url::create($domain . $url)
                    ->setPriority(0.9)
                    ->setChangeFrequency('monthly')
            );
        }
        
        // Récupérer toutes les zones d'intervention actives
        $serviceAreas = ServiceArea::where('active', true)->get();
        
        // Pour chaque zone d'intervention, créer des URLs localisées pour chaque page produit
        foreach ($serviceAreas as $area) {
            foreach ($this->productPages as $url => $title) {
                // Créer une URL SEO localisée (ex: /products/pergolas/hannut)
                $localUrl = $domain . $url . '/' . $this->slugify($area->name);
                
                $sitemap->add(
                    Url::create($localUrl)
                        ->setPriority(0.8)
                        ->setChangeFrequency('monthly')
                );
            }
        }
        
        // Générer le fichier sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $this->info('Sitemap généré avec succès pour le domaine ' . $domain . ', incluant ' . count($serviceAreas) * count($this->productPages) . ' pages SEO locales!');
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

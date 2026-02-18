<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Realisation;
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
        $sitemap->add(Url::create($domain)->setPriority(1.0)->setChangeFrequency('monthly')->setLastModificationDate(now()));
        $sitemap->add(Url::create($domain . '/contact')->setPriority(0.8)->setChangeFrequency('monthly')->setLastModificationDate(now()));
        $sitemap->add(Url::create($domain . '/products/realisations')->setPriority(0.8)->setChangeFrequency('weekly')->setLastModificationDate(now()));
        $sitemap->add(Url::create($domain . '/politique-de-confidentialite')->setPriority(0.3)->setChangeFrequency('yearly')->setLastModificationDate(now()));
        $sitemap->add(Url::create($domain . '/mentions-legales')->setPriority(0.3)->setChangeFrequency('yearly')->setLastModificationDate(now()));
        $sitemap->add(Url::create($domain . '/a-propos')->setPriority(0.7)->setChangeFrequency('monthly')->setLastModificationDate(now()));

        // Ajouter les pages produits principales
        foreach ($this->productPages as $url => $title) {
            $sitemap->add(
                Url::create($domain . $url)
                    ->setPriority(0.9)
                    ->setChangeFrequency('monthly')
                    ->setLastModificationDate(now())
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
                        ->setLastModificationDate(now())
                );
            }
        }

        // Ajouter la page blog
        $sitemap->add(Url::create($domain . '/blog')->setPriority(0.7)->setChangeFrequency('weekly')->setLastModificationDate(now()));

        // Ajouter les articles publiés
        $articles = Article::published()->get();
        $this->info("Ajout de {$articles->count()} articles de blog au sitemap...");

        foreach ($articles as $article) {
            $sitemap->add(
                Url::create("{$domain}/blog/{$article->slug}")
                    ->setPriority(0.6)
                    ->setChangeFrequency('monthly')
                    ->setLastModificationDate($article->updated_at)
            );
        }

        // Ajouter les pages de détail des réalisations
        $realisations = Realisation::where('published', true)->get();
        $this->info('Ajout de ' . count($realisations) . ' pages de détail de réalisations au sitemap...');

        foreach ($realisations as $realisation) {
            $realisationUrl = $domain . '/realisation/' . $realisation->id . '/detail';

            $sitemap->add(
                Url::create($realisationUrl)
                    ->setPriority(0.7)
                    ->setChangeFrequency('monthly')
                    ->setLastModificationDate($realisation->updated_at)
            );
        }

        // Générer le fichier sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès pour le domaine ' . $domain . ', incluant ' . count($serviceAreas) * count($this->productPages) . ' pages SEO locales et ' . count($realisations) . ' pages de détail de réalisations!');
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

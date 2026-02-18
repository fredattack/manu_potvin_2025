<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Realisation;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate {--domain=https://www.manupotvin.be}';
    protected $description = 'Générer le sitemap XML pour le site';

    protected $productPages = [
        '/products/portes-fenetres-chassis' => 'Châssis et fenêtres',
        '/products/portes-fenetres-chassis/kind/alu' => 'Châssis aluminium',
        '/products/portes-fenetres-chassis/kind/pvc' => 'Châssis PVC',
        '/products/pergolas' => 'Pergolas',
        '/products/porte-de-garage' => 'Portes de garage',
        '/products/moustiquaire' => 'Moustiquaires',
    ];

    public function handle(): void
    {
        $domain = $this->option('domain');

        $sitemap = Sitemap::create();

        $sitemap->add(Url::create($domain)->setPriority(1.0)->setChangeFrequency('monthly')->setLastModificationDate(now()));
        $sitemap->add(Url::create("{$domain}/contact")->setPriority(0.8)->setChangeFrequency('monthly')->setLastModificationDate(now()));
        $sitemap->add(Url::create("{$domain}/products/realisations")->setPriority(0.8)->setChangeFrequency('weekly')->setLastModificationDate(now()));
        $sitemap->add(Url::create("{$domain}/politique-de-confidentialite")->setPriority(0.3)->setChangeFrequency('yearly')->setLastModificationDate(now()));
        $sitemap->add(Url::create("{$domain}/mentions-legales")->setPriority(0.3)->setChangeFrequency('yearly')->setLastModificationDate(now()));
        $sitemap->add(Url::create("{$domain}/a-propos")->setPriority(0.7)->setChangeFrequency('monthly')->setLastModificationDate(now()));

        foreach ($this->productPages as $url => $title) {
            $sitemap->add(
                Url::create("{$domain}{$url}")
                    ->setPriority(0.9)
                    ->setChangeFrequency('monthly')
                    ->setLastModificationDate(now())
            );
        }

        $sitemap->add(Url::create("{$domain}/blog")->setPriority(0.7)->setChangeFrequency('weekly')->setLastModificationDate(now()));

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

        $realisations = Realisation::where('published', true)->get();
        $this->info("Ajout de {$realisations->count()} pages de détail de réalisations au sitemap...");

        foreach ($realisations as $realisation) {
            $sitemap->add(
                Url::create("{$domain}/realisation/{$realisation->id}/detail")
                    ->setPriority(0.7)
                    ->setChangeFrequency('monthly')
                    ->setLastModificationDate($realisation->updated_at)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $totalPages = count($this->productPages) + 6 + $articles->count() + $realisations->count();
        $this->info("Sitemap généré avec succès pour {$domain}, {$totalPages} pages au total.");
    }
}

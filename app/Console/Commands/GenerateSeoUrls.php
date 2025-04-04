<?php

namespace App\Console\Commands;

use App\Models\SeoKeyword;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateSeoUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:generate-urls {--output=storage/seo/urls.txt : Chemin du fichier de sortie}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Génère des URLs optimisées pour le SEO local basées sur les mots-clés et localités';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Génération des URLs optimisées pour le SEO local...');
        
        // Récupérer toutes les localités uniques
        $locations = SeoKeyword::whereNotNull('location')
            ->where('location', '!=', '')
            ->where('active', true)
            ->distinct()
            ->pluck('location')
            ->toArray();
            
        // Définir les routes principales
        $routes = [
            'chassis' => '/products/portes-fenetres-chassis',
            'fenetres' => '/products/portes-fenetres-chassis',
            'portes' => '/products/porte-de-garage',
            'pergolas' => '/products/pergolas',
        ];
        
        // Générer les URLs
        $urls = [];
        $baseUrl = config('app.url');
        
        // URLs de base (sans localité)
        foreach ($routes as $type => $route) {
            $urls[] = $baseUrl . $route;
        }
        
        // URLs avec localité
        foreach ($locations as $location) {
            foreach ($routes as $type => $route) {
                $urls[] = $baseUrl . $route . '?location=' . urlencode($location);
                
                // Sous-types pour châssis/fenêtres
                if ($type === 'chassis' || $type === 'fenetres') {
                    $urls[] = $baseUrl . $route . '/kind/alu?location=' . urlencode($location);
                    $urls[] = $baseUrl . $route . '/kind/pvc?location=' . urlencode($location);
                }
            }
        }
        
        // Générer le sitemap.txt
        $outputPath = $this->option('output');
        $directory = dirname($outputPath);
        
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        
        File::put($outputPath, implode(PHP_EOL, $urls));
        
        $this->info(count($urls) . ' URLs générées et enregistrées dans ' . $outputPath);
        
        // Afficher les instructions pour l'utilisation
        $this->newLine();
        $this->line('Pour utiliser ces URLs:');
        $this->line('1. Créez des liens internes vers ces URLs dans votre contenu');
        $this->line('2. Utilisez ces URLs dans votre stratégie de link building');
        $this->line('3. Soumettez ces URLs à Google Search Console pour indexation');
        
        return Command::SUCCESS;
    }
}

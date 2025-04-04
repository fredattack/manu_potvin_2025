<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seo_keywords', function (Blueprint $table) {
            $table->id();
            $table->string('page_type'); // Type de page (portes, fenêtres, pergolas, etc.)
            $table->string('location'); // Localité (Waremme, Hannut, etc.)
            $table->string('keyword'); // Mot-clé complet (ex: installation fenêtres Waremme)
            $table->enum('intention', ['transactionnelle', 'informationnelle', 'navigationnelle']);
            $table->integer('volume_estime')->nullable(); // Volume estimé de recherche mensuel
            $table->enum('difficulte', ['faible', 'moyenne', 'elevee'])->default('moyenne');
            $table->integer('pertinence_metier')->default(3); // Échelle de 1 à 5
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        
        // Insertion des mots-clés SEO locaux
        $this->insertSeoKeywords();
    }
    
    /**
     * Insert SEO keywords for different locations
     */
    private function insertSeoKeywords(): void
    {
        $locations = ['Waremme', 'Hannut', 'Jodoigne', 'Orp-Jauche', 'Braives', 'Hélécine'];
        $keywords = [];
        
        // Mots-clés pour les fenêtres
        foreach ($locations as $location) {
            $keywords[] = [
                'page_type' => 'fenetres',
                'location' => $location,
                'keyword' => "installation fenêtres {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(30, 70),
                'difficulte' => 'moyenne',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $keywords[] = [
                'page_type' => 'fenetres',
                'location' => $location,
                'keyword' => "remplacement fenêtres {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(40, 80),
                'difficulte' => 'moyenne',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Mots-clés pour les châssis
        foreach ($locations as $location) {
            $keywords[] = [
                'page_type' => 'chassis',
                'location' => $location,
                'keyword' => "remplacement châssis {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(40, 90),
                'difficulte' => 'moyenne',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $keywords[] = [
                'page_type' => 'chassis',
                'location' => $location,
                'keyword' => "entreprise châssis {$location}",
                'intention' => 'navigationnelle',
                'volume_estime' => rand(20, 50),
                'difficulte' => 'faible',
                'pertinence_metier' => 4,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Mots-clés pour les portes
        foreach ($locations as $location) {
            $keywords[] = [
                'page_type' => 'portes',
                'location' => $location,
                'keyword' => "porte aluminium sur mesure {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(30, 60),
                'difficulte' => 'moyenne',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $keywords[] = [
                'page_type' => 'portes',
                'location' => $location,
                'keyword' => "installation porte entrée {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(25, 55),
                'difficulte' => 'moyenne',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Mots-clés pour les pergolas
        foreach ($locations as $location) {
            $keywords[] = [
                'page_type' => 'pergolas',
                'location' => $location,
                'keyword' => "pergola bioclimatique {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(20, 50),
                'difficulte' => 'faible',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $keywords[] = [
                'page_type' => 'pergolas',
                'location' => $location,
                'keyword' => "devis pergola {$location}",
                'intention' => 'transactionnelle',
                'volume_estime' => rand(15, 45),
                'difficulte' => 'faible',
                'pertinence_metier' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        // Mots-clés informationnels (sans localité)
        $keywords[] = [
            'page_type' => 'fenetres',
            'location' => '',
            'keyword' => "quelle fenêtre choisir pour sa maison",
            'intention' => 'informationnelle',
            'volume_estime' => 120,
            'difficulte' => 'elevee',
            'pertinence_metier' => 3,
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $keywords[] = [
            'page_type' => 'pergolas',
            'location' => '',
            'keyword' => "quelle pergola choisir pour son jardin",
            'intention' => 'informationnelle',
            'volume_estime' => 100,
            'difficulte' => 'elevee',
            'pertinence_metier' => 3,
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // Insertion des mots-clés dans la base de données
        DB::table('seo_keywords')->insert($keywords);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_keywords');
    }
};

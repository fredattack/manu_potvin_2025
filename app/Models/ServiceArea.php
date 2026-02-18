<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ServiceArea extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'postal_code',
        'province',
        'latitude',
        'longitude',
        'radius',
        'priority',
        'is_primary',
        'active',
        'notes',
        'description',
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'radius' => 'integer',
        'priority' => 'integer',
        'is_primary' => 'boolean',
        'active' => 'boolean',
    ];
    
    /**
     * Get SEO keywords associated with this service area
     */
    public function seoKeywords()
    {
        return $this->hasMany(SeoKeyword::class, 'location', 'name');
    }
    
    /**
     * Get active service areas ordered by priority
     *
     * @param int|null $limit
     * @return Collection
     */
    public static function getActiveAreas(?int $limit = null): Collection
    {
        $query = self::where('active', true)
            ->orderBy('priority', 'desc')
            ->orderBy('name');
            
        if ($limit) {
            $query->limit($limit);
        }
        
        return $query->get();
    }
    
    /**
     * Get primary service areas
     *
     * @return Collection
     */
    public static function getPrimaryAreas(): Collection
    {
        return self::where('active', true)
            ->where('is_primary', true)
            ->orderBy('priority', 'desc')
            ->orderBy('name')
            ->get();
    }
    
    /**
     * Generate SEO keywords for this service area
     *
     * @return void
     */
    public function generateSeoKeywords(): void
    {
        // Définir les types de pages et leurs mots-clés associés
        $pageTypes = [
            'chassis' => [
                ['keyword_template' => 'remplacement châssis %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
                ['keyword_template' => 'entreprise châssis %s', 'intention' => 'navigationnelle', 'pertinence_metier' => 4],
            ],
            'fenetres' => [
                ['keyword_template' => 'installation fenêtres %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
                ['keyword_template' => 'remplacement fenêtres %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
            ],
            'portes' => [
                ['keyword_template' => 'porte aluminium sur mesure %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
                ['keyword_template' => 'installation porte entrée %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
            ],
            'pergolas' => [
                ['keyword_template' => 'pergola bioclimatique %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
                ['keyword_template' => 'devis pergola %s', 'intention' => 'transactionnelle', 'pertinence_metier' => 5],
            ],
        ];
        
        // Générer les mots-clés pour chaque type de page
        foreach ($pageTypes as $pageType => $keywords) {
            foreach ($keywords as $keywordData) {
                $keyword = sprintf($keywordData['keyword_template'], $this->name);
                
                // Vérifier si le mot-clé existe déjà
                $existingKeyword = SeoKeyword::where('page_type', $pageType)
                    ->where('location', $this->name)
                    ->where('keyword', $keyword)
                    ->first();
                
                // Si le mot-clé n'existe pas, le créer
                if (!$existingKeyword) {
                    SeoKeyword::create([
                        'page_type' => $pageType,
                        'location' => $this->name,
                        'keyword' => $keyword,
                        'intention' => $keywordData['intention'],
                        'volume_estime' => rand(20, 80),
                        'difficulte' => 'moyenne',
                        'pertinence_metier' => $keywordData['pertinence_metier'],
                        'active' => true,
                    ]);
                }
            }
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoKeyword extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'page_type',
        'location',
        'keyword',
        'intention',
        'volume_estime',
        'difficulte',
        'pertinence_metier',
        'active',
    ];
    
    /**
     * Get keywords for a specific page type and location
     *
     * @param string $pageType
     * @param string|null $location
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getKeywordsFor(string $pageType, ?string $location = null)
    {
        $query = self::where('page_type', $pageType)
            ->where('active', true);
            
        if ($location) {
            $query->where('location', $location);
        }
        
        return $query->orderBy('pertinence_metier', 'desc')->get();
    }
    
    /**
     * Get a comma-separated list of keywords for meta tags
     *
     * @param string $pageType
     * @param string|null $location
     * @return string
     */
    public static function getMetaKeywords(string $pageType, ?string $location = null): string
    {
        $keywords = self::getKeywordsFor($pageType, $location)
            ->pluck('keyword')
            ->toArray();
            
        return implode(', ', $keywords);
    }
}

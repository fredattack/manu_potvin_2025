<?php

namespace App\Models;

use App\Scopes\OrderByScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator;

/**
 * 
 *
 * @property-read mixed $gallery_images
 * @property-read mixed $image
 * @property-read mixed $images_lightbox
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\RealisationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation withoutTrashed()
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $category
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereUpdatedAt($value)
 * @property string|null $place
 * @property string|null $date
 * @property string|null $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation wherePlace($value)
 * @property int $favorite
 * @property-read mixed $image_url
 * @property-read mixed $main_category
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation favorites($blackListIds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Realisation whereFavorite($value)
 * @property int|null $ordre Ordre d'affichage
 * @property-read mixed $illustration
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Realisation whereOrdre($value)
 * @mixin \Eloquent
 */
class Realisation extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $appends = ['image', 'gallery_images','images_lightbox'];

    protected $fillable = [
        'title',
        'description',
        'category',
    ];

    protected $casts = ['category' => 'array'];

    protected static function booted()
    {
        static::addGlobalScope(new OrderByScope());
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('illustration')->singleFile();
        $this->addMediaCollection('gallery');
    }

//
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300)
            ->withResponsiveImages();

        $this->addMediaConversion('webp')
            ->format('webp')
            ->quality(80)
            ->withResponsiveImages();
    }

    public function mainCategory(): Attribute
    {
        return Attribute::make(
            get: function() {
                if(is_null($this->category) || empty($this->category)) return null;
                return $this->category[0];
            },
        );

    }

    public function galleryImages(): Attribute
    {
        return Attribute::make(
            get: function() {
                $gallery = [];
                foreach ($this->media->where('collection_name', 'gallery') as $item) {
                    $gallery[] = [
                        "id"=>$item->id,
                        "html"=>$item->toHtml(),
                    ];
                }
                return $gallery;
            },
        );

    }

    public function date(): Attribute
    {
        return Attribute::make(
            get: function($value) {
                if(is_null($value)) return $this->created_at;
                return $value;
            },
        );

    }
    public function customer(): Attribute
    {
        return Attribute::make(
            get: function($value) {
                if(is_null($value)) return 'anonyme';
                return $value;
            },
        );

    }
    public function place(): Attribute
    {
        return Attribute::make(
            get: function($value) {
                if(is_null($value)) return 'privé';
                return $value;
            },
        );

    }

    public function image(): Attribute
    {
        return Attribute::make(

            get: function() {
                if ( $this->illustration ) {
                    $args = $this->illustration;
                    return $args?->toHtml();
                }
                return '<img class="rounded-full" src="'.url("/assets/images/custom/default/portfolio_banner.jpeg").'" width="960" height="960">';
            },
        );

    }
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: function() {
                if ($this->illustration) {
                    $media = $this->illustration;

                    if ($media->hasGeneratedConversion('webp')) {
                        return $media->getUrl('webp');
                    }

                    return $media->getUrl();
                }

                return 'No Images';
            },
        );
    }
    public function imagesLightbox(): Attribute
    {
        return Attribute::make(
            get: function() {
                if ($this->media) {
                    return $this->media->map(fn(CustomMedia $media) => [
                        'original' => $media->getUrl(),
                        'webp' => $media->hasGeneratedConversion('webp') ? $media->getUrl('webp') : null,
                    ]);
                }

                return [];
            },
        );
    }




    public function scopeFavorites($query,$blackListIds = null    )
    {
        return $query->select('realisations.*')
            ->leftJoin('media', function ($join) {
                $join->on('media.model_id', '=', 'realisations.id')
                    ->where('media.collection_name', '=', 'illustration');
            })
            ->when($blackListIds, function ($query, $blackListIds) {
                $query->whereNotIn('realisations.id', $blackListIds);
            })
            ->where(function ($query) {
                $query->where('favorite', true)
                    ->orWhereNotNull('media.id');
            })
            ->orderByRaw('CASE WHEN favorite = 1 THEN 1 ELSE 2 END, media.created_at DESC');
    }

    /**
     * @return \Closure|Media|null
     */
    protected function illustration():  Attribute
    {
        return Attribute::make(
            get: function($value) {
                return $this->media?->where( 'collection_name', 'illustration' )->first();
            },
        );

    }

}

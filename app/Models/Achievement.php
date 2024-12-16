<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * 
 *
 * @property-read mixed $gallery_images
 * @property-read mixed $image
 * @property-read mixed $images_lightbox
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\AchievementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement withoutTrashed()
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $category
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Achievement extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $appends = ['image', 'gallery_images','images_lightbox'];

    protected $fillable = [
        'title',
        'description',
        'category',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('illustration')->singleFile();
        $this->addMediaCollection('gallery');
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

    public function image(): Attribute
    {
        return Attribute::make(
            get: function() {
                if ($this->media->where('collection_name', 'illustration')->first()) {
                    return $this->media()->where('collection_name', 'illustration')->first()?->toHtml();
                }
                return '<img class="rounded-full" src="/images/custom/testimonials.jpg" width="960" height="960">';
            },
        );

    }
    public function imagesLightbox(): Attribute
    {
        return Attribute::make(
            get: function() {

                if ($this->media) {
                    return $this->media->map(fn(CustomMedia $media)=> $media->getUrl());
                }
               return [];
            },
        );

    }


}

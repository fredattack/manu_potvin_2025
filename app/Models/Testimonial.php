<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * 
 *
 * @property-read mixed $image
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \App\Models\CustomMedia> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\TestimonialFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @property int $id
 * @property string $author
 * @property string $content
 * @property string $city
 * @property int $published
 * @property int|null $achievement_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereAchievementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @property int|null $realisation_id
 * @property-read \App\Models\Realisation|null $realisation
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereRealisationId($value)
 * @property int $rating
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereRating($value)
 * @mixin \Eloquent
 */
class Testimonial extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = ['author', 'content', 'city','published'];
    protected $appends = ['image'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('illustration')->withResponsiveImages()->singleFile();
    }

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

    public function image():Attribute
    {
        return Attribute::make(
            get: function () {
                if($this->media->first()){
                    return $this->media()->first()?->toHtml(true);
                }
                return '<img class="rounded-full" src="/images/custom/testimonials.jpg" width="960" height="960">';
            },
        );

    }

    public function realisation(): BelongsTo
    {
        return $this->belongsTo(Realisation::class);
    }
}

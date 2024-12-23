<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Partner extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('illustration')->singleFile();
    }

//
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300)
            ->withResponsiveImages();
    }

    public function image(): Attribute
    {
        return Attribute::make(

            get: function() {
                if ($this->media->where('collection_name', 'illustration')->first()) {
                    $args = $this->media->where( 'collection_name', 'illustration' )->first();
                    ray($args?->toHtml())->red();
                    return $args?->toHtml();
                }
                return '<img class="rounded-full" src="'.url("/assets/images/custom/default/portfolio_banner.jpeg").'" width="960" height="960">';
            },
        );

    }
}

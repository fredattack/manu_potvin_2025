<?php

namespace App\Models;

use Spatie\MediaLibrary\Conversions\ConversionCollection;
use Spatie\MediaLibrary\Conversions\ImageGenerators\Image;
use Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGeneratorFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 *
 *
 * @property-read mixed $extension
 * @property-read mixed $human_readable_size
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @property-read mixed $original_url
 * @property-read mixed $preview_url
 * @property-read mixed $type
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> all($columns = ['*'])
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia newQuery()
 * @method static Builder|CustomMedia ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia query()
 * @property int $id
 * @property string $model_type
 * @property int $model_id
 * @property string|null $uuid
 * @property string $collection_name
 * @property string $name
 * @property string $file_name
 * @property string|null $mime_type
 * @property string $disk
 * @property string|null $conversions_disk
 * @property int $size
 * @property array $manipulations
 * @property array $custom_properties
 * @property array $generated_conversions
 * @property array $responsive_images
 * @property int|null $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomMedia whereUuid($value)
 * @mixin \Eloquent
 */
class CustomMedia extends Media
{

    protected string $conversionName = '';

/**
* Override the toHtml method.
*
* @return string
*/
    public function toHtml($rounded=false): string
    {
        $imageGenerator = ImageGeneratorFactory::forMedia($this) ?? new Image();

        if (! $imageGenerator->canHandleMime($this->mime_type)) {
            return '';
        }

        $attributeString = collect($this->extraAttributes)
            ->map(fn ($value, $name) => $name.'="'.$value.'"')->implode(' ');

        if (strlen($attributeString)) {
            $attributeString = ' '.$attributeString;
        }

        $loadingAttributeValue = config('media-library.default_loading_attribute_value');

        if ($this->conversionName !== '') {
            $conversionObject = ConversionCollection::createForMedia($this)->getByName($this->conversionName);

            $loadingAttributeValue = $conversionObject->getLoadingAttributeValue();
        }

        if ($this->loadingAttributeValue !== '') {
            $loadingAttributeValue = $this->loadingAttributeValue;
        }

        $viewName = 'image';
        $width = '';
        $height = '';

        if ($this->hasResponsiveImages($this->conversionName)) {
            $viewName = config('media-library.responsive_images.use_tiny_placeholders')
                ? 'responsiveImageWithPlaceholder'
                : 'responsiveImage';

            $responsiveImage = $this->responsiveImages($this->conversionName)->files->first();

            $width = $responsiveImage->width();
            $height = $responsiveImage->height();
        }

        $media = $this;

        $conversion = $this->conversionName;

        return view("media-library.{$viewName}", compact(
            'media',
            'conversion',
            'attributeString',
            'loadingAttributeValue',
            'width',
            'height',
            'rounded'
        ))->render();
    }

    public function orientation():string
    {
        if(!str_starts_with($this->mime_type, 'image/')) return 'not an image';
        $image = getimagesize($this->getPath());

        $width = $image[0];
        $height = $image[1];

        $orientation = ( $width != $height ? ( $width > $height ? 'landscape' : 'portrait' ) : 'square' );
        return $orientation;
    }
}

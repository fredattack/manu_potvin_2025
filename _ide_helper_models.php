<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 * @mixin \Eloquent
 */
	class Realisation extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
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
	class CustomMedia extends \Eloquent {}
}

namespace App\Models{
/**
 *
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string|null $phone
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerData whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CustomerData extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 */
	class Testimonial extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 *
 *
 * @method static \Illuminate\Database\Eloquent\Builder|weiboomain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|weiboomain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|weiboomain query()
 * @mixin \Eloquent
 */
	class weiboomain extends \Eloquent {}
}


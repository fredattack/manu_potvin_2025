<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
class CustomerData extends Model
{
    use HasFactory;

    protected $table = 'customer_data';
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'notes',
    ];
}

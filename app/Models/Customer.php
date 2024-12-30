<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Les attributs qui peuvent être remplis via un formulaire ou un tableau.
     */
    protected $fillable = [
        'email',
        'nom',
        'adresse',
        'phone',
        'newsletter',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'image',
        'activites',
        'horaires',
        'lieu',
    ];

    protected $casts = [
        'activites' => 'array',
        'actif' => 'boolean'
    ];
}

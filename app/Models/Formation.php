<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'title',
        'category',
        'diploma',
        'description',
        'duration',
        'requirements',
        'career_opportunities',
        'image'
    ];
}
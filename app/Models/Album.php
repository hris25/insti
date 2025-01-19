<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'type',
        'media',
    ];

    protected $casts = [
        'media' => 'array', // Cast le champ JSON en tableau
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = [
        'album_id',
        'file_path',
        'type',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}

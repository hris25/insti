<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $fillable = [
        'album_id',
        'title',
        'file_path',
        'description'
    ];

    public function album()
    {
        return $this->belongsTo(MediaAlbum::class);
    }
}

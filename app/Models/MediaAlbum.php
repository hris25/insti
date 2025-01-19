<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaAlbum extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type'
    ];

    public function mediaItems()
    {
        return $this->hasMany(MediaItem::class, 'album_id');
    }
}

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
        'media'
    ];

    protected $casts = [
        'media' => 'array'
    ];

    /**
     * Get the first media item path
     */
    public function getFirstMediaPath()
    {
        return $this->media ? $this->media[0] : null;
    }

    /**
     * Get the media count
     */
    public function getMediaCount()
    {
        return $this->media ? count($this->media) : 0;
    }
}

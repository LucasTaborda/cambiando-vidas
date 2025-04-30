<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    public const IMAGE_PATH = '/images/gallery/';
    public const THUMBNAIL_PATH = '/images/gallery/thumbnails/';

    public function getImagePathAttribute()
    {
        return '/storage' . self::IMAGE_PATH . $this->file_name;
    }

    public function getThumbnailPathAttribute()
    {
        return '/storage' . self::THUMBNAIL_PATH . $this->file_name;
    }
}

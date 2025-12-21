<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'featured_image',
        'gallery_images',
        'image_alt_text',
    ];

    protected $casts = [
        'gallery_images' => 'array',
    ];

    /**
     * Get the featured image URL
     */
    protected function featuredImageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->featured_image ? Storage::url($this->featured_image) : null,
        );
    }

    /**
     * Get the gallery images URLs
     */
    protected function galleryImageUrls(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->gallery_images 
                ? collect($this->gallery_images)->map(fn ($image) => Storage::url($image))->toArray()
                : [],
        );
    }
}

<?php

namespace App\Models;

use App\Services\ImageService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'category',
        'featured_image',
        'gallery_images',
        'content_images',
        'image_alt_text',
        'price',
        'power_range',
        'specifications',
        'features',
        'is_featured',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'content_images' => 'array',
        'specifications' => 'array',
        'features' => 'array',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('title') && empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
    }

    /**
     * Clean up image files when product is deleted
     */
    protected static function booted()
    {
        parent::booted();
        
        static::deleting(function ($product) {
            $disk = Storage::disk('public');
            
            // Delete featured image
            if ($product->featured_image && $disk->exists($product->featured_image)) {
                $disk->delete($product->featured_image);
            }
            
            // Delete gallery images
            if ($product->gallery_images && is_array($product->gallery_images)) {
                foreach ($product->gallery_images as $image) {
                    if ($disk->exists($image)) {
                        $disk->delete($image);
                    }
                }
            }
            
            // Delete content images
            if ($product->content_images && is_array($product->content_images)) {
                foreach ($product->content_images as $image) {
                    if ($disk->exists($image)) {
                        $disk->delete($image);
                    }
                }
            }
        });
    }

    /**
     * Get the featured image URL
     */
    protected function featuredImageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => app(ImageService::class)->url($this->featured_image)
        );
    }
    
    /**
     * Get the featured image path for storage operations
     */
    protected function featuredImagePath(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->featured_image ? storage_path('app/public/' . $this->featured_image) : null,
        );
    }
    
    /**
     * Check if featured image exists in storage
     */
    public function hasFeaturedImage(): bool
    {
        return app(ImageService::class)->exists($this->featured_image);
    }

    /**
     * Get formatted price
     */
    protected function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->price ? '$' . number_format($this->price, 2) : null,
        );
    }

    /**
     * Scope for published products
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope for featured products
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for published and featured products
     */
    public function scopePublishedAndFeatured($query)
    {
        return $query->published()->featured();
    }

    /**
     * Scope for ordering by sort order and then by title
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('title', 'asc');
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get all related quote requests
     */
    public function quoteRequests()
    {
        return $this->hasMany(QuoteRequest::class);
    }
}
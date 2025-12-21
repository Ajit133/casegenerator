<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class ImageCleanupService
{
    /**
     * Clean up orphaned images that are no longer referenced in any posts
     */
    public function cleanupOrphanedImages(): array
    {
        $deletedFiles = [];
        
        // Get all images in the posts directory
        $postImageDirectories = [
            'posts/featured',
            'posts/gallery',
            'posts/content'
        ];
        
        foreach ($postImageDirectories as $directory) {
            $allImages = collect(Storage::disk('public')->files($directory));
            $referencedImages = collect();
            
            // Get all images referenced in posts
            Post::all()->each(function ($post) use (&$referencedImages, $directory) {
                if ($directory === 'posts/featured' && $post->featured_image) {
                    $referencedImages->push($post->featured_image);
                }
                
                if ($directory === 'posts/gallery' && $post->gallery_images) {
                    $referencedImages = $referencedImages->merge($post->gallery_images);
                }
                
                if ($directory === 'posts/content') {
                    // Extract images from content
                    preg_match_all('/src="[^"]*\/(' . str_replace('/', '\/', $directory) . '\/[^"]*)"/', $post->body ?? '', $matches);
                    if (!empty($matches[1])) {
                        $referencedImages = $referencedImages->merge($matches[1]);
                    }
                    
                    // Also check content_images field
                    if ($post->content_images) {
                        $contentImages = array_filter($post->content_images, function ($image) use ($directory) {
                            return strpos($image, $directory) !== false;
                        });
                        $referencedImages = $referencedImages->merge($contentImages);
                    }
                }
            });
            
            // Find orphaned images
            $orphanedImages = $allImages->diff($referencedImages->unique());
            
            // Delete orphaned images
            foreach ($orphanedImages as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                    $deletedFiles[] = $image;
                }
            }
        }
        
        return $deletedFiles;
    }
    
    /**
     * Get statistics about image usage
     */
    public function getImageStats(): array
    {
        $stats = [
            'total_posts' => Post::count(),
            'posts_with_featured_image' => Post::whereNotNull('featured_image')->count(),
            'posts_with_gallery' => Post::whereNotNull('gallery_images')->count(),
            'posts_with_content_images' => Post::whereNotNull('content_images')->count(),
            'total_featured_images' => 0,
            'total_gallery_images' => 0,
            'total_content_images' => 0,
        ];
        
        // Count images
        $stats['total_featured_images'] = count(Storage::disk('public')->files('posts/featured'));
        $stats['total_gallery_images'] = count(Storage::disk('public')->files('posts/gallery'));
        $stats['total_content_images'] = count(Storage::disk('public')->files('posts/content'));
        
        return $stats;
    }
}
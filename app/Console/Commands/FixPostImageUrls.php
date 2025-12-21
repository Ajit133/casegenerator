<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class FixPostImageUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:fix-image-urls {--dry-run : Show what would be fixed without making changes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix malformed image URLs in post content';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $posts = Post::whereNotNull('body')->get();
        $fixedCount = 0;
        
        foreach ($posts as $post) {
            $originalBody = $post->body;
            $fixedBody = $this->fixImageUrls($originalBody);
            
            if ($originalBody !== $fixedBody) {
                $this->info("Post ID {$post->id}: '{$post->title}'");
                
                // Show the changes
                $this->warn("BEFORE: " . substr($originalBody, 0, 200) . "...");
                $this->info("AFTER:  " . substr($fixedBody, 0, 200) . "...");
                $this->line("");
                
                if (!$this->option('dry-run')) {
                    $post->update(['body' => $fixedBody]);
                    $this->info("✅ Fixed!");
                } else {
                    $this->info("🔍 Would fix (dry-run mode)");
                }
                
                $fixedCount++;
                $this->line("");
            }
        }
        
        if ($fixedCount === 0) {
            $this->info("✅ No posts with malformed image URLs found!");
        } else {
            $this->info("🔧 Found {$fixedCount} posts with image URL issues");
            if ($this->option('dry-run')) {
                $this->info("Run without --dry-run to apply fixes");
            }
        }
        
        return Command::SUCCESS;
    }
    
    private function fixImageUrls(string $content): string
    {
        return preg_replace_callback(
            '/src="([^"]*)"/',
            function ($matches) {
                $src = $matches[1];
                
                // Skip external URLs (not localhost) and data URLs
                if (preg_match('/^(https?:\/\/(?!localhost)|data:)/', $src)) {
                    return $matches[0];
                }
                
                // Fix localhost URLs with correct path structure - remove localhost prefix
                if (preg_match('/^https?:\/\/localhost(\/storage\/posts\/[^\/]+\/[^\/]+\.(jpg|jpeg|png|gif|webp|svg))/', $src, $pathMatches)) {
                    return 'src="' . $pathMatches[1] . '"';
                }
                
                // Fix localhost URLs that don't have proper path structure
                if (preg_match('/^https?:\/\/localhost\/storage\/([^\/]+\.(jpg|jpeg|png|gif|webp|svg))$/', $src, $fileMatches)) {
                    $filename = $fileMatches[1];
                    // These are likely content images, put them in the content directory
                    return 'src="/storage/posts/content/' . $filename . '"';
                }
                
                // Fix malformed URLs with embedded localhost/domain but wrong structure
                if (preg_match('/.*?\/storage\/(posts\/content\/[^\/]+\.(jpg|jpeg|png|gif|webp|svg))/', $src, $fileMatches)) {
                    $cleanPath = $fileMatches[1];
                    return 'src="/storage/' . $cleanPath . '"';
                }
                
                // Already correct storage URLs
                if (strpos($src, '/storage/posts/') === 0) {
                    return $matches[0];
                }
                
                return $matches[0];
            },
            $content
        );
    }
}

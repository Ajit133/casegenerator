<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ImageCleanupService;

class CleanupOrphanedImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:cleanup {--dry-run : Show what would be deleted without actually deleting}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean up orphaned images that are no longer referenced in posts';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $cleanupService = new ImageCleanupService();
        
        $this->info('📊 Image Statistics:');
        $stats = $cleanupService->getImageStats();
        
        $this->table(['Metric', 'Count'], [
            ['Total Posts', $stats['total_posts']],
            ['Posts with Featured Image', $stats['posts_with_featured_image']],
            ['Posts with Gallery', $stats['posts_with_gallery']],
            ['Posts with Content Images', $stats['posts_with_content_images']],
            ['Total Featured Images', $stats['total_featured_images']],
            ['Total Gallery Images', $stats['total_gallery_images']],
            ['Total Content Images', $stats['total_content_images']],
        ]);
        
        if ($this->option('dry-run')) {
            $this->warn('🔍 DRY RUN MODE - No files will be deleted');
            // TODO: Implement dry run logic to show what would be deleted
            $this->info('This feature will be implemented to show orphaned images without deleting them.');
            return Command::SUCCESS;
        }
        
        if ($this->confirm('🗑️  Do you want to clean up orphaned images?')) {
            $this->info('🧹 Cleaning up orphaned images...');
            
            $deletedFiles = $cleanupService->cleanupOrphanedImages();
            
            if (empty($deletedFiles)) {
                $this->info('✅ No orphaned images found!');
            } else {
                $this->info('🗑️  Deleted ' . count($deletedFiles) . ' orphaned images:');
                foreach ($deletedFiles as $file) {
                    $this->line('  - ' . $file);
                }
            }
        }
        
        return Command::SUCCESS;
    }
}

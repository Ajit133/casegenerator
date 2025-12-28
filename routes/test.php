<?php

/*
|--------------------------------------------------------------------------
| Test Routes for Projects System
|--------------------------------------------------------------------------
|
| Quick test routes to verify the Projects system is working correctly
| Remove these routes in production
|
*/

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/test/projects/summary', function () {
    try {
        $stats = [
            'total_projects' => Project::count(),
            'published_projects' => Project::published()->count(),
            'featured_projects' => Project::featured()->count(),
            'published_and_featured' => Project::publishedAndFeatured()->count(),
        ];

        $recentProjects = Project::latest()->take(3)->get(['id', 'title', 'status', 'is_featured', 'created_at']);

        return response()->json([
            'status' => 'success',
            'message' => 'Projects system is working correctly!',
            'statistics' => $stats,
            'recent_projects' => $recentProjects,
            'routes' => [
                'admin_projects' => url('/admin/projects'),
                'frontend_projects' => route('projects.index'),
                'featured_projects' => route('featured-projects'),
                'api_featured' => route('api.featured-projects'),
            ]
        ], 200, [], JSON_PRETTY_PRINT);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Error testing projects system',
            'error' => $e->getMessage(),
        ], 500);
    }
})->name('test.projects.summary');

Route::get('/test/projects/images', function () {
    try {
        $projects = Project::whereNotNull('featured_image')->get();
        
        $imageData = [];
        foreach ($projects as $project) {
            $imageData[] = [
                'project_id' => $project->id,
                'title' => $project->title,
                'featured_image_path' => $project->featured_image,
                'featured_image_url' => $project->featured_image_url,
                'storage_url' => $project->featured_image ? Storage::url($project->featured_image) : null,
                'storage_exists' => $project->featured_image ? Storage::disk('public')->exists($project->featured_image) : false,
                'full_storage_url' => $project->featured_image ? asset('storage/' . $project->featured_image) : null,
            ];
        }
        
        return response()->json([
            'status' => 'success',
            'message' => 'Image debug information',
            'storage_disk' => 'public',
            'storage_base_url' => Storage::disk('public')->url(''),
            'projects_with_images' => $imageData,
        ], 200, [], JSON_PRETTY_PRINT);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Error debugging images',
            'error' => $e->getMessage(),
        ], 500);
    }
})->name('test.projects.images');
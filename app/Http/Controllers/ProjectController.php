<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of published projects
     */
    public function index(Request $request)
    {
        $query = Project::published();

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%");
            });
        }

        // Filter by featured
        if ($request->has('featured') && $request->featured === '1') {
            $query->where('is_featured', true);
        }

        $projects = $query->latest()->paginate(12);

        return view('pages.projects.index', compact('projects'));
    }

    /**
     * Display the specified project
     */
    public function show(Project $project)
    {
        // Only show published projects to public
        if ($project->status !== 'published') {
            abort(404);
        }

        // Get related projects (same location or featured)
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->where(function ($query) use ($project) {
                $query->where('location', $project->location)
                      ->orWhere('is_featured', true);
            })
            ->limit(3)
            ->get();

        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }

    /**
     * Get featured projects for homepage or API
     */
    public function featured(Request $request)
    {
        $limit = $request->get('limit', 6);
        
        $featuredProjects = Project::publishedAndFeatured()
            ->latest()
            ->limit($limit)
            ->get();

        if ($request->expectsJson()) {
            return response()->json([
                'projects' => $featuredProjects->map(function ($project) {
                    return [
                        'id' => $project->id,
                        'title' => $project->title,
                        'slug' => $project->slug,
                        'description' => $project->description,
                        'location' => $project->location,
                        'featured_image_url' => $project->featured_image_url,
                        'is_featured' => $project->is_featured,
                        'created_at' => $project->created_at,
                    ];
                })
            ]);
        }

        return $featuredProjects;
    }
}
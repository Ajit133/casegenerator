<?php
/**
 * Frontend Query Examples for Projects Portfolio System
 * 
 * This file contains various example queries that can be used throughout
 * your frontend application to display projects in different contexts.
 */

namespace App\Examples;

use App\Models\Project;

class ProjectQueryExamples
{
    /**
     * Get featured projects for homepage section
     * 
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getFeaturedProjectsForHomepage($limit = 6)
    {
        return Project::publishedAndFeatured()
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Get all published projects with pagination
     * 
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getAllPublishedProjects($perPage = 12)
    {
        return Project::published()
            ->latest()
            ->paginate($perPage);
    }

    /**
     * Search projects by title, description, or location
     * 
     * @param string $searchTerm
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function searchProjects($searchTerm, $perPage = 12)
    {
        return Project::published()
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', "%{$searchTerm}%")
                      ->orWhere('description', 'like', "%{$searchTerm}%")
                      ->orWhere('location', 'like', "%{$searchTerm}%");
            })
            ->latest()
            ->paginate($perPage);
    }

    /**
     * Get projects by location
     * 
     * @param string $location
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getProjectsByLocation($location, $limit = 10)
    {
        return Project::published()
            ->where('location', 'like', "%{$location}%")
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Get recent projects for sidebar or footer
     * 
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getRecentProjects($limit = 5)
    {
        return Project::published()
            ->latest()
            ->limit($limit)
            ->select(['id', 'title', 'slug', 'featured_image', 'created_at'])
            ->get();
    }

    /**
     * Get related projects (by location or featured status)
     * 
     * @param Project $currentProject
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getRelatedProjects(Project $currentProject, $limit = 3)
    {
        return Project::published()
            ->where('id', '!=', $currentProject->id)
            ->where(function ($query) use ($currentProject) {
                $query->where('location', $currentProject->location)
                      ->orWhere('is_featured', true);
            })
            ->limit($limit)
            ->get();
    }

    /**
     * Get projects count by status for dashboard
     * 
     * @return array
     */
    public static function getProjectsCountByStatus()
    {
        return [
            'total' => Project::count(),
            'published' => Project::published()->count(),
            'draft' => Project::where('status', 'draft')->count(),
            'featured' => Project::featured()->count(),
        ];
    }

    /**
     * Get random featured project for call-to-action sections
     * 
     * @return Project|null
     */
    public static function getRandomFeaturedProject()
    {
        return Project::publishedAndFeatured()
            ->inRandomOrder()
            ->first();
    }
}

/**
 * Example usage in Blade templates:
 */

/*
<!-- Homepage Featured Projects Section -->
@php
    $featuredProjects = \App\Examples\ProjectQueryExamples::getFeaturedProjectsForHomepage(6);
@endphp

@if($featuredProjects->count() > 0)
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if($project->featured_image_url)
                            <img src="{{ $project->featured_image_url }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">{{ $project->title }}</h3>
                            @if($project->location)
                                <p class="text-gray-600 text-sm mb-3">📍 {{ $project->location }}</p>
                            @endif
                            <p class="text-gray-700 mb-4">{{ Str::limit(strip_tags($project->description), 100) }}</p>
                            <a href="{{ route('projects.show', $project->slug) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    View All Projects
                </a>
            </div>
        </div>
    </section>
@endif
*/

/*
<!-- Sidebar Recent Projects Widget -->
@php
    $recentProjects = \App\Examples\ProjectQueryExamples::getRecentProjects(3);
@endphp

@if($recentProjects->count() > 0)
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="font-semibold text-lg mb-4">Recent Projects</h3>
        <div class="space-y-4">
            @foreach($recentProjects as $project)
                <div class="flex items-start space-x-3">
                    @if($project->featured_image_url)
                        <img src="{{ $project->featured_image_url }}" alt="{{ $project->title }}" class="w-16 h-16 object-cover rounded">
                    @else
                        <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                            </svg>
                        </div>
                    @endif
                    <div class="flex-1 min-w-0">
                        <a href="{{ route('projects.show', $project->slug) }}" class="text-sm font-medium text-gray-900 hover:text-blue-600 line-clamp-2">
                            {{ $project->title }}
                        </a>
                        <p class="text-xs text-gray-500 mt-1">{{ $project->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('projects.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                View All Projects →
            </a>
        </div>
    </div>
@endif
*/

/*
<!-- API Endpoint Usage Example (JavaScript) -->

// Fetch featured projects via API
fetch('/api/featured-projects?limit=6')
    .then(response => response.json())
    .then(data => {
        const projectsContainer = document.getElementById('featured-projects');
        
        data.projects.forEach(project => {
            const projectCard = document.createElement('div');
            projectCard.className = 'project-card';
            
            projectCard.innerHTML = `
                <div class="project-image">
                    ${project.featured_image_url ? 
                        `<img src="${project.featured_image_url}" alt="${project.title}">` : 
                        '<div class="placeholder-image"></div>'
                    }
                </div>
                <div class="project-content">
                    <h3>${project.title}</h3>
                    ${project.location ? `<p class="location">${project.location}</p>` : ''}
                    <p class="description">${project.description.substring(0, 100)}...</p>
                    <a href="/projects/${project.slug}" class="view-more">View Details</a>
                </div>
            `;
            
            projectsContainer.appendChild(projectCard);
        });
    });

// Search projects with AJAX
function searchProjects(query) {
    const url = new URL('/projects', window.location.origin);
    url.searchParams.append('search', query);
    
    fetch(url, {
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Update the projects grid with search results
        updateProjectsGrid(data.projects);
    });
}
*/
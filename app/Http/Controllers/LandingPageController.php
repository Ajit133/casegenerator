<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Fetch latest blog posts
        $posts = Post::latest()->take(3)->get();
        
        // Fetch featured projects for homepage
        $featuredProjects = Project::publishedAndFeatured()
            ->latest()
            ->take(6)
            ->get();
        
        return view('landing.index', compact('posts', 'featuredProjects'));
    }
}

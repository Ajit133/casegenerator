<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FeaturedProjectsController extends Controller
{
    public function index()
    {
        // Get published and featured projects, ordered by latest first
        $projects = Project::publishedAndFeatured()
            ->latest()
            ->get();

        return view('pages.featured-projects', compact('projects'));
    }
}

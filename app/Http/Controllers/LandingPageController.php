<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Fetch latest blog posts
        $posts = Post::latest()->take(3)->get();
        
        return view('landing.index', compact('posts'));
    }
}

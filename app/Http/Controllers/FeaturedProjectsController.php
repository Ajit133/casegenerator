<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturedProjectsController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Crown Plaza Project',
                'location' => 'Dubai',
                'type' => 'Hotel',
                'image' => 'featuredProjects/1-1-1-1.png',
                'description' => 'High-capacity generator installation for Crown Plaza Hotel, ensuring uninterrupted power supply for luxury accommodation.',
                'capacity' => '2000 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
            [
                'id' => 2,
                'title' => 'Meydan Residence Project',
                'location' => 'Al Meydan Rd, Dubai',
                'type' => 'Residence',
                'image' => 'featuredProjects/2-1-1.png',
                'description' => 'Residential power backup solution for premium apartments at Meydan, providing reliable electricity during outages.',
                'capacity' => '1500 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
            [
                'id' => 3,
                'title' => 'Al Futtiam Shopping Mall',
                'location' => 'Dubai',
                'type' => 'Commercial',
                'image' => 'featuredProjects/4-1-1.png',
                'description' => 'Commercial generator setup for Al Futtiam Shopping Mall, supporting continuous operations and customer experience.',
                'capacity' => '2500 KVA',
                'status' => 'Completed',
                'year' => '2022',
            ],
            [
                'id' => 4,
                'title' => 'ADNOC Service Station',
                'location' => 'Abu Dhabi',
                'type' => 'Industrial',
                'image' => 'featuredProjects/5-1-1.png',
                'description' => 'Large-scale generator installation for industrial operations, providing stable power for manufacturing processes.',
                'capacity' => '3000 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
            [
                'id' => 5,
                'title' => 'Sharjah Co-operative Society',
                'location' => 'Sharjah',
                'type' => 'Commercial',
                'image' => 'featuredProjects/6-1-1.png',
                'description' => 'Reliable generator solution for a major business center in Sharjah, ensuring 24/7 operations.',
                'capacity' => '1800 KVA',
                'status' => 'Completed',
                'year' => '2024',
            ],
            [
                'id' => 6,
                'title' => 'My City Centre Masdar Project',
                'location' => 'Khalifa City',
                'type' => 'Commercial',
                'image' => 'featuredProjects/7-1-1-1.png',
                'description' => 'Critical power backup for Shopping Center facility, ensuring continuous operations and customer experience.',
                'capacity' => '2200 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
            [
                'id' => 7,
                'title' => 'Sheikh Sulthan Bin Khalifa Mosque Project',
                'location' => 'Abu Dhabi',
                'type' => 'Commercial',
                'image' => 'featuredProjects/8-1-1.png',
                'description' => 'Critical power backup for Mosque facility, ensuring continuous operations and community service.',
                'capacity' => '2200 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
             [
                'id' => 8,
                'title' => 'Carefour Market, Zawaya Walk Project',
                'location' => 'Sharjah',
                'type' => 'Commercial',
                'image' => 'featuredProjects/9-1-1.png',
                'description' => 'Critical power backup for Market Area facility, ensuring continuous operations and customer experience.',
                'capacity' => '2200 KVA',
                'status' => 'Completed',
                'year' => '2023',
            ],
        ];

        return view('pages.featured-projects', compact('projects'));
    }
}

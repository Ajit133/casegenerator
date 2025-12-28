{{-- resources/views/pages/projects/show.blade.php --}}
@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500">
            <li><a href="{{ route('home') }}" class="hover:text-gray-700">Home</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('projects.index') }}" class="hover:text-gray-700">Projects</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="text-gray-900">{{ $project->title }}</li>
        </ol>
    </nav>

    <!-- Project Header -->
    <div class="mb-8">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $project->title }}</h1>
                @if($project->location)
                    <p class="text-lg text-gray-600 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        {{ $project->location }}
                    </p>
                @endif
            </div>
            @if($project->is_featured)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Featured Project
                </span>
            @endif
        </div>
    </div>

    <!-- Project Image -->
    @if($project->featured_image && $project->featured_image_url)
        <div class="mb-8">
            <div class="aspect-video rounded-lg overflow-hidden bg-gray-200">
                <img 
                    src="{{ $project->featured_image_url }}" 
                    alt="{{ $project->image_alt_text ?? $project->title }}"
                    class="w-full h-full object-cover"
                    onerror="this.parentElement.innerHTML='<div class=\"flex items-center justify-center h-full bg-gray-200 text-gray-400\"><span>Image not available</span></div>'"
                >
            </div>
        </div>
    @endif

    <!-- Project Content -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Project Overview</h2>
                <div class="text-gray-700 leading-relaxed">
                    {!! $project->description !!}
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Details</h3>
                
                <dl class="space-y-3">
                    @if($project->location)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Location</dt>
                            <dd class="text-sm text-gray-900">{{ $project->location }}</dd>
                        </div>
                    @endif
                    
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Project Date</dt>
                        <dd class="text-sm text-gray-900">{{ $project->created_at->format('F Y') }}</dd>
                    </div>
                    
                    @if($project->is_featured)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm text-gray-900">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Featured Project
                                </span>
                            </dd>
                        </div>
                    @endif
                </dl>

                <!-- CTA Section -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h4 class="text-sm font-semibold text-gray-900 mb-3">Interested in a similar project?</h4>
                    <a 
                        href="{{ route('contact') }}" 
                        class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition duration-200"
                    >
                        Get Quote
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Projects -->
    @if($relatedProjects->count() > 0)
        <div class="mt-16">
            <div class="border-t border-gray-200 pt-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $relatedProject)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            @if($relatedProject->featured_image && $relatedProject->featured_image_url)
                                <div class="aspect-video bg-gray-200">
                                    <img 
                                        src="{{ $relatedProject->featured_image_url }}" 
                                        alt="{{ $relatedProject->image_alt_text ?? $relatedProject->title }}"
                                        class="w-full h-full object-cover"
                                        onerror="this.parentElement.innerHTML='<div class=\"aspect-video bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center\"><svg class=\"w-12 h-12 text-gray-400\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"></path></svg></div>'"
                                    >
                                </div>
                            @else
                                <div class="aspect-video bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                                    {{ $relatedProject->title }}
                                </h3>
                                @if($relatedProject->location)
                                    <p class="text-sm text-gray-500 mb-3">{{ $relatedProject->location }}</p>
                                @endif
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    {!! Str::limit(strip_tags($relatedProject->description), 100) !!}
                                </p>
                                <a 
                                    href="{{ route('projects.show', $relatedProject->slug) }}" 
                                    class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium"
                                >
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
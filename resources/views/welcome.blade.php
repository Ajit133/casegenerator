@php
    use Illuminate\Support\Facades\Storage;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filament Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Filament Blog</h1>

        @if ($posts->isEmpty())
            <p class="text-center text-xl text-gray-600">There is no post available. Please add posts from the admin panel!</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                        {{-- Featured Image --}}
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    <img src="{{ Storage::url($post->featured_image) }}" 
                                         alt="{{ $post->image_alt_text ?? $post->title }}"
                                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </a>
                            </div>
                        @endif

                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-blue-600 mb-2">
                                <a href="{{ route('post.show', $post->slug) }}" class="hover:underline">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-sm text-gray-500 mb-4">Published on: {{ $post->created_at->format('M d, Y') }}</p>

                            <div class="text-gray-700 mb-4">
                                {!! Str::limit(strip_tags($post->body), 200) !!} 
                            </div>

                            {{-- Gallery indicator --}}
                            @if($post->gallery_images && count($post->gallery_images) > 0)
                                <div class="mb-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ count($post->gallery_images) }} images
                                    </span>
                                </div>
                            @endif

                            <a href="{{ route('post.show', $post->slug) }}" class="text-blue-500 font-medium hover:text-blue-700">
                                Read more →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
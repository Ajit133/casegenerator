@php
    use Illuminate\Support\Facades\Storage;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto p-4">
        <a href="/" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">← Back to all posts</a>
        
        <div class="bg-white shadow-xl rounded-lg p-8 mt-4">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                {{ $post->title }}
            </h1>
            <p class="text-md text-gray-500 mb-6 border-b pb-4">
                Published on: {{ $post->created_at->format('F d, Y') }}
            </p>

            {{-- Featured Image --}}
            @if($post->featured_image)
                <div class="mb-6">
                    <img src="{{ Storage::url($post->featured_image) }}" 
                         alt="{{ $post->image_alt_text ?? $post->title }}"
                         class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg"
                         onerror="this.onerror=null; console.error('Image failed to load:', this.src);">
                    @if($post->image_alt_text)
                        <p class="text-sm text-gray-500 mt-2 italic">{{ $post->image_alt_text }}</p>
                    @endif
                </div>
            @endif

            <div class="prose max-w-none text-gray-700 leading-relaxed">
                {!! $post->body !!}
            </div>

            {{-- Gallery Images --}}
            @if($post->gallery_images && count($post->gallery_images) > 0)
                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Gallery</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($post->gallery_images as $image)
                            @php
                                $imageUrl = Storage::url($image);
                            @endphp
                            <div class="aspect-square overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                                <img src="{{ $imageUrl }}" 
                                     alt="Gallery image for {{ $post->title }}"
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-200 cursor-pointer"
                                     onclick="openImageModal('{{ $imageUrl }}')">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

        {{-- Image Modal --}}
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden" onclick="closeImageModal()">
            <div class="max-w-4xl max-h-full p-4">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain">
                <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300">&times;</button>
            </div>
        </div>

        <script>
            function openImageModal(imageSrc) {
                document.getElementById('modalImage').src = imageSrc;
                document.getElementById('imageModal').classList.remove('hidden');
            }

            function closeImageModal() {
                document.getElementById('imageModal').classList.add('hidden');
            }

            // Close modal when pressing ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeImageModal();
                }
            });
        </script>
    </div>
</body>
</html>
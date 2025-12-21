<section class="bg-gradient-to-b from-slate-50 to-white py-20 md:py-24 lg:py-28">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($posts && $posts->count() > 0)
            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 mb-16">
                @foreach($posts as $post)
                    <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
                        <!-- Featured Image Container -->
                        @if($post->featured_image)
                            <div class="relative overflow-hidden bg-slate-200 aspect-video sm:aspect-[16/10] md:aspect-video">
                                <a href="{{ route('post.show', $post->slug) }}" class="block h-full w-full">
                                    <img 
                                        src="{{ asset('storage/' . $post->featured_image) }}" 
                                        alt="{{ $post->title }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    >
                                </a>
                            </div>
                        @else
                            <div class="aspect-video sm:aspect-[16/10] md:aspect-video bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif

                        <!-- Content Container -->
                        <div class="flex flex-col flex-grow p-6 sm:p-7 lg:p-8">
                            <!-- Meta: Date & Category -->
                            <div class="flex flex-wrap items-center gap-3 mb-4">
                                <time 
                                    datetime="{{ $post->created_at->toIso8601String() }}"
                                    class="text-xs md:text-sm font-medium text-slate-500 uppercase tracking-wider"
                                >
                                    {{ $post->created_at->format('M d, Y') }}
                                </time>
                                @if($post->category)
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-red-600 bg-red-50 rounded-full border border-red-100">
                                        {{ $post->category }}
                                    </span>
                                @endif
                            </div>

                            <!-- Title -->
                            <h2 class="mb-3 text-lg sm:text-xl font-bold text-slate-900 leading-snug line-clamp-3">
                                <a 
                                    href="{{ route('post.show', $post->slug) }}"
                                    class="hover:text-red-600 transition-colors duration-300"
                                >
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="flex-grow text-sm sm:text-base text-slate-600 leading-relaxed mb-5 line-clamp-3">
                                {{ Str::limit(strip_tags($post->content), 150) }}
                            </p>

                            <!-- Read More Link -->
                            <a 
                                href="{{ route('post.show', $post->slug) }}"
                                class="inline-flex items-center text-sm font-semibold text-red-600 hover:text-red-700 group/link transition-colors duration-300"
                            >
                                <span class="relative">
                                    Read More
                                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover/link:w-full"></span>
                                </span>
                                <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-12 md:mt-16">
                <div class="px-4">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="py-20 text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-slate-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">No blog posts yet</h3>
                <p class="text-base text-slate-600 max-w-md mx-auto">
                    Check back soon for interesting articles and case studies. We're working on something special.
                </p>
            </div>
        @endif
    </div>
</section>

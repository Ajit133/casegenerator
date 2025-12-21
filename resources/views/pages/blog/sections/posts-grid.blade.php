<section class="blog-listing-section">
    <div class="container">
        @if($posts && $posts->count() > 0)
            <div class="blog-listing-grid">
                @foreach($posts as $post)
                    <article class="blog-listing-card">
                        @if($post->featured_image)
                            <div class="blog-listing-image">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                                </a>
                            </div>
                        @endif
                        <div class="blog-listing-content">
                            <div class="blog-listing-meta">
                                <span class="blog-date">{{ $post->created_at->format('M d, Y') }}</span>
                                @if($post->category)
                                    <span class="blog-category-tag">{{ $post->category }}</span>
                                @endif
                            </div>
                            <h2 class="blog-listing-title">
                                <a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                            <p class="blog-listing-excerpt">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                            <a href="{{ route('post.show', $post->slug) }}" class="blog-read-more">Read More →</a>
                        </div>
                    </article>
                @endforeach
            </div>
            
            <div class="pagination-wrapper">
                {{ $posts->links() }}
            </div>
        @else
            <div class="no-posts">
                <div class="no-posts-icon">📝</div>
                <h3>No blog posts yet</h3>
                <p>Check back soon for interesting articles and case studies!</p>
            </div>
        @endif
    </div>
</section>

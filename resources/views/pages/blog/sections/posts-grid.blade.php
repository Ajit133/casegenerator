<section class="blog-listing-section">
    <style>
        /* Overall Section */
        .blog-listing-section {
            padding: 60px 20px;
            background-color: #f8fafc;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Grid */
        .blog-listing-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        @media (min-width: 768px) {
            .blog-listing-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .blog-listing-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Card */
        .blog-listing-card {
            border: 1px solid #e2e8f0;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .blog-listing-card:hover {
            /* transform: translateY(-8px); */
            /* box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08); */
        }

        /* Image */
        .blog-listing-image {
            position: relative;
            width: 100%;
            padding-top: 75%; /* 4:3 aspect ratio (adjust to 56.25% for 16:9 if preferred) */
            overflow: hidden;
        }

        .blog-listing-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .blog-listing-card:hover .blog-listing-image img {
            /* transform: scale(1.05); */
        }

        /* Content */
        .blog-listing-content {
            padding: 28px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Meta */
        .blog-listing-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 16px;
            font-size: 0.875rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .blog-category-tag {
            background-color: #f1f5f9;
            color: #475569;
            padding: 4px 12px;
            border-radius: 999px;
            font-weight: 500;
        }

        /* Title */
        .blog-listing-title {
            margin: 0 0 16px;
            font-size: 1.5rem;
            line-height: 1.4;
            font-weight: 600;
            color: #1e293b;
        }

        .blog-listing-title a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        .blog-listing-title a:hover {
            color: var(--primary-color);
        }

        /* Excerpt */
        .blog-listing-excerpt {
            margin: 0 0 24px;
            font-size: 1rem;
            line-height: 1.7;
            color: #64748b;
            flex: 1;
        }

        /* Read More */
        .blog-read-more {
            align-self: flex-start;
            font-weight: 500;
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.975rem;
        }

        .blog-read-more:hover {
            text-decoration: underline;
        }

        .blog-read-more::after {
            content: ' →';
        }

        /* Pagination */
        .pagination-wrapper {
            margin-top: 60px;
            text-align: center;
        }

        /* No Posts */
        .no-posts {
            text-align: center;
            padding: 80px 20px;
            color: #64748b;
        }

        .no-posts-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }
    </style>

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
                            <a href="{{ route('post.show', $post->slug) }}" class="blog-read-more">Read More</a>
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
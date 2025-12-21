<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Projects - CasaGenerators</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('landing.sections.header')

    <section class="page-hero">
    <div class="hero-background">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> / <span>Featured Projects</span>
            </div>
            <h1 class="page-title">Our Featured Generator Projects</h1>
            <p class="">Powering Excellence Across the UAE and Iraq</p>
        </div>
    </div>
</section>

    
    <!-- Projects Showcase -->
    <section class="featured-projects-showcase">
        <div class="container">
            <div class="section-intro">
                <h2 class="section-title">Exceptional Installations</h2>
                <p class="intro-text">
                    We take pride in delivering world-class generator solutions for diverse industries. 
                    From luxury hotels to industrial complexes, our projects showcase our commitment to 
                    reliability, quality, and customer satisfaction.
                </p>
            </div>
            
            <div class="projects-filter">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="hotel">Hotels</button>
                <button class="filter-btn" data-filter="residence">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="industrial">Industrial</button>
            </div>
            
            <div class="projects-grid-detailed">
                @foreach($projects as $project)
                <div class="project-card-detailed" data-category="{{ strtolower($project['type']) }}">
                    <div class="project-image-wrapper">
                        <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}">
                        <div class="project-overlay">
                            <div class="project-status">
                                <i class="fas fa-check-circle"></i> {{ $project['status'] }}
                            </div>
                        </div>
                    </div>
                    <div class="project-details">
                        <div class="project-meta">
                            <span class="project-type">
                                <i class="fas fa-tag"></i> {{ $project['type'] }}
                            </span>
                            <span class="project-year">
                                <i class="fas fa-calendar"></i> {{ $project['year'] }}
                            </span>
                        </div>
                        <h3 class="project-title-detailed">{{ $project['title'] }}</h3>
                        <div class="project-location">
                            <i class="fas fa-map-marker-alt"></i> {{ $project['location'] }}
                        </div>
                        <p class="project-description-detailed">
                            {{ $project['description'] }}
                        </p>
                        <div class="project-specs-detailed">
                            <div class="spec-item-detailed">
                                <i class="fas fa-bolt"></i>
                                <div class="spec-info">
                                    <span class="spec-label">Capacity</span>
                                    <span class="spec-value">{{ $project['capacity'] }}</span>
                                </div>
                            </div>
                            <div class="spec-item-detailed">
                                <i class="fas fa-cog"></i>
                                <div class="spec-info">
                                    <span class="spec-label">Status</span>
                                    <span class="spec-value">{{ $project['status'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="projects-cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Power Your Next Project?</h2>
                <p class="cta-text">
                    Let's discuss how our generator solutions can meet your specific requirements.
                </p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-large">
                        <i class="fas fa-phone"></i> Contact Us
                    </a>
                    <a href="{{ route('products-services') }}" class="btn btn-secondary btn-large">
                        <i class="fas fa-box"></i> View Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    @include('landing.sections.newsletter')
    
    @include('landing.sections.footer')
    
    <script src="{{ asset('js/landing.js') }}"></script>
    <script>
        // Project filtering
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                const projects = document.querySelectorAll('.project-card-detailed');
                
                projects.forEach(project => {
                    if (filter === 'all' || project.dataset.category === filter) {
                        project.style.display = 'block';
                        setTimeout(() => project.style.opacity = '1', 10);
                    } else {
                        project.style.opacity = '0';
                        setTimeout(() => project.style.display = 'none', 300);
                    }
                });
            });
        });
    </script>
</body>
</html>

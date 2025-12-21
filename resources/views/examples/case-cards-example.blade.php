<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Cards Example - CasaGenerators</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('landing.sections.header')

    <section class="page-hero">
        <div class="hero-background">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> / <span>Case Studies</span>
                </div>
                <h1 class="page-title">Our Success Stories</h1>
                <p class="">Powering Excellence Across Industries</p>
            </div>
        </div>
    </section>

    <!-- Case Cards Section -->
    <section style="padding: 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="featured-header">
                <h2 class="section-title-center">
                    Featured <br>
                    <span class="highlight-text">Case Studies</span>
                </h2>
                <p class="section-subtitle-center">
                    Discover how our generator solutions have powered major projects across the UAE and Iraq.
                </p>
            </div>

            <!-- Case Cards Grid -->
            <div class="section-cases__list">
                <!-- Card 1 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/1-1-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/infrastructure.svg') }}"
                    category="Infrastructures"
                    title="Dagartech's 650 kVA power guarantees the continuity of a pumping station in Barcelona"
                />

                <!-- Card 2 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/2-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/hotel.svg') }}"
                    category="Hotels"
                    title="Crown Plaza Hotel - Reliable Power Solution for Luxury Hospitality"
                />

                <!-- Card 3 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/4-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/commercial.svg') }}"
                    category="Commercial"
                    title="Al Futtaim Shopping Mall - Uninterrupted Power for Retail Excellence"
                />

                <!-- Card 4 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/1-1-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/residential.svg') }}"
                    category="Residential"
                    title="Meydan Residence - Premium Generator Installation for Luxury Living"
                />

                <!-- Card 5 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/2-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/industrial.svg') }}"
                    category="Industrial"
                    title="Industrial Complex - High-Capacity Power Solutions for Manufacturing"
                />

                <!-- Card 6 -->
                <x-case-card 
                    url="{{ route('featured-projects') }}"
                    image="{{ asset('images/featuredProjects/4-1-1.png') }}"
                    categoryIcon="{{ asset('images/icons/infrastructure.svg') }}"
                    category="Infrastructures"
                    title="Water Treatment Plant - Critical Infrastructure Power Backup System"
                />
            </div>

            <div class="section-action">
                <a href="{{ route('featured-projects') }}" class="btn btn-primary btn-large">
                    View All Case Studies
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    @include('landing.sections.footer')

    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>

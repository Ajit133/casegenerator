<!-- Success Cases Section -->
<section class="success-cases-section">
    <div class="container">
        <!-- Section Header -->
        <div class="cases-header">
            <h2 class="cases-title">
                Discover our success <span class="cases-highlight">cases</span>
            </h2>
        </div>
        
        <!-- Cases Grid -->
        <div class="cases-grid">
            <!-- Hotel Case -->
            <article class="case-card">
                <div class="case-image">
                    <img src="{{ asset('images/featuredProjects/1-1-1-1.png') }}" alt="Crown Plaza Hotel Generator Project" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">
                        <span class="category-badge category-hotels">
                            <i class="category-icon">🏨</i>
                            APPLICATION HOTELS
                        </span>
                    </div>
                    <h3 class="case-title">
                        Crown Plaza Project guarantees electrical continuity for a world-leading luxury hotel with our high-capacity generator solutions in Dubai
                    </h3>
                </div>
            </article>

            <!-- Residential Case -->
            <article class="case-card">
                <div class="case-image">
                    <img src="{{ asset('images/featuredProjects/2-1-1.png') }}" alt="Meydan Residence Generator Project" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">
                        <span class="category-badge category-residential">
                            <i class="category-icon">🏠</i>
                            APPLICATION RESIDENTIAL
                        </span>
                    </div>
                    <h3 class="case-title">
                        Meydan Residence generators guarantee electrical supply for the new premium residential complex with reliable backup power system
                    </h3>
                </div>
            </article>

            <!-- Commercial Case -->
            <article class="case-card">
                <div class="case-image">
                    <img src="{{ asset('images/featuredProjects/4-1-1.png') }}" alt="Al Futtaim Shopping Mall Generator Project" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">
                        <span class="category-badge category-commercial">
                            <i class="category-icon">🏬</i>
                            APPLICATION COMMERCIAL
                        </span>
                    </div>
                    <h3 class="case-title">
                        Casa Generators successfully completed the installation of high-capacity generator at Al Futtaim Shopping Mall ensuring uninterrupted power
                    </h3>
                </div>
            </article>
        </div>
        
        <!-- Call to Action -->
        <div class="cases-action">
            <a href="{{ route('featured-projects') }}" class="cases-btn">
                See all cases
                <svg class="btn-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<style>
/* Success Cases Section */
.success-cases-section {
    padding: 80px 0;
    background: #ffffff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Styles */
.cases-header {
    text-align: center;
    margin-bottom: 60px;
}

.cases-title {
    font-size: 2.5rem;
    font-weight: 300;
    color: #2c3e50;
    margin: 0;
    letter-spacing: -0.02em;
}

.cases-highlight {
    font-weight: 600;
    color: #3498db;
}

/* Cases Grid */
.cases-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

/* Case Card */
.case-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    cursor: pointer;
}

.case-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
}

/* Case Image */
.case-image {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.case-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.case-card:hover .case-image img {
    transform: scale(1.05);
}

/* Case Content */
.case-content {
    padding: 30px;
}

.case-category {
    margin-bottom: 20px;
}

.category-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.category-hotels {
    background: rgba(52, 152, 219, 0.1);
    color: #2980b9;
}

.category-residential {
    background: rgba(46, 204, 113, 0.1);
    color: #27ae60;
}

.category-commercial {
    background: rgba(155, 89, 182, 0.1);
    color: #8e44ad;
}

.category-icon {
    font-size: 1rem;
}

.case-title {
    font-size: 1.1rem;
    font-weight: 400;
    color: #2c3e50;
    line-height: 1.6;
    margin: 0;
}

/* Call to Action */
.cases-action {
    text-align: center;
}

.cases-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 32px;
    background: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 30px;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.cases-btn:hover {
    background: #2980b9;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(52, 152, 219, 0.3);
}

.btn-arrow {
    transition: transform 0.3s ease;
}

.cases-btn:hover .btn-arrow {
    transform: translateX(3px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .success-cases-section {
        padding: 60px 0;
    }
    
    .cases-title {
        font-size: 2rem;
    }
    
    .cases-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .case-content {
        padding: 25px;
    }
    
    .case-title {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .cases-title {
        font-size: 1.75rem;
    }
    
    .case-content {
        padding: 20px;
    }
    
    .cases-btn {
        padding: 14px 28px;
        font-size: 0.9rem;
    }
}
</style>

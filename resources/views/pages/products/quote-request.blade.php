<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote - {{ $product->title }} - Casa Generators</title>
    <meta name="description" content="Request a personalized quote for {{ $product->title }} from Casa Generators">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('landing.sections.header')
    
    <section class="quote-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.show', $product) }}">{{ $product->title }}</a></li>
                <li class="breadcrumb-item active">Request Quote</li>
            </ol>
        </nav>
        
        <h1 class="hero-title">Request Quote</h1>
        <p class="hero-subtitle">Get a personalized quote for {{ $product->title }}</p>
    </div>
</section>

<section class="quote-request-section">
    <div class="container">
        <div class="quote-grid">
            <div class="quote-form-container">
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-card">
                    <h2>Quote Request Form</h2>
                    <p class="form-intro">Fill out the form below and we'll get back to you with a detailed quote within 24 hours.</p>

                    <form method="POST" action="{{ route('products.quote-request.store', $product) }}" class="quote-form">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}"
                                   required
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   required
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone') }}"
                                   required
                                   class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="industry">Industry/Application</label>
                            <select id="industry" 
                                    name="industry" 
                                    class="form-control @error('industry') is-invalid @enderror">
                                <option value="">Select your industry</option>
                                <option value="construction" {{ old('industry') == 'construction' ? 'selected' : '' }}>Construction</option>
                                <option value="manufacturing" {{ old('industry') == 'manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                <option value="healthcare" {{ old('industry') == 'healthcare' ? 'selected' : '' }}>Healthcare</option>
                                <option value="data-center" {{ old('industry') == 'data-center' ? 'selected' : '' }}>Data Center</option>
                                <option value="hospitality" {{ old('industry') == 'hospitality' ? 'selected' : '' }}>Hospitality</option>
                                <option value="retail" {{ old('industry') == 'retail' ? 'selected' : '' }}>Retail</option>
                                <option value="residential" {{ old('industry') == 'residential' ? 'selected' : '' }}>Residential</option>
                                <option value="other" {{ old('industry') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('industry')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Additional Requirements/Comments</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5"
                                      placeholder="Please describe your specific needs, installation requirements, power requirements, or any other details that would help us provide an accurate quote."
                                      class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            <i class="fas fa-paper-plane"></i>
                            Submit Quote Request
                        </button>

                        <p class="form-note">
                            <i class="fas fa-lock"></i>
                            Your information is secure and will only be used to provide you with a quote.
                        </p>
                    </form>
                </div>
            </div>

            <div class="product-summary">
                <div class="summary-card">
                    <h3>Product Summary</h3>
                    
                    @if($product->featured_image)
                        <div class="product-image">
                            <img src="{{ $product->featured_image_url }}" 
                                 alt="{{ $product->image_alt_text ?: $product->title }}">
                        </div>
                    @endif

                    <div class="product-info">
                        <h4>{{ $product->title }}</h4>
                        
                        @if($product->category)
                            <span class="category-badge">{{ $product->category }}</span>
                        @endif

                        @if($product->short_description)
                            <p class="description">{{ $product->short_description }}</p>
                        @endif

                        <div class="product-details">
                            @if($product->power_range)
                                <div class="detail-item">
                                    <i class="fas fa-bolt"></i>
                                    <span>{{ $product->power_range }}</span>
                                </div>
                            @endif

                            @if($product->price)
                                <div class="detail-item price">
                                    <i class="fas fa-tag"></i>
                                    <span>{{ $product->formatted_price }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="product-actions">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary">
                                <i class="fas fa-eye"></i>
                                View Full Details
                            </a>
                            <a href="{{ route('products.download-pdf', $product) }}" class="btn btn-outline-secondary">
                                <i class="fas fa-download"></i>
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>Need Help?</h3>
                    <p>Our team is here to help you find the perfect generator solution.</p>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone</strong>
                                <span>+1 (555) 123-4567</span>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong>
                                <span>sales@casagenerators.com</span>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Business Hours</strong>
                                <span>Mon - Fri: 8:00 AM - 6:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-block">
                        Contact Us Directly
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.quote-hero {
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    color: white;
    padding: 2rem 0;
}

.breadcrumb {
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    margin-bottom: 1.5rem;
}

.breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.breadcrumb-item.active {
    color: white;
}

.hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}

.quote-request-section {
    padding: 4rem 0;
    background: #f9fafb;
}

.quote-grid {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 3rem;
}

.form-card, .summary-card, .contact-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    border: 1px solid #e5e7eb;
}

.form-card h2 {
    font-size: 1.75rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #111827;
}

.form-intro {
    color: #6b7280;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    font-weight: 500;
    margin-bottom: 0.5rem;
    color: #374151;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-control.is-invalid {
    border-color: #dc2626;
}

.invalid-feedback {
    color: #dc2626;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.form-note {
    text-align: center;
    color: #6b7280;
    font-size: 0.875rem;
    margin-top: 1rem;
    margin-bottom: 0;
}

.alert {
    padding: 1rem;
    border-radius: 0.5rem;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.alert-success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.summary-card {
    margin-bottom: 1.5rem;
}

.summary-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #111827;
}

.product-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 0.75rem;
    margin-bottom: 1.5rem;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info h4 {
    font-size: 1.125rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
    color: #111827;
}

.category-badge {
    background: #dbeafe;
    color: #1d4ed8;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 1rem;
}

.description {
    color: #6b7280;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.product-details {
    margin-bottom: 1.5rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
    color: #374151;
}

.detail-item.price {
    color: #dc2626;
    font-weight: 600;
}

.detail-item i {
    width: 16px;
    color: #6b7280;
}

.product-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.contact-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #111827;
}

.contact-card p {
    color: #6b7280;
    margin-bottom: 1.5rem;
}

.contact-info {
    margin-bottom: 1.5rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
}

.contact-item i {
    color: #3b82f6;
    width: 20px;
    margin-top: 0.125rem;
}

.contact-item div {
    display: flex;
    flex-direction: column;
}

.contact-item strong {
    color: #111827;
    margin-bottom: 0.25rem;
}

.contact-item span {
    color: #6b7280;
    font-size: 0.875rem;
}

.btn {
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 500;
    text-decoration: none;
    text-align: center;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    border: 1px solid transparent;
    cursor: pointer;
    font-size: 1rem;
}

.btn-lg {
    padding: 1rem 2rem;
    font-size: 1.125rem;
}

.btn-block {
    width: 100%;
}

.btn-primary {
    background: #3b82f6;
    color: white;
}

.btn-primary:hover {
    background: #2563eb;
    color: white;
}

.btn-outline-primary {
    color: #3b82f6;
    border-color: #3b82f6;
    background: transparent;
}

.btn-outline-primary:hover {
    background: #3b82f6;
    color: white;
}

.btn-outline-secondary {
    color: #6b7280;
    border-color: #d1d5db;
    background: transparent;
}

.btn-outline-secondary:hover {
    background: #f3f4f6;
    color: #374151;
}

@media (max-width: 1024px) {
    .quote-grid {
        grid-template-columns: 1fr;
    }
    
    .product-summary {
        order: -1;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .form-card, .summary-card, .contact-card {
        padding: 1.5rem;
    }
    
    .product-actions {
        flex-direction: column;
    }
}
</style>

    @include('landing.sections.footer')
</body>
</html>
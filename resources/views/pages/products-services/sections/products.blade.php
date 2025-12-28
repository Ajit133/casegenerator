<section class="products-showcase-section">
    <div class="container">
        <h2 class="section-title text-center">Providing Innovative & Sustainable Solutions</h2>
        <p class="section-subtitle text-center">Building The Future, Restoring The Past</p>
        
        @if($featuredProducts && $featuredProducts->count() > 0)
            <div class="products-showcase-grid">
                @foreach($featuredProducts as $index => $product)
                    <div class="product-showcase-card {{ $index % 2 === 1 ? 'reverse' : '' }}">
                        <div class="product-showcase-image">
                            @if($product->featured_image)
                                <img src="{{ $product->featured_image_url }}" 
                                     alt="{{ $product->image_alt_text ?: $product->title }}">
                            @else
                                <img src="{{ asset('images/Product_Services/1-4-1-1.png') }}" 
                                     alt="{{ $product->title }}">
                            @endif
                        </div>
                        <div class="product-showcase-content">
                            @if($product->category)
                                <span class="product-badge-large">{{ $product->category }}</span>
                            @endif
                            <h3 class="product-showcase-title">{{ $product->title }}</h3>
                            <p class="product-showcase-description">
                                {{ $product->short_description ?: $product->description }}
                            </p>
                            @if($product->features && count($product->features) > 0)
                                <ul class="product-features">
                                    @foreach($product->features as $feature)
                                        @if(isset($feature['feature']) && $feature['feature'])
                                            <li>{{ $feature['feature'] }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                            <div class="product-actions">
                                <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary">
                                    View Details
                                </a>
                                <a href="{{ route('products.quote-request', $product) }}" class="btn btn-primary">
                                    Request Quote
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Fallback to static content if no products are available --}}
            <div class="products-showcase-grid">
                <div class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/Product_Services/1-4-1-1.png') }}" alt="Leading Diesel Generator Team">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-badge-large">High Power</span>
                        <h3 class="product-showcase-title">CB Generating Set-Perkins</h3>
                        <p class="product-showcase-description">
                            Includes standard diesel generators, ATS panels, automatic starting diesel generators, fully automatic generators, tower lights, silent with soundproof diesel generators & weatherproof diesel generators.
                        </p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                    </div>
                </div>
                
                <div class="product-showcase-card reverse">
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/Product_Services/3-2-1-1.png') }}" alt="Industrial Generators">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-badge-large">Industrial</span>
                        <h3 class="product-showcase-title">CBG-5220 Control System</h3>
                        <p class="product-showcase-description">
                           CBG-5220 generator controller uses micro-processing technique which can carry out precision measure, constant value adjustment, timing and threshold setting, etc. multi-parameters.
                        </p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                    </div>
                </div>
                
                <div class="product-showcase-card">
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/Product_Services/2-3-1-1.png') }}" alt="Commercial Generators">
                    </div>
                    <div class="product-showcase-content">
                        <span class="product-badge-large">Commercial</span>
                        <h3 class="product-showcase-title">CBG-5220 Control System</h3>
                        <p class="product-showcase-description">
                           CBG-5220 generator controller uses micro-processing technique which can carry out precision measure, constant value adjustment, timing and threshold setting, etc. multi-parameters.
                        </p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="text-center mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-outline-primary btn-lg">
                View All Products
            </a>
        </div>
    </div>
</section>

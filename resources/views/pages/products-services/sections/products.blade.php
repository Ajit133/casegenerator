<section class="products-showcase-section">
    <div class="container">
        <h2 class="section-title text-center">Providing Innovative & Sustainable Solutions</h2>
        <p class="section-subtitle text-center">Building The Future, Restoring The Past</p>
        
        @if($featuredProducts && $featuredProducts->count() > 0)
            <div class="products-grid-modern">
                @foreach($featuredProducts as $index => $product)
                    <div class="generator-card">
                        <div class="card-image-section">
                            <div class="generator-card-header">
                                <span class="emergency-balance-badge">EMERGENCY BALANCE</span>
                            </div>
                            
                            <div class="generator-image">
                                @if($product->featured_image)
                                    <img src="{{ $product->featured_image_url }}" 
                                         alt="{{ $product->image_alt_text ?: $product->title }}">
                                @else
                                    <img src="{{ asset('images/Product_Services/1-4-1-1.png') }}" 
                                         alt="{{ $product->title }}">
                                @endif
                            </div>
                            
                            <div class="card-badges">
                                <span class="freq-badge">50HZ</span>
                                <span class="phase-badge">3 PHASES</span>
                            </div>
                        </div>
                        
                        <div class="card-specs-section">
                            <h3 class="generator-model">{{ $product->title }}</h3>
                            
                            <div class="specs-content">
                                <div class="spec-group">
                                    <div class="spec-row">
                                        <span class="spec-label">⚡ POWER:</span>
                                        <div class="power-specs">
                                            @if($product->features && count($product->features) > 0)
                                                @foreach($product->features as $index => $feature)
                                                    @if($index < 3 && isset($feature['feature']) && $feature['feature'])
                                                        <span class="power-line">{{ $feature['feature'] }}</span>
                                                    @endif
                                                @endforeach
                                            @else
                                                <span class="power-line">PRP: 600 kVA (480 kW)</span>
                                                <span class="power-line">ESP: 657 kVA (526 kW)</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="specs-row-inline">
                                    <div class="spec-group">
                                        <span class="spec-label">⚡ VOLTAGE:</span>
                                        <span class="spec-value">400/230V</span>
                                    </div>
                                    
                                    <div class="spec-group">
                                        <span class="spec-label">🏭 EMISSIONS:</span>
                                        <span class="spec-value">EU Stage II</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="generator-actions">
                                @if($product->hasPdfFile())
                                    <a href="{{ route('products.download-pdf', $product) }}" class="download-btn" title="{{ $product->pdf_title ?: 'Download PDF' }}">
                                        <i class="fas fa-download"></i>
                                        Download data sheet
                                    </a>
                                @else
                                    <a href="{{ route('products.show', $product) }}" class="download-btn">
                                        <i class="fas fa-download"></i>
                                        Download data sheet
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Fallback to static content with new design --}}
            <div class="products-grid-modern">
                <div class="generator-card">
                    <div class="card-image-section">
                        <div class="generator-card-header">
                            <span class="emergency-balance-badge">EMERGENCY BALANCE</span>
                        </div>
                        
                        <div class="generator-image">
                            <img src="{{ asset('images/Product_Services/1-4-1-1.png') }}" alt="BGV 650 ST Generator">
                        </div>
                        
                        <div class="card-badges">
                            <span class="freq-badge">50HZ</span>
                            <span class="phase-badge">3 PHASES</span>
                        </div>
                    </div>
                    
                    <div class="card-specs-section">
                        <h3 class="generator-model">BGV 650 ST</h3>
                        
                        <div class="specs-content">
                            <div class="spec-group">
                                <div class="spec-row">
                                    <span class="spec-label">⚡ POWER:</span>
                                    <div class="power-specs">
                                        <span class="power-line">PRP: 600 kVA (480 kW)</span>
                                        <span class="power-line">ESP: 657 kVA (526 kW)</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="specs-row-inline">
                                <div class="spec-group">
                                    <span class="spec-label">⚡ VOLTAGE:</span>
                                    <span class="spec-value">400/230V</span>
                                </div>
                                
                                <div class="spec-group">
                                    <span class="spec-label">🏭 EMISSIONS:</span>
                                    <span class="spec-value">EU Stage II</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="generator-actions">
                            <a href="{{ route('products.index') }}" class="download-btn">
                                <i class="fas fa-download"></i>
                                Download data sheet
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="generator-card">
                    <div class="card-image-section">
                        <div class="generator-card-header">
                            <span class="emergency-balance-badge">EMERGENCY BALANCE</span>
                        </div>
                        
                        <div class="generator-image">
                            <img src="{{ asset('images/Product_Services/3-2-1-1.png') }}" alt="BGB 650 ST Generator">
                        </div>
                        
                        <div class="card-badges">
                            <span class="freq-badge">50HZ</span>
                            <span class="phase-badge">3 PHASES</span>
                        </div>
                    </div>
                    
                    <div class="card-specs-section">
                        <h3 class="generator-model">BGB 650 ST</h3>
                        
                        <div class="specs-content">
                            <div class="spec-group">
                                <div class="spec-row">
                                    <span class="spec-label">⚡ POWER:</span>
                                    <div class="power-specs">
                                        <span class="power-line">PRP: 591 kVA (473 kW)</span>
                                        <span class="power-line">ESP: 648 kVA (518 kW)</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="specs-row-inline">
                                <div class="spec-group">
                                    <span class="spec-label">⚡ VOLTAGE:</span>
                                    <span class="spec-value">400/230V</span>
                                </div>
                                
                                <div class="spec-group">
                                    <span class="spec-label">🏭 EMISSIONS:</span>
                                    <span class="spec-value">EU Stage 0</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="generator-actions">
                            <a href="{{ route('products.index') }}" class="download-btn">
                                <i class="fas fa-download"></i>
                                Download data sheet
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="generator-card">
                    <div class="card-image-section">
                        <div class="generator-card-header">
                            <span class="emergency-balance-badge">EMERGENCY BALANCE</span>
                        </div>
                        
                        <div class="generator-image">
                            <img src="{{ asset('images/Product_Services/2-3-1-1.png') }}" alt="BGV/SW 450 ST Generator">
                        </div>
                        
                        <div class="card-badges">
                            <span class="freq-badge">50HZ</span>
                            <span class="phase-badge">3 PHASES</span>
                        </div>
                    </div>
                    
                    <div class="card-specs-section">
                        <h3 class="generator-model">BGV/SW 450 ST</h3>
                        
                        <div class="specs-content">
                            <div class="spec-group">
                                <div class="spec-row">
                                    <span class="spec-label">⚡ POWER:</span>
                                    <div class="power-specs">
                                        <span class="power-line">PRP: 518 kVA (414 kW)</span>
                                        <span class="power-line">ESP: 567 kVA (454 kW)</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="specs-row-inline">
                                <div class="spec-group">
                                    <span class="spec-label">⚡ VOLTAGE:</span>
                                    <span class="spec-value">220/127V</span>
                                </div>
                                
                                <div class="spec-group">
                                    <span class="spec-label">🏭 EMISSIONS:</span>
                                    <span class="spec-value">EU Stage II</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="generator-actions">
                            <a href="{{ route('products.index') }}" class="download-btn">
                                <i class="fas fa-download"></i>
                                Download data sheet
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="generator-card">
                    <div class="card-image-section">
                        <div class="generator-card-header">
                            <span class="emergency-balance-badge">EMERGENCY BALANCE</span>
                        </div>
                        
                        <div class="generator-image">
                            <img src="{{ asset('images/Product_Services/1-4-1-1.png') }}" alt="BGVW 450 ST Generator">
                        </div>
                        
                        <div class="card-badges">
                            <span class="freq-badge">60HZ</span>
                            <span class="phase-badge">3 PHASES</span>
                        </div>
                    </div>
                    
                    <div class="card-specs-section">
                        <h3 class="generator-model">BGVW 450 ST</h3>
                        
                        <div class="specs-content">
                            <div class="spec-group">
                                <div class="spec-row">
                                    <span class="spec-label">⚡ POWER:</span>
                                    <div class="power-specs">
                                        <span class="power-line">PRP: 518 kVA (414 kW)</span>
                                        <span class="power-line">ESP: 567 kVA (454 kW)</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="specs-row-inline">
                                <div class="spec-group">
                                    <span class="spec-label">⚡ VOLTAGE:</span>
                                    <span class="spec-value">220/127V</span>
                                </div>
                                
                                <div class="spec-group">
                                    <span class="spec-label">🏭 EMISSIONS:</span>
                                    <span class="spec-value">EU Stage II</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="generator-actions">
                            <a href="{{ route('products.index') }}" class="download-btn">
                                <i class="fas fa-download"></i>
                                Download data sheet
                            </a>
                        </div>
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

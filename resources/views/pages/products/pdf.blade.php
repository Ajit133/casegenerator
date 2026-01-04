<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->title }} - Casa Generators</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/Casagenerators Logo (1).png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/Casagenerators Logo (1).png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo/Casagenerators Logo (1).png') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #3b82f6;
            margin-bottom: 10px;
        }
        
        .product-title {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0 10px 0;
            color: #1e3a8a;
        }
        
        .category-badge {
            background: #e0f2fe;
            color: #0277bd;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .product-meta {
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        
        .meta-item {
            margin-bottom: 8px;
        }
        
        .meta-label {
            font-weight: bold;
            color: #374151;
        }
        
        .section {
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #1e3a8a;
            margin-bottom: 15px;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 5px;
        }
        
        .description {
            text-align: justify;
            margin-bottom: 20px;
        }
        
        .features-list {
            list-style: none;
            padding: 0;
        }
        
        .features-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f3f4f6;
            position: relative;
            padding-left: 25px;
        }
        
        .features-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 8px;
            color: #059669;
            font-weight: bold;
        }
        
        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .specs-table th,
        .specs-table td {
            border: 1px solid #e5e7eb;
            padding: 10px;
            text-align: left;
        }
        
        .specs-table th {
            background: #f9fafb;
            font-weight: bold;
            color: #374151;
        }
        
        .specs-table td {
            color: #6b7280;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #3b82f6;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
        }
        
        .contact-info {
            background: #f0f9ff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .contact-info h3 {
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        
        .contact-item {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">CASA GENERATORS</div>
        <div>Premium Generator Solutions</div>
    </div>

    <div class="product-title">{{ $product->title }}</div>
    
    @if($product->category)
        <span class="category-badge">{{ $product->category }}</span>
    @endif

    <div class="product-meta">
        <div class="meta-item">
            <span class="meta-label">Product ID:</span> {{ $product->id }}
        </div>
        
        @if($product->power_range)
            <div class="meta-item">
                <span class="meta-label">Power Range:</span> {{ $product->power_range }}
            </div>
        @endif
        
        @if($product->price)
            <div class="meta-item">
                <span class="meta-label">Price:</span> {{ $product->formatted_price }}
            </div>
        @endif
        
        <div class="meta-item">
            <span class="meta-label">Generated:</span> {{ now()->format('M d, Y \a\t g:i A') }}
        </div>
    </div>

    @if($product->short_description)
        <div class="section">
            <div class="section-title">Overview</div>
            <p class="description">{{ $product->short_description }}</p>
        </div>
    @endif

    <div class="section">
        <div class="section-title">Product Description</div>
        <div class="description">
            {!! strip_tags($product->description, '<p><br><strong><em><ul><ol><li>') !!}
        </div>
    </div>

    @if($product->features && count($product->features) > 0)
        <div class="section">
            <div class="section-title">Key Features</div>
            <ul class="features-list">
                @foreach($product->features as $feature)
                    @if(isset($feature['feature']) && $feature['feature'])
                        <li>{{ $feature['feature'] }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif

    @if($product->specifications && count($product->specifications) > 0)
        <div class="section">
            <div class="section-title">Technical Specifications</div>
            <table class="specs-table">
                <thead>
                    <tr>
                        <th>Specification</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product->specifications as $spec)
                        @if(isset($spec['spec_name']) && isset($spec['spec_value']) && $spec['spec_name'] && $spec['spec_value'])
                            <tr>
                                <td><strong>{{ $spec['spec_name'] }}</strong></td>
                                <td>{{ $spec['spec_value'] }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <div class="contact-info">
        <h3>Contact Information</h3>
        <div class="contact-item"><strong>Company:</strong> Casa Generators</div>
        <div class="contact-item"><strong>Phone:</strong> +1 (555) 123-4567</div>
        <div class="contact-item"><strong>Email:</strong> sales@casagenerators.com</div>
        <div class="contact-item"><strong>Website:</strong> www.casagenerators.com</div>
        <div class="contact-item"><strong>Business Hours:</strong> Monday - Friday, 8:00 AM - 6:00 PM</div>
    </div>

    <div class="footer">
        <p><strong>Casa Generators</strong> - Your trusted partner for reliable power solutions</p>
        <p>This document was generated on {{ now()->format('F j, Y \a\t g:i A') }}</p>
    </div>
</body>
</html>
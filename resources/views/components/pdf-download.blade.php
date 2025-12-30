@props(['product', 'variant' => 'button', 'class' => ''])

@if($product->hasPdfFile())
    @if($variant === 'link')
        <a href="{{ route('products.download-pdf', $product) }}" 
           class="pdf-download-link {{ $class }}"
           title="Download {{ $product->pdf_title ?: 'Product PDF' }}">
            <i class="fas fa-file-pdf"></i>
            {{ $product->pdf_title ?: 'Download PDF' }}
        </a>
    @elseif($variant === 'icon')
        <a href="{{ route('products.download-pdf', $product) }}" 
           class="pdf-download-icon {{ $class }}"
           title="Download {{ $product->pdf_title ?: 'Product PDF' }}">
            <i class="fas fa-file-pdf"></i>
        </a>
    @else
        <a href="{{ route('products.download-pdf', $product) }}" 
           class="btn btn-outline-primary pdf-download-btn {{ $class }}">
            <i class="fas fa-file-pdf"></i>
            {{ $product->pdf_title ?: 'Download PDF' }}
        </a>
    @endif
@else
    @if($variant === 'link')
        <span class="pdf-download-link disabled {{ $class }}" title="PDF not available">
            <i class="fas fa-file-slash"></i> PDF Not Available
        </span>
    @elseif($variant === 'icon')
        <span class="pdf-download-icon disabled {{ $class }}" title="PDF not available">
            <i class="fas fa-file-slash"></i>
        </span>
    @else
        <button class="btn btn-outline-secondary disabled {{ $class }}" title="PDF not available">
            <i class="fas fa-file-slash"></i> PDF Not Available
        </button>
    @endif
@endif
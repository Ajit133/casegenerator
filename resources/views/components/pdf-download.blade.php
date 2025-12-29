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
@endif
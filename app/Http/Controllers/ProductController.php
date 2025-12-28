<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Display a listing of published products.
     */
    public function index(): View
    {
        $products = Product::published()
            ->ordered()
            ->get();

        return view('pages.products.index', compact('products'));
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product): View
    {
        // Ensure the product is published (unless in admin)
        if ($product->status !== 'published') {
            abort(404);
        }

        return view('pages.products.show', compact('product'));
    }

    /**
     * Show the quote request form for a specific product.
     */
    public function quoteRequest(Product $product): View
    {
        // Ensure the product is published
        if ($product->status !== 'published') {
            abort(404);
        }

        return view('pages.products.quote-request', compact('product'));
    }

    /**
     * Store a quote request for a specific product.
     */
    public function storeQuoteRequest(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'industry' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        $validated['product_id'] = $product->id;
        $validated['product_name'] = $product->title;

        QuoteRequest::create($validated);

        return redirect()
            ->route('products.quote-request', $product)
            ->with('success', 'Your quote request has been submitted successfully! We will contact you soon.');
    }

    /**
     * Download product details as PDF.
     */
    public function downloadPdf(Product $product)
    {
        // Ensure the product is published
        if ($product->status !== 'published') {
            abort(404);
        }

        $pdf = Pdf::loadView('pages.products.pdf', compact('product'))
            ->setPaper('a4', 'portrait');

        $filename = 'product-' . $product->slug . '.pdf';
        
        return $pdf->download($filename);
    }

    /**
     * Get products for API or AJAX requests.
     */
    public function api()
    {
        return Product::published()
            ->ordered()
            ->select(['id', 'title', 'slug', 'short_description', 'category', 'featured_image', 'price'])
            ->get()
            ->map(function ($product) {
                return [
                    'id' => $product->id,
                    'title' => $product->title,
                    'slug' => $product->slug,
                    'short_description' => $product->short_description,
                    'category' => $product->category,
                    'featured_image_url' => $product->featured_image_url,
                    'formatted_price' => $product->formatted_price,
                ];
            });
    }
}
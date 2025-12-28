<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique(); 
            $table->string('slug')->unique();  
            $table->text('description');  // Rich text description with embedded images
            $table->text('short_description')->nullable(); // Brief description for cards
            $table->string('category')->nullable(); // e.g., 'High Power', 'Industrial', 'Commercial'
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable(); // Array of image paths for gallery
            $table->json('content_images')->nullable(); // Array of image paths for rich editor
            $table->string('image_alt_text')->nullable();
            $table->decimal('price', 10, 2)->nullable(); // Optional price
            $table->string('power_range')->nullable(); // e.g., '1000 kVA - 5000 kVA'
            $table->json('specifications')->nullable(); // JSON for technical specs
            $table->json('features')->nullable(); // JSON array of features
            $table->boolean('is_featured')->default(false);
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->integer('sort_order')->default(0); // For custom ordering
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
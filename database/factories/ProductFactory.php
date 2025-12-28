<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['High Power', 'Industrial', 'Commercial', 'Residential', 'Control System'];
        
        return [
            'title' => $this->faker->words(3, true) . ' Generator',
            'slug' => function (array $attributes) {
                return \Illuminate\Support\Str::slug($attributes['title']);
            },
            'short_description' => $this->faker->sentences(2, true),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
            'category' => $this->faker->randomElement($categories),
            'power_range' => $this->faker->numberBetween(50, 5000) . ' kVA',
            'price' => $this->faker->numberBetween(15000, 500000),
            'features' => [
                ['feature' => 'Advanced control system'],
                ['feature' => 'Fuel efficient operation'],
                ['feature' => 'Remote monitoring capability'],
                ['feature' => 'Low noise operation'],
                ['feature' => 'Weatherproof enclosure'],
            ],
            'specifications' => [
                ['spec_name' => 'Engine Type', 'spec_value' => $this->faker->randomElement(['Perkins', 'Caterpillar', 'Cummins']) . ' Engine'],
                ['spec_name' => 'Fuel Type', 'spec_value' => 'Diesel'],
                ['spec_name' => 'Voltage', 'spec_value' => '400/230V'],
                ['spec_name' => 'Frequency', 'spec_value' => '50Hz'],
            ],
            'is_featured' => $this->faker->boolean(30), // 30% chance of being featured
            'status' => $this->faker->randomElement(['published', 'draft']),
            'sort_order' => $this->faker->numberBetween(1, 100),
        ];
    }

    /**
     * Indicate that the product is featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    /**
     * Indicate that the product is published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'published',
        ]);
    }

    /**
     * Indicate that the product is a draft.
     */
    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'draft',
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@casagenerators.com',
        ]);

        // Seed all data
        $this->call([
            ProductSeeder::class,    // 12 products
            ProjectSeeder::class,    // 15 projects (10 published + 3 featured + 2 draft)
            PostSeeder::class,       // 10 blog posts
            ContactSeeder::class,    // 12 contact inquiries
        ]);
    }
}

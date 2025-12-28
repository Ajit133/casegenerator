<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 15 projects with mixed statuses
        Project::factory()
            ->count(10)
            ->published()
            ->create();

        // Create 3 featured projects (published)
        Project::factory()
            ->count(3)
            ->published()
            ->featured()
            ->create();

        // Create 2 draft projects
        Project::factory()
            ->count(2)
            ->draft()
            ->create();
    }
}
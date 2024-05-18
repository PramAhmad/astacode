<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // craete dummmy for project and projject image
    Project::factory()
    ->count(10)
    ->hasImages(3) // Assuming each project should have 3 images
    ->create();


    }
}

<?php

namespace Database\Seeders;

use App\Models\PostVideo;
use Illuminate\Database\Seeder;

class PostVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostVideo::factory()->count(5)->create();
    }
}
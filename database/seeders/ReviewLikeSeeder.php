<?php

namespace Database\Seeders;

use App\Models\ReviewLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReviewLike::factory()->count(120)->create();
    }
}

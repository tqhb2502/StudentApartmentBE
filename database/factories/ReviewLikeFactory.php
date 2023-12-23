<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewLike>
 */
class ReviewLikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->all();
        $reviewIds = Review::pluck('id')->all();

        return [
            'user_id' => Arr::random($userIds),
            'review_id' => Arr::random($reviewIds),
        ];
    }
}

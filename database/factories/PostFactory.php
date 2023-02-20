<?php

namespace Database\Factories;

use App\Enums\PostState;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::find(fake()->randomDigit())->id ?? User::factory()->create()->id,
            'title' => fake()->title(),
            'body' => fake()->paragraph(),
            'state' => PostState::Draft,

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title,
            'description' => fake()->text,
            'content' => 'https://www.youtube.com/watch?v=jfKfPfyJRdk',
            'status' => rand(1,3),
        ];
    }
}

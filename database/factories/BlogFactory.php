<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'image_url' => $this->faker->imageUrl(640,480),
            'summary' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraph(100),
            'writer' => fake()->name(),
        ];
    }
}
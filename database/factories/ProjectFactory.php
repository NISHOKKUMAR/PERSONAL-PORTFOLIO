<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Automatically creates a related user
            'title' => $this->faker->sentence(3), // Generates a short title
            'description' => $this->faker->paragraph(2), // Generates a short description
            'tags' => implode(',', $this->faker->words(3)), // Generates comma-separated tags
            'live_url' => $this->faker->url(), // Generates a random URL
            'github_url' => $this->faker->url(), // Generates a random URL
            'content' => $this->faker->paragraphs(3, true), // Generates detailed content
            'image' => $this->faker->imageUrl(640, 480, 'technics', true, 'Project'), // Placeholder image URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

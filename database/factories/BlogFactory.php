<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Blog;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */

class BlogFactory extends Factory
{
    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'tags' => implode(',', $this->faker->words(3)), 
            'content' => implode("\n\n", $this->faker->paragraphs(rand(2, 6))),  
            'image' => $this->faker->imageUrl(),   
            'slug' => $this->faker->slug,          
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

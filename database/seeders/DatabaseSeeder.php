<?php
namespace Database\Seeders;
use Faker\Factory as Faker;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('en_US');
        \App\Models\User::factory(5)->withBlogs(3)->create();
        \App\Models\Project::factory()->count(10)->create();
    }
}

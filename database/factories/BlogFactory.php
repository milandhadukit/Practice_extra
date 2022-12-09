<?php

namespace Database\Factories;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}

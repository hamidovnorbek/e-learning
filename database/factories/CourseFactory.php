<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'image_path' => fake()->regexify('[A-Za-z0-9]{255}'),
            'intro_video' => fake()->word(),
            'price' => fake()->numberBetween(-10000, 10000),
            'is_published' => fake()->boolean(),
            'published_at' => fake()->dateTime(),
            'user_id' => fake()->word(),
        ];
    }
}

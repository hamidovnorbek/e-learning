<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Lesson;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'course_id' => fake()->word(),
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'video_path' => fake()->text(),
            'duration' => fake()->word(),
            'position' => fake()->numberBetween(-10000, 10000),
            'is_free' => fake()->boolean(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->colorName(),
            'content' => $this->faker->words(300, true),
            'course_date' => $this->faker->date(),
            'course_id' => Course::inRandomOrder()->first()
        ];
    }
}

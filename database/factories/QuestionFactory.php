<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> rtrim($this->faker->sentence(rand(5,10)),'.'),
            'body' => $this->faker->paragraph(rand(5,10),true),
            'views'=> 0,
            'votes'=>0
        ];
    }
}

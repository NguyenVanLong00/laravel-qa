<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraph(rand(3,7),true),
            'user_id' => User::all()->random()->id,
            'votes_count' => rand(-10,10)
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)
            ->create()
            ->each(function ($u) {
                $u->questions()
                    ->saveMany(Question::factory(rand(1, 5))->make())
                    ->each(function ($q){
                       $q->answers()->saveMany(Answer::factory(rand(2,10))->make());
                    });

            });

    }
}

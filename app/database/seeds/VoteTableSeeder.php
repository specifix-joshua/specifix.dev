<?php

use Faker\Factory as Faker;

class VoteTableSeeder extends Seeder {
    
    public function run() 
    {
    
        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 1;
        $vote->question_id = 2;
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 2;
        $vote->question_id = 2;
        $vote->save();

        $vote = new Vote();
        $vote->count = -1;
        $vote->user_id = 3;
        $vote->question_id = 1;
        $vote->answer_id = 
        $vote->save();

        $vote = new Vote();
        $vote->count = -1;
        $vote->user_id = 2;
        $vote->question_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 3;
        $vote->answer_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 1;
        $vote->answer_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 3;
        $vote->question_id = 3; 
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 2;
        $vote->answer_id = 3;
        $vote->save();

        $vote = new Vote();
        $vote->count = 1;
        $vote->user_id = 1;
        $vote->answer_id = 3;
        $vote->save();

        $vote = new Vote();
        $vote->count = -1;
        $vote->user_id = 1;
        $vote->question_id = 1;
        $vote->save();

        foreach(range (1, 25) as $index) {
            $faker = Faker::create();
            Vote::create([
                'count' => $faker->numberBetween($min = -10, $max = 50),
                'user_id' => $faker->unique()->numberBetween($min = 4, 50),
                'question_id' => $faker->unique()->numberBetween($min = 4, $max = 50),
                'answer_id' => $faker->unique()->numberBetween($min = 4, $max = 100)
            ]);
        }
    }
}
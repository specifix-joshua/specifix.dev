<?php

use Faker\Factory as Faker;

class AnswerTableSeeder extends Seeder {
    
    public function run() {

        $answer = new Answer();
        $answer->content = 'magic';
        $answer->user_id = 2;
        $answer->question_id = 1;
        $answer->save();

        $answer = new Answer();
        $answer->content = 'not usually';
        $answer->user_id = 3;
        $answer->question_id = 2;
        $answer->save();

        $answer = new Answer();
        $answer->content = 'use bootstrap';
        $answer->code_content = 'some more css code here';
        $answer->user_id = 1;
        $answer->question_id = 3;
        $answer->save();

        $faker = Faker::create();

        foreach(range (1, 100) as $index) {
            $faker = Faker::create();
            Answer::create([
                'content' => $faker->paragraph(4),
                'user_id' => $faker->unique()->numberBetween($min = 1, $max = 50),
                'question_id' => $faker->unique()->numberBetween($min = 4, $max = 50)
            ]);
        }
    }
}
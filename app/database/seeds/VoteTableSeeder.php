<?php

class VoteTableSeeder extends Seeder {
    
    public function run() 
    {
        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 1;
        $vote->question_id = 2;
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 2;
        $vote->question_id = 2;
        $vote->save();

        $vote = new Vote();
        $vote->value = -1;
        $vote->user_id = 3;
        $vote->question_id = 1;
        $vote->answer_id = 
        $vote->save();

        $vote = new Vote();
        $vote->value = -1;
        $vote->user_id = 2;
        $vote->question_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 3;
        $vote->answer_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 1;
        $vote->answer_id = 1;
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 3;
        $vote->question_id = 3; 
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 2;
        $vote->answer_id = 3;
        $vote->save();

        $vote = new Vote();
        $vote->value = 1;
        $vote->user_id = 1;
        $vote->answer_id = 3;
        $vote->save();

        $vote = new Vote();
        $vote->value = -1;
        $vote->user_id = 1;
        $vote->question_id = 1;
        $vote->save();
    }
}
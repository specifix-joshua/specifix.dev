<?php

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

    }
}
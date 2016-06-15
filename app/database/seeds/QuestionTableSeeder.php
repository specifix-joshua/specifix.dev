<?php

class QuestionTableSeeder extends Seeder {
    
    public function run() {

        $question = new Question();
        $question->title = 'how do make javascript do things';
        $question->content = 'how does it javascript?';
        $question->user_id = 1;
        $question->save();

        $question = new Question();
        $question->title = 'does php need a closing tag';
        $question->content = 'does it?';
        $question->user_id = 2;
        $question->save();

        $question = new Question();
        $question->title = 'css isnt working';
        $question->content = 'cannot make this div work please help';
        $question->code_content = 'some css here';
        $question->user_id = 3;
        $question->save();

    }
}
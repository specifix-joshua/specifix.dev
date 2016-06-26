<?php

class LanguageQuestionTableSeeder extends Seeder {
    
    public function run() 
    {
        $data = array();

        $questions = DB::table('questions')
            ->select(DB::raw('*'))
            ->get();

        foreach ($questions as  $key => $question) {
            
            if (stripos($question->title, 'MySQL')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '6'
                    ];
            }
            if (stripos($question->title, 'JQuery')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '4'
                    ];
            }
            if (stripos($question->title, 'CSS')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '2'
                    ];
            }
            if (stripos($question->title, 'HTML')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '1'
                    ];
            }
            if (stripos($question->title, 'Laravel')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '7'
                    ];
            }
            if (stripos($question->title, 'PHP')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '5'
                    ];
            }
            if (stripos($question->title, 'Javascript')) {
                $data[] = [
                    'question_id' => $question->id,
                    'language_id' => '3'
                    ];
            }
        }

        DB::table('language_question')->insert($data);
    }
}
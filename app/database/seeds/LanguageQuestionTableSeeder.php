<?php

class LanguageQuestionTableSeeder extends Seeder {
    
    public function run() 
    {
        $data = [
                    [
                    'question_id' => 1,
                    'language_id' => 1,
                    ],
                    [
                    'question_id' => 1,
                    'language_id' => 2,
                    ],
                    [
                    'question_id' => 2,
                    'language_id' => 2,
                    ],
                    [
                    'question_id' => 3,
                    'language_id' => 1,
                    ],
                    [
                    'question_id' => 3,
                    'language_id' => 2,
                    ]
                ];
         DB::table('language_question')->insert($data);
    }
}
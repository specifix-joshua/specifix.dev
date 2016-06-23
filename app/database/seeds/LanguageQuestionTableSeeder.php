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

        for ($i=4; $i<25; $i++) {
           $data[] = ['question_id' => $i, 'language_id' => mt_rand(1, 3),];
           $data[] = ['question_id' => $i, 'language_id' => mt_rand(4, 7),];
        };
        DB::table('language_question')->insert($data);
    }
}
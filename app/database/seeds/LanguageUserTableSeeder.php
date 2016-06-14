<?php

class LanguageUserTableSeeder extends Seeder {
    
    public function run() 
    {
        $data = [
                    [
                    'user_id' => 1,
                    'language_id' => 2,
                    ],
                    [
                    'user_id' => 1,
                    'language_id' => 3,
                    ],
                    [
                    'user_id' => 2,
                    'language_id' => 1,
                    ],
                    [
                    'user_id' => 3,
                    'language_id' => 2,
                    ],
                    [
                    'user_id' => 3,
                    'language_id' => 1,
                    ]
                ];
         DB::table('language_user')->insert($data);
    }
}
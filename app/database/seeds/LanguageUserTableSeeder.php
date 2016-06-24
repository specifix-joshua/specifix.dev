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
        for ($i=4; $i<53; $i++) {
           $data[] = ['user_id' => $i, 'language_id' => mt_rand(1, 3),];
           $data[] = ['user_id' => $i, 'language_id' => mt_rand(4, 7),];
        };

        DB::table('language_user')->insert($data);
    }
}
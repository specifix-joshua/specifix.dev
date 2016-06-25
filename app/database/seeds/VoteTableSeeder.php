<?php


use Faker\Factory as Faker;
class VoteTableSeeder extends Seeder {
    
    public function run() 
    {
        

        for ($i=0; $i < 10000; $i++) { 
            $user_id = mt_rand(1, 70);
            $question_id = mt_rand(1, 113);

            $dupe = DB::table('votes')
            ->select(DB::raw('user_id, question_id'))
            ->where('user_id', '=', $user_id)
            ->where('question_id', '=', $question_id)
            ->get();
            if (empty($dupe)) {
                $vote = new Vote();
                $vote->count = 1;
                $vote->user_id = $user_id;
                $vote->question_id = $question_id;
                $vote->save();
                
            }
        }

        for ($i=0; $i < 10000; $i++) { 
            $user_id = mt_rand(1, 70);
            $answer_id = mt_rand(1, 100);

            $dupe = DB::table('votes')
            ->select(DB::raw('user_id, answer_id'))
            ->where('user_id', '=', $user_id)
            ->where('answer_id', '=', $answer_id)
            ->get();
            if (empty($dupe)) {
                $vote = new Vote();
                $vote->count = 1;
                $vote->user_id = $user_id;
                $vote->answer_id = $answer_id;
                $vote->save();
                
            }
        }
    }
}
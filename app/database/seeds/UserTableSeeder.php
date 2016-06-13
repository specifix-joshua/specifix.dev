<?php

class UserTableSeeder extends Seeder {
    
    public function run() {

        $user = new User();
        $user->email = 'isaace@gmail.com';
        $user->username = 'iceman';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'isaac';
        $user->last_name = 'castillo';
        $user->pref_lang = 'css';
        $user->is_admin = 'no';
        $user->save();

        $user = new User();
        $user->email = 'zach@gmail.com';
        $user->username = 'zach';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'zach';
        $user->last_name = 'gulde';
        $user->pref_lang = 'php';
        $user->is_admin = 'no';
        $user->save();

        $user = new User();
        $user->email = 'ryan@gmail.com';
        $user->username = 'ryan';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'ryan';
        $user->last_name = 'javascript';
        $user->pref_lang = 'javascript';
        $user->is_admin = 'no';
        $user->save();
    }
}
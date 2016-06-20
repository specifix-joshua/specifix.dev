<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
    
    public function run() {

        $user = new User();
        $user->email = 'isaac@gmail.com';
        $user->username = 'iceman';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'isaac';
        $user->last_name = 'castillo';
        $user->is_admin = 'no';
        $user->save();

        $user = new User();
        $user->email = 'zach@gmail.com';
        $user->username = 'zach';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'zach';
        $user->last_name = 'gulde';
        $user->is_admin = 'no';
        $user->save();

        $user = new User();
        $user->email = 'ryan@gmail.com';
        $user->username = 'ryan';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = 'ryan';
        $user->last_name = 'javascript';
        $user->is_admin = 'no';
        $user->save();

        foreach(range(1, 50) as $index) {
            $faker = Faker::create();
            User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $_ENV['USER_PASSWORD'],
                'first_name' => $faker->firstName($gender = null|'male'|'female'),
                'last_name' => $faker->lastName,
                'is_admin' => 'no'

            ]);
        }
    }
}
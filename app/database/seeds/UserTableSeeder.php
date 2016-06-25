<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
    
    public function run() {

        $first_names = ['alan', 'alex', 'andrew', 'daniel', 'edric', 'james', 'jerod', 'kari', 'kristen', 'marcus', 'mauro', 'natalie', 'niki', 'will', 'bobbie', 'lorena', 'micah', 'melissa', 'raj', 'pancho'];
        $last_names = ['lauritzen', 'garrido', 'powell-morse', 'curran', 'martinez', 'canning', 'west', 'palomino', 'cates', 'mondragon', 'cabrales', 'ortiz', 'williams', 'campbell', 'oconnor', 'villanueva', 'johnson', 'canales', 'mulji', 'escobedo'];

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

        foreach ($first_names as $key => $first_name) {
            $user = new User();
            $user->email = $first_name . '@gmail.com';
            $user->username = $first_name;
            $user->password = $_ENV['USER_PASSWORD'];
            $user->first_name = $first_name;
            $user->last_name = $last_names[$key];
            $user->is_admin = 'no';
            $user->save();
        }

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

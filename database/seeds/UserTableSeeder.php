<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>  "Mhina Claire Naval",
            'email' => "mhina@gmail.com",
            'password' => bcrypt('Sangeyasha'),
            'photo' => "profile.png",
            'type' =>  'admin',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' =>  "Dominic Nayan",
            'email' => "dominic@gmail.com",
            'password' => bcrypt('Sange'),
            'photo' => "profile2.png",
            'type' =>  'admin',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' =>  "First Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('Yasha'),
            'photo' => "profile2.png",
            'type' =>  'admin',
            'created_at' => now(),
        ]);
    }
}

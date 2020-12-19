<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'MANAGER',
            'email' => 'admin@flowelto.com',
            'password' => bcrypt('adminadmin'),
            'address' => 'Admin address 10',
            'gender' => 'male',
            'dob' => 'asdf',
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'username' => 'USER A',
            'email' => 'user_a@flowelto.com',
            'password' => bcrypt('useruser'),
            'address' => 'User address 20',
            'gender' => 'male',
            'dob' => 'asdf',
            'is_admin' => false,
        ]);

        DB::table('users')->insert([
            'username' => 'USER B',
            'email' => 'user_b@flowelto.com',
            'password' => bcrypt('useruser'),
            'address' => 'User address 30',
            'gender' => 'female',
            'dob' => 'asdf',
            'is_admin' => false,
        ]);
    }
}

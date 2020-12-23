<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('adminadmin'),
            'address' => 'Admin address 10',
            'gender' => 'male',
            'dob' => 'January 1',
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'username' => 'USER A',
            'email' => 'user_a@flowelto.com',
            'password' => Hash::make('useruser'),
            'address' => 'User address 20',
            'gender' => 'male',
            'dob' => 'March 1',
            'is_admin' => false,
        ]);

        DB::table('users')->insert([
            'username' => 'USER B',
            'email' => 'user_b@flowelto.com',
            'password' => Hash::make('useruser'),
            'address' => 'User address 30',
            'gender' => 'female',
            'dob' => 'December 1',
            'is_admin' => false,
        ]);
    }
}

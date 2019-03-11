<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ravi',
            'lname' => 'Sondagar',
            'email' => 'ravi@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('123'),
            'active' => '1',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
        DB::table('users')->insert([
            'name' => 'Hari',
            'lname' => 'Patel',
            'email' => 'hari@gmail.com',
            'role' => 'member',
            'password' => Hash::make('123'),
            'active' => '1',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
    }
}

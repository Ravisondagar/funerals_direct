<?php

use Illuminate\Database\Seeder;

class locationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'user_id' => '1',
            'title' => 'Ahmedabad',
            'slug' => 'ahmedabad',
            'price' => '250',
            'description' => 'xyz',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
    }
}

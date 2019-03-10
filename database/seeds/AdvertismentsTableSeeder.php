<?php

use Illuminate\Database\Seeder;

class AdvertismentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisments')->insert([
            'text' => 'first advertisments',
            'link' => 'www.google.co.in',
            'active' => '1',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
    }
}

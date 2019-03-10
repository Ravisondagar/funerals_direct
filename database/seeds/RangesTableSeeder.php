<?php

use Illuminate\Database\Seeder;

class RangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranges')->insert([
            'name' => 'first range',
            'slug' => 'first_range',
            'min' => '50',
            'max' => '100',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
    }
}

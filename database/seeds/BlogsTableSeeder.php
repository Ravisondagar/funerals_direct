<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'blog_category_id' => '1',
            'author_id' => '1',
            'title' => 'first blog',
            'slug' => 'first_blog',
            'description' => 'xyz',
            'is_archive' => '1',
            'publish' => '1',
            'created_at' => '2018-07-16 05:48:24',
            'updated_at' => '2018-07-16 05:48:24',
        ]);
    }
}
